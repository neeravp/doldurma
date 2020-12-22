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
        User::create([ //portal manager 1
            'name' => 'alfred',
            'family' => 'alfred',
            'username' => 'alfred',
            'email' => 'palfred@p.com',
            'password' => Hash::make('secret'),
            'two_factor_expiry' => '2021-11-07 05:03:04',
            'session_id' => 'SwvfMfKEWYPNc6lXTi8dVrMLifBCgEUOk31999ki',
            'api_token' => 'a',
            'remember_token' => 'rPHHS7IDAg66fwntKll0kDMCJ6shL8JnsXKX6N8RC7vcAF5n8b3NvObTrGe0'
        ]);

        User::create([ //is-manager 2
            'name' => 'ella',
            'family' => 'ella',
            'username' => 'ella',
            'email' => 'p1ella@p.com',
            'password' => Hash::make('secret'),
            'two_factor_expiry' => '2020-11-18 00:33:37',
            'session_id' => 'SCTB5X1sWmlsNHaoC7YY2xQDozCuNOxDj7VBqK2z',
            'api_token' => '5efCYGiZfYfbInVHxS9oi2BddEeIStf9ISzBik4RssC16gZP60J1bHsWwzeq',
            'remember_token' => 'rPHHS7IDAg66fwntKll0kDMCJ6shL8JnsXKX6N8RC7vcAF5n8b3NvObTrGe0'
        ]);

        User::create([ //is-manager 3
            'name' => 'elizabeth',
            'family' => 'elizabeth',
            'username' => 'elizabeth',
            'email' => 'p2elizabeth@p.com',
            'password' => Hash::make('secret'),
            'two_factor_expiry' => '2020-11-22 06:29:29',
            'session_id' => 'jQQ2lNkcsid8ZJBp7vHyVfcy4f790ZRohTdeGG8d',
            'api_token' => 'WgvwYZpvAApBwvLXiX3IkYNNdUlsFZW02cPVaCLEh71Mw2bnzCnJfJiJl836',
            'remember_token' => 'j5alcluEhrEGXPWz0kdklOpuoqvR9kDhymSHcOcNT7qRDpEcdLkj52dhko1X',
        ]);

        User::create([ //is-editor 4
            'name' => 'scarlett',
            'family' => 'scarlett',
            'username' => 'scarlett',
            'email' => 'p2scarlett@p.com',
            'password' => Hash::make('secret'),
            'two_factor_expiry' => '2020-11-22 06:29:29',
            'session_id' => 'jQQ2lNkcsid8ZJBp7vHyVfcy4f790ZRohTdeGG8d',
            'api_token' => 'WgvwYZpvAApBwvLXiX3IkYNNdUlsFZW02cPVaCLEh71Mw2bnzCnJfJiJl836',
            'remember_token' => 'j5alcluEhrEGXPWz0kdklOpuoqvR9kDhymSHcOcNT7qRDpEcdLkj52dhko1X',
        ]);

        User::create([ //is-writer 5
            'name' => 'william',
            'family' => 'william',
            'username' => 'william',
            'email' => 'p2william@p.com',
            'password' => Hash::make('secret'),
            'two_factor_expiry' => '2020-11-22 06:29:29',
            'session_id' => 'jQQ2lNkcsid8ZJBp7vHyVfcy4f790ZRohTdeGG8d',
            'api_token' => 'WgvwYZpvAApBwvLXiX3IkYNNdUlsFZW02cPVaCLEh71Mw2bnzCnJfJiJl836',
            'remember_token' => 'j5alcluEhrEGXPWz0kdklOpuoqvR9kDhymSHcOcNT7qRDpEcdLkj52dhko1X',
        ]);

        User::create([ //is-writer 6
            'name' => 'linda',
            'family' => 'linda',
            'username' => 'linda',
            'email' => 'p2linda@p.com',
            'password' => Hash::make('secret'),
            'two_factor_expiry' => '2020-11-22 06:29:29',
            'session_id' => 'jQQ2lNkcsid8ZJBp7vHyVfcy4f790ZRohTdeGG8d',
            'api_token' => 'WgvwYZpvAApBwvLXiX3IkYNNdUlsFZW02cPVaCLEh71Mw2bnzCnJfJiJl836',
            'remember_token' => 'j5alcluEhrEGXPWz0kdklOpuoqvR9kDhymSHcOcNT7qRDpEcdLkj52dhko1X',
        ]);


        User::create([ //is-manager 7
            'name' => 'messi',
            'family' => 'messi',
            'username' => 'messi',
            'email' => 'p2messi@p.com',
            'password' => Hash::make('secret'),
            'two_factor_expiry' => '2020-11-22 06:29:29',
            'session_id' => 'jQQ2lNkcsid8ZJBp7vHyVfcy4f790ZRohTdeGG8d',
            'api_token' => 'WgvwYZpvAApBwvLXiX3IkYNNdUlsFZW02cPVaCLEh71Mw2bnzCnJfJiJl836',
            'remember_token' => 'j5alcluEhrEGXPWz0kdklOpuoqvR9kDhymSHcOcNT7qRDpEcdLkj52dhko1X',
        ]);


        User::create([ //is-manager 8
            'name' => 'ronaldo',
            'family' => 'ronaldo',
            'username' => 'ronaldo',
            'email' => 'p2ronaldo@p.com',
            'password' => Hash::make('secret'),
            'two_factor_expiry' => '2020-11-22 06:29:29',
            'session_id' => 'jQQ2lNkcsid8ZJBp7vHyVfcy4f790ZRohTdeGG8d',
            'api_token' => 'WgvwYZpvAApBwvLXiX3IkYNNdUlsFZW02cPVaCLEh71Mw2bnzCnJfJiJl836',
            'remember_token' => 'j5alcluEhrEGXPWz0kdklOpuoqvR9kDhymSHcOcNT7qRDpEcdLkj52dhko1X',
        ]);



    }
}
