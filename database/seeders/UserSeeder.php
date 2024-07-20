<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Supprimer les utilisateurs existants
        User::where('email', 'admin@gmail.com')->delete();
        User::where('email', 'manager@gmail.com')->delete();
        User::where('email', 'user@gmail.com')->delete();

        $teAdmin = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        $teManager = User::create([
            'name' => 'manager',
            'email' => 'manager@gmail.com',
            'password' => Hash::make('password'),
        ]);

        $teUser = User::create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => Hash::make('password'),
        ]);

        $teAdmin->roles()->attach([1, 2]);
        $teManager->roles()->attach([2]);
        $teUser->roles()->attach([3]);
    }
}