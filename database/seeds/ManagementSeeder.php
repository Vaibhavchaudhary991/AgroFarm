<?php

use Illuminate\Database\Seeder;

class ManagementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fallArmyworm = \App\Models\Pest::where('name', 'Fall Armyworm')->first();
        $riceStemBorer = \App\Models\Pest::where('name', 'Rice Stem Borer')->first();
        $aphids = \App\Models\Pest::where('name', 'Cotton Aphids')->first();

        if($fallArmyworm) {
            \App\Models\Management::create([
                'pest_id' => $fallArmyworm->id,
                'prevention' => 'Early planting, intercropping with non-host crops like legumes, and removing weed hosts around the field.',
                'organic_control' => 'Application of Neem oil, wood ash in leaf whorls, or Bacillus thuringiensis (Bt) sprays.',
                'chemical_control' => 'Use of Spinetoram or Chlorantraniliprole based insecticides as per local dosage recommendations.',
                'biological_control' => 'Release of Trichogramma wasps or encouraging natural predators like ladybird beetles and lacewings.'
            ]);
        }

        if($riceStemBorer) {
            \App\Models\Management::create([
                'pest_id' => $riceStemBorer->id,
                'prevention' => 'Burning stubble after harvest, deep plowing to expose larvae, and synchronized planting in the community.',
                'organic_control' => 'Application of Beauveria bassiana (fungal spray) or botanical extracts like Ginger-Garlic-Chili paste.',
                'chemical_control' => 'Fipronil granules or Carbofuran application in standing water.',
                'biological_control' => 'Installing pheromone traps (5-10 per acre) and promoting biodiversity to attract parasitic wasps.'
            ]);
        }

        if($aphids) {
            \App\Models\Management::create([
                'pest_id' => $aphids->id,
                'prevention' => 'Avoiding excessive nitrogen fertilizers, using reflective mulches, and maintaining field sanitation.',
                'organic_control' => 'Spraying soap water solution, Neem oil (3ml per litre), or fermented cow urine.',
                'chemical_control' => 'Use of Imidacloprid (0.3ml per litre) or Thiamethoxam pesticides.',
                'biological_control' => 'Introduction of Ladybird beetles, Hoverflies, or parasitic wasps (Aphidius colemani).'
            ]);
        }
    }
}
