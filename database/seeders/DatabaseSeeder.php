<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Crear los roles básicos
        $admin = Role::create(['name' => 'admin']);
        Role::create(['name' => 'encargado']);
        Role::create(['name' => 'lector']);
        Role::create(['name' => 'alumno']);

        // 2. Crear tu usuario administrador vinculado al rol
        User::create([
            'name' => 'ORACLE PERU SAC',
            'email' => 'oracle.test@test.com',
            'password' => Hash::make('dev123'),
            'role_id' => $admin->id, // Aquí asignamos el ID del rol creado arriba
        ]);
    }
}
