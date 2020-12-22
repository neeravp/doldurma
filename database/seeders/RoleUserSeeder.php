<?php /** @noinspection ALL */

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role_user')->insert(['role_id' => 1, 'user_id' => 1]); //is-portal-manager - alfred

        DB::table('role_user')->insert(['role_id' => 2, 'user_id' => 2]); //is-manager - ella
        DB::table('role_user')->insert(['role_id' => 2, 'user_id' => 3]); //is-manager - elizabeth

        DB::table('role_user')->insert(['role_id' => 3, 'user_id' => 4]); //is-editor - scarlett

        DB::table('role_user')->insert(['role_id' => 4, 'user_id' => 5]); //is-writer - william
        DB::table('role_user')->insert(['role_id' => 4, 'user_id' => 6]); //is-writer - linda

        DB::table('role_user')->insert(['role_id' => 2, 'user_id' => 7]); //is-manager - messi
        DB::table('role_user')->insert(['role_id' => 2, 'user_id' => 8]); //is-manager - ronaldo
    }
}
