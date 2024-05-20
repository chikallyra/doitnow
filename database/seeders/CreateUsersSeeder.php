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
            ],
            [
               'name'=>'Company User',
               'email'=>'com@pany.com',
               'type'=> 1,
               'password'=> Hash::make('123456'), // Gunakan Hash::make() untuk meng-hash password
            ],
            [
               'name'=>'User',
               'email'=>'user@user.com',
               'type'=>0,
               'password'=> Hash::make('123456'), // Gunakan Hash::make() untuk meng-hash password
            ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
