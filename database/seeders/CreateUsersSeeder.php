<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
               'name'=>'Admin User',
               'email'=>'admin@min.com',
               'type'=>2,
               'password'=> Hash::make('123456'), // Gunakan Hash::make() untuk meng-hash password
               'phone' => "0912821752"
            ],
            [
               'name'=>'Admin Doitnow',
               'email'=>'admin@doitnow.id',
               'type'=>2,
               'password'=> Hash::make('123456'), // Gunakan Hash::make() untuk meng-hash password
               'phone' => "0912821752"
            ],

        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
