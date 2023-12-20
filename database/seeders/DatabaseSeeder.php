<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'administrator',
            'role_id' => 1,
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin1111')
        ]);
        Role::create([
           'name' => 'admin', 
        ]);
        Role::create([
           'name' => 'user', 
        ]);
    }
}
