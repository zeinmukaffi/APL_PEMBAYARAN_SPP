<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Suranto',
                'level' => 'ADMIN',
                'notelp' => '0899321323',
                'email' => 'suranto2566@gmail',
                'password' => bcrypt('admin123'),
            ],
            [
                'name' => 'Mugianto',
                'level' => 'PETUGAS',
                'notelp' => '08999234354',
                'email' => 'mugi4nto@gmail.com',
                'password' => bcrypt('petugas123'),
            ],
            [
                'name' => 'Herlina Wati',
                'level' => 'SISWA',
                'notelp' => '087832138293',
                'email' => 'herlinaw@gmail.com',
                'password' => bcrypt('siswa123'),
            ]
        ];

        foreach ($users as $value){
            User::create($value);
        }
    }
}
