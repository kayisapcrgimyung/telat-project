<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin
        DB::table('users')->updateOrInsert(
            ['email' => 'guru@gmail.com'],
            [
                'name' => 'guru',
                'password' => Hash::make('12345'),
                'role' => 'guru'
            ]
        );

        // User
        DB::table('users')->updateOrInsert(
            ['email' => 'murid@gmail.com'],
            [
                'name' => 'murid',
                'password' => Hash::make('1234'),
                'role' => 'murid'
            ]
        );
    }
}
