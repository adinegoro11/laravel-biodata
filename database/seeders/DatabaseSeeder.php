<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'name' => 'Test Admin',
            'email' => 'admin@admin.com',
            'role' => 'admin',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'user@user.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);

        \App\Models\Education::factory()->create([
            'type' => 'S1',
            'school_name' => 'Universitas Indonesia',
            'mayor' => 'Ilmu Komputer',
            'graduation_year' => 2022,
            'grade' => '3.80',
            'user_id' => 2,
        ]);

        \App\Models\Education::factory()->create([
            'type' => 'SMA',
            'school_name' => 'SMA Negeri 1 Bogor',
            'mayor' => 'IPA',
            'graduation_year' => 2018,
            'grade' => '50.80',
            'user_id' => 2,
        ]);

        \App\Models\User::factory(15)->create();
    }
}
