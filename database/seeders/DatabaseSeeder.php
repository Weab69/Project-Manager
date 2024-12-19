<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\project;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        User::factory()->create([
            'name' => 'Yeab',
            'email' => 'yeab@gmail.com',
            'password' => bcrypt('12345678'),
            'email_verified_at' => time()
        ]);

        project::factory()
            ->count(30)
            ->hasTasks(30)
            ->create();
    }
}
