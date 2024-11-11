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
            'name' => 'Pepe',
            'last_name' => 'González',
            'avatar' => 'Pepe.jpg',
            'email' => 'pepe@mail.es',
            'password' => bcrypt('12345678'),
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
