<?php

namespace Database\Seeders;

use App\Models\MissionCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MissionCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Easy' => 'This is an easy difficulty',
            'Medium' => 'This is medium difficulty',
            'Hard' => 'This is a hard difficulty'
        ];

        // Loop through each category and create a record
        foreach ($categories as $name => $desc) {
            MissionCategory::create([
                'name' => $name,
                'desc' => $desc,
            ]);
        }
    }
}
