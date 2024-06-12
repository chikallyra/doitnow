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
            'Edukasi' => 'Articles related to education and learning',
            'Bisnis' => 'Articles about business, marketing, and entrepreneurship',
            'Teknologi' => 'Articles covering technology trends, gadgets, and software',
            'Gaya Hidup' => 'Articles on lifestyle topics like productivity, health, and hobbies',
            'Keuangan' => 'Articles about personal finance, saving, and investing',
            'Pendidikan' => 'Articles about education',
            'Pengembangan Diri' => 'Articles about personal self growth',
            'Hobi & Hiburan' => 'Articles about hobby and entertaiment',
            'Investasi' => 'Articles about personal finance, saving, and investing',
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
