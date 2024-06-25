<?php

namespace Database\Seeders;

use App\Models\BlogCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogCategorySeeder extends Seeder
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
            'Pengembangan Diri' => 'Articles about personal self growth',
            'Hobi & Hiburan' => 'Articles about hobby and entertaiment',
        ];

        // Loop through each category and create a record
        foreach ($categories as $name => $desc) {
            BlogCategory::create([
                'name' => $name,
                'desc' => $desc,
            ]);
        }
    }
}
