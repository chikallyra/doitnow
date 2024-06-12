<?php

use Illuminate\Database\Seeder;
use App\Models\Mission;

class MissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Buat beberapa data misi untuk diisi ke dalam tabel
        Mission::create([
            'company_id' => 1,
            'category_id' => 1,
            'reward_id' => 1,
            'title' => 'Misi Pertama',
            'description' => 'Deskripsi misi pertama.',
            'steps' => 'Langkah-langkah untuk menyelesaikan misi pertama.',
            'link' => 'https://example.com/misi-pertama',
            'start_date' => now(),
            'end_date' => now()->addDays(7),
            'max_missionaries' => 5,
            'image' => 'images/misi-pertama.jpg',
        ]);

        Mission::create([
            'company_id' => 1,
            'category_id' => 2,
            'reward_id' => 2,
            'title' => 'Misi Kedua',
            'description' => 'Deskripsi misi kedua.',
            'steps' => 'Langkah-langkah untuk menyelesaikan misi kedua.',
            'link' => 'https://example.com/misi-kedua',
            'start_date' => now(),
            'end_date' => now()->addDays(10),
            'max_missionaries' => 10,
            'image' => 'images/misi-kedua.jpg',
        ]);

        // Tambahkan data misi lainnya sesuai kebutuhan
    }
}
