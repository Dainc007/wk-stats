<?php

namespace Database\Seeders;

use App\Models\Contract;
use App\Models\Player;
use App\Models\Team;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@heinze.com',
            'password' => Hash::make('12345678')
        ]);
        User::factory(10)->create();
        Team::factory(10)->create();
        Player::factory(500)->create();
        Contract::factory(1000)->create();

    }
}
