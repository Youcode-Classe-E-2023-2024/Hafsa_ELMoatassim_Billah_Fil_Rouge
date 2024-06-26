<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $firstUser = User::firstOrCreate(
            [   'name' => 'Maryam',
                'email' => 'maryam@gmail.com',
                'password' => 'maryam@gmail.com',
                'role' => '1'
            ]);
    }
}
