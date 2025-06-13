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
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
            'vpassword' => 'password', // Assuming vpassword is a verification password
            'remember_token' => null, // Set to null or generate a token if needed
            'email_verified_at' => now(), // Set to current time for testing purposes
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
