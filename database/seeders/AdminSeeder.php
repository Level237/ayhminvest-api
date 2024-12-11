<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>"Admin",
            'email'=>"admin@ayhminvest.com",
            'role_id'=>1,
            'password'=>bcrypt('password'),
            'phone_number'=>"48826243423",
        ],
        );
    }
}
