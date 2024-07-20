<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'name' => 'admin',
            'description' => 'Administrateur du site',
        ]);

        Role::create([
            'name' => 'manager',
            'description' => 'Manager du site',
        ]);

        Role::create([
            'name' => 'users',
            'description' => 'Utilisateur du site',
        ]);
    }
}