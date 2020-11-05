<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class is_admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'name' => 'admin',
            'email' => 'admin@medi.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'type' => 'admin'
        ];

        User::create($data);
    }
}
