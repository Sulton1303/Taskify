<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::create([
            'name'     => 'Admin',
            'email'    => 'admin@gmail.com',
            'position' => 'Admin',
            'password' => Hash::make('admin1234'),
            'is_tugas' => false,
        ]);

        User::create([
            'name'     => 'Muhammad',
            'email'    => 'muhammad@gmail.com',
            'position' => 'Pegawai',
            'password' => Hash::make('muhammad1234'),
            'is_tugas' => false,
        ]);

        User::create([
            'name'     => 'Sulton',
            'email'    => 'sulton@gmail.com',
            'position' => 'Pegawai',
            'password' => Hash::make('sulton1234'),
            'is_tugas' => false,
        ]);
    }
}
