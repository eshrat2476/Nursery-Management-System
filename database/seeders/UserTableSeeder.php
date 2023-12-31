<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'eshrat',
            'email'=>'eshrataraupoma@gmail.com',
            'role'=>'admin',
            'password'=>bcrypt('123456'),
        ]);
    }
}
