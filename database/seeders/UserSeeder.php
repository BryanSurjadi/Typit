<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'name' => 'John Doe',
            'email' => 'johndoe@gmail.com',
            'password' => 'johndoe123'
        ]);
        User::create([
            'name' => 'Tipsy Bee',
            'email' => 'tipsybee@gmail.com',
            'password' => 'tipsybee123'
        ]);
        User::create([
            'name' => 'Lala Tim',
            'email' => 'lalatim@gmail.com',
            'password' => 'lalatim123'
        ]);
    }
}
