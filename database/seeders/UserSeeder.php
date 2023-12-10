<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::truncate();
        User::create([
            'name' => 'Himawan Alan Novianto',
            'email' => 'alannovianto11@gmail.com',
            'password' => bcrypt('12345') ,
            'unit_bagian' => 8,
            'username' => 'alannovianto',
            'NIK' => '123456789',
            'no_telepon' => 812345678,
            'remember_token' => Str::random(60),
        ]);
    }
}
