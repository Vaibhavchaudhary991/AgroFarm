<?php

use Illuminate\Database\Seeder;

class PestSeeder extends Seeder
{
    public function run()
    {
        // 1. Rice
        $rice = \App\Models\Crop::create(['name' => 'Rice', 'image' => 'rice.jpg']);
        \App\Models\Pest::create([
            'crop_id' => $rice->id,
            'name' => 'Rice Stem Borer',
            'image' => 'stem_borer.jpg',
            'symptoms' => 'Dead hearts, small holes in stem, dried central shoots, sawdust-like waste near holes.',
            'management' => 'Detailed in advisory'
        ]);

        // 2. Maize
        $maize = \App\Models\Crop::create(['name' => 'Maize', 'image' => 'maize.jpg']);
        \App\Models\Pest::create([
            'crop_id' => $maize->id,
            'name' => 'Fall Armyworm',
            'image' => 'armyworm.jpg',
            'symptoms' => 'Whorl damage, ragged leaf edges, large larvae visible, yellowing of leaves.',
            'management' => 'Detailed in advisory'
        ]);

        // 3. Cotton
        $cotton = \App\Models\Crop::create(['name' => 'Cotton', 'image' => 'cotton.jpg']);
        \App\Models\Pest::create([
            'crop_id' => $cotton->id,
            'name' => 'Cotton Aphids',
            'image' => 'aphids.jpg',
            'symptoms' => 'Sticky leaves, yellowing, curled leaves, reddening of leaves, presence of honeydew.',
            'management' => 'Detailed in advisory'
        ]);
    }
}
