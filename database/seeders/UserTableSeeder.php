<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            // super admin
            [
                'username'      => 'super_admin',
                'nickname'      => 'magi super admin',
                'email'         => 'superadmin@magi.ev',
                'password'      => Hash::make('superadmin'),
                'date_of_birth' => '2022-10-30',
            ],

            // misato
            [
                'username'      => 'misato',
                'nickname'      => 'misato katsuragi',
                'email'         => 'misato@magi.ev',
                'password'      => Hash::make('misato001'),
                'date_of_birth' => '1986-12-08',
            ],
        ];

        foreach( $data as $user ){
            User::create($user);
        }
    }
}
