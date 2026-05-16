<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pest;
use App\Models\Crop;

class PestController extends Controller
{
    public function getCrops()
    {
        return response()->json(Crop::all());
    }

    public function getPestsByCrop($cropId)
    {
        $pests = Pest::where('crop_id', $cropId)->get();
        return response()->json($pests);
    }

    public function identify(Request $request)
    {
        $cropId = $request->crop_id;
        $crop = \App\Models\Crop::find($cropId);
        $symptoms = $request->symptoms;
        $apiKey = env('GROQ_API_KEY');

        // Try AI Diagnosis if API Key is present
        if ($apiKey && $symptoms && $crop) {
            try {
                $response = \Illuminate\Support\Facades\Http::timeout(10)->withToken($apiKey)
                    ->post('https://api.groq.com/openai/v1/chat/completions', [
                        'model' => 'llama3-8b-8192', // Faster model for instant results
                        'messages' => [
                            ['role' => 'system', 'content' => 'You are an expert Agronomist. Identify the pest/disease precisely. Provide detailed: 1. Identification, 2. Protection (Organic/Chemical), 3. Avoidance. Return ONLY valid JSON: {"name": "...", "symptoms": "...", "advisory": {"prevention": "...", "organic_control": "...", "biological_control": "...", "chemical_control": "..."}}'],
                            ['role' => 'user', 'content' => "Crop: {$crop->name}. Symptoms: {$symptoms}."]
                        ],
                        'response_format' => ['type' => 'json_object']
                    ]);

                if ($response->successful()) {
                    $aiResult = json_decode($response->json()['choices'][0]['message']['content'], true);
                    if (isset($aiResult['name'])) {
                        return response()->json($aiResult);
                    }
                }
            } catch (\Exception $e) {
                // Log error if needed: \Log::error($e->getMessage());
            }
        }

        // Fallback: Local Database Matching
        $symptomsInput = strtolower($symptoms);
        $pests = \App\Models\Pest::with('advisory')->where('crop_id', $cropId)->get();
        $match = null;
        $highestScore = 0;

        if($symptomsInput) {
            $inputKeywords = explode(',', $symptomsInput);
            foreach($pests as $pest) {
                $score = 0;
                $pestSymptoms = strtolower($pest->symptoms);
                foreach($inputKeywords as $keyword) {
                    $keyword = trim($keyword);
                    if($keyword && stripos($pestSymptoms, $keyword) !== false) $score++;
                }
                if($score > $highestScore) {
                    $highestScore = $score;
                    $match = $pest;
                }
            }
        }

        if(!$match && $pests->count() > 0) $match = $pests->first();

        return response()->json($match);
    }
}
