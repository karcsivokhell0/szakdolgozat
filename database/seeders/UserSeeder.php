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
        $user = User::create([
            'name'=>'Admin',
            'username'=>'WebMakerAdmin',
            'email'=>'contactwebmaker@gmail.com',
            'password'=> bcrypt('webmakeradmin7898!')
        ]);

        $user->roles()->attach(1);
    }
}
