<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesUSerSeeder extends Seeder
{
    public function run()
    {
        DB::table('role_user')->insert(['role_id' => 1, 'user_id' => 1]); //portal manager(user: alfred)

        DB::table('role_user')->insert(['role_id' => 2, 'user_id' => 2]); //is-manager (user:ella)
        DB::table('role_user')->insert(['role_id' => 2, 'user_id' => 3]); //is-manager (user:elizabeth)

        DB::table('role_user')->insert(['role_id' => 3, 'user_id' => 4]); //is-editor (user:scarlett)

        DB::table('role_user')->insert(['role_id' => 4, 'user_id' => 5]); //is-writer (user:william)
        DB::table('role_user')->insert(['role_id' => 4, 'user_id' => 6]); //is-writer (user:Linda)
    }
}
