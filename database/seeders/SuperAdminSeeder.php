<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminbaak = User::create([
            'name' => 'admin baak',
            'email' => 'adminbaak@roles.id',
            'password' => Hash::make('123456'),
        ]);
        $adminbaak->assignRole('adminbaak');

        $adminkeuangan = User::create([
            'name' => 'adminkeuangan',
            'email' => 'adminkeuangan@roles.id',
            'password' => Hash::make('123456'),
        ]);
        $adminkeuangan->assignRole('adminkeuangan');

        $mahasiswa = User::create([
            'name' => 'mahasiswa',
            'email' => 'mahasiswa@roles.id',
            'password' => Hash::make('123456'),
        ]);
        $mahasiswa->assignRole('mahasiswa');

    }
}