<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'              => 'alfred',
            'family'            => 'James',
            'username'          => 'alfred',
            'email'             => 'p@p.com',
            'password'          => Hash::make('secret'),
            'two_factor_expiry' => '2021-11-07 05:03:04',
            'session_id'        => 'SwvfMfKEWYPNc6lXTi8dVrMLifBCgEUOk31999ki',
            'api_token'         => 'a',
            'remember_token'    => 'rPHHS7IDAg66fwntKll0kDMCJ6shL8JnsXKX6N8RC7vcAF5n8b3NvObTrGe0'
        ]);

        User::create([
            'name'              => 'ella',
            'family'            => 'Jackson',
            'username'          => 'ella',
            'email'             => 'p1@p.com',
            'password'          => Hash::make('secret'),
            'two_factor_expiry' => '2020-11-18 00:33:37',
            'session_id'        => 'SCTB5X1sWmlsNHaoC7YY2xQDozCuNOxDj7VBqK2z',
            'api_token'         => '5efCYGiZfYfbInVHxS9oi2BddEeIStf9ISzBik4RssC16gZP60J1bHsWwzeq',
            'remember_token'    => 'rPHHS7IDAg66fwntKll0kDMCJ6shL8JnsXKX6N8RC7vcAF5n8b3NvObTrGe0'
        ]);

        User::create([
            'name'              => 'scarlett',
            'family'            => 'James',
            'username'          => 'scarlett',
            'email'             => 'p2@p.com',
            'password'          => Hash::make('secret'),
            'two_factor_expiry' => '2020-11-22 06:29:29',
            'session_id'        => 'jQQ2lNkcsid8ZJBp7vHyVfcy4f790ZRohTdeGG8d',
            'api_token'         => 'WgvwYZpvAApBwvLXiX3IkYNNdUlsFZW02cPVaCLEh71Mw2bnzCnJfJiJl836',
            'remember_token'    => 'j5alcluEhrEGXPWz0kdklOpuoqvR9kDhymSHcOcNT7qRDpEcdLkj52dhko1X',
        ]);
    }
}