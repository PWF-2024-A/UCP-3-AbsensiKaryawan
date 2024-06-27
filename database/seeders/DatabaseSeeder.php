<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Division;
use App\Models\Presence;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'address' => fake()->address(),
            'phonenumber' => fake()->phoneNumber(),
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$EuSLGEnx2f89qebEvgJCWOa5cW7reqB8RE59lZk.uBzkVvotwTyv6',
            'remember_token' => Str::random(10),
            'is_admin' => true
        ]);

        Division::factory(100)->create();
        Presence::factory(100)->create();

        // Presence::create([
        //     'name' => 'Aisyah',
        //     'status' => 'Hadir',
        //     'date' => '2022-12-12',
        //     'in' => '10:00',
        //     'out' => '13:00',
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
    }
}
