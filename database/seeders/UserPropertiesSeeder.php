<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserProperty;
use Illuminate\Database\Seeder;

class UserPropertiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::get()->map(function($user) {
            $user->properties()->create([]);
        });
    }
}