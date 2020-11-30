<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_user')->insert(['category_id' => 2, 'user_id' => 2]);
        DB::table('category_user')->insert(['category_id' => 4, 'user_id' => 2]);
        DB::table('category_user')->insert(['category_id' => 5, 'user_id' => 2]);
        DB::table('category_user')->insert(['category_id' => 6, 'user_id' => 2]);
        DB::table('category_user')->insert(['category_id' => 9, 'user_id' => 2]);
        DB::table('category_user')->insert(['category_id' => 10, 'user_id' => 2]);
        DB::table('category_user')->insert(['category_id' => 3, 'user_id' => 3]);
        DB::table('category_user')->insert(['category_id' => 7, 'user_id' => 3]);
        DB::table('category_user')->insert(['category_id' => 8, 'user_id' => 3]);
    }
}