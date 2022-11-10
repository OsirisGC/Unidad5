<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user -> name = 'Osiris';
        $user -> lastname = 'Gonzalez';
        $user -> email = 'depende@gmail.com';
        $user -> password = bcrypt('password');

        $user -> save();
    }
}
