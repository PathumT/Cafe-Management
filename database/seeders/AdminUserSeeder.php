<?php

namespace Database\Seeders;
use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $user = [
            [
               'name'=>'Admin',
               'email'=>'admin@itsolutionstuff.com',
                'is_admin'=>'1',
                'role'=>'1',
               // 'Date_of_birth'=>'',
              
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'User',
               'email'=>'user@itsolutionstuff.com',
                'is_admin'=>'0',
                'role'=>'0',
               // 'Date_of_birth'=>'',
               'password'=> bcrypt('123456'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
