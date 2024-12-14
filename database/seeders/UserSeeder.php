<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>"Roland",
            'email'=>"roland@ayhminvest.com",
            'role_id'=>2,
            'password'=>bcrypt('password'),
            'phone_number'=>"45738283256",
        ],
        );
        User::create([
            'name'=>"Martin",
            'email'=>"martin@ayhminvest.com",
            'role_id'=>2,
            'password'=>bcrypt('password'),
            'phone_number'=>"47392937253",
        ],
        );
    }
}
