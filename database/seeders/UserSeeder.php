<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'uuid' => '696c3054-f8d9-46a0-af9b-16c362319778',
            'name' => 'Kleyson de Melo Lopes',
            'document' => '04268680217',
            'email' => 'KleysonWerner@hotmail.com',
            'password' => '$2y$10$p5HWoXRwibMk6TSyk8rMwO40GV0NMF9ZW/QAzdnpdF1cNP.ifm4Ay',
        ]);
    }
}
