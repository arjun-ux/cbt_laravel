<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Role;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        User::create([
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make('123123'),
            'role_id' => 1
        ]);

        Role::create([
            'role_name' => 'admin'
        ]);
        Role::create([
            'role_name' => 'guru'
        ]);
        Role::create([
            'role_name' => 'siswa'
        ]);

        // User::factory(7)->create();
        Siswa::factory(10)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }

}
