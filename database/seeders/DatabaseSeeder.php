<?php

namespace Database\Seeders;

use App\Models\Post;
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
            'name' => 'Daniel',
            'last_name' => 'López Olmos',
            'avatar' => 'Pepe.jpg',
            'email' => 'daniel@mail.es',
            'password' => '123',
        ]);

        User::factory(5)->create();

        $users = User::all();

        $users->each(function ($user) {
            $user->posts()->saveMany(
                Post::factory(10)->make()
            );
        });
    }
}
