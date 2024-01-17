<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Prashanna Bhandari',
                'username' => 'Prashanna',
                'email' => '1992ndprashanna@gmail.com',
                'password' => bcrypt('password'),
                'appid' => 'seamless',
            ]
        ];

        DB::table('users')->insert($data);
    }
}
