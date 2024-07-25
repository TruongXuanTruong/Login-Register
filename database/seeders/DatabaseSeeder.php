<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $defaults = [
            [
                'type' => '1',
                'email' => 'admin28@gmail.com',
                'name' => 'Truong Admin',
                'password' => bcrypt('abc123'),
                'email_verified_at' => '2022-04-16 00:00:00',
            ],

            [
                'type' => '0',
                'email' => 'truong28x@gmail.com',
                'name' => 'Xuân Trường',
                'password' => bcrypt('abc123'),
                'email_verified_at' => '2022-04-16 00:00:00',
            ]
        ];

        foreach ($defaults as $d) {
            User::create($d);
        }
    }
}
