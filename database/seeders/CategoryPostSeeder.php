<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_post')->insert(['category_id' => 9, 'post_id' => 1]);
        DB::table('category_post')->insert(['category_id' => 7, 'post_id' => 2]);
        DB::table('category_post')->insert(['category_id' => 5, 'post_id' => 3]);
        DB::table('category_post')->insert(['category_id' => 6, 'post_id' => 4]);
        DB::table('category_post')->insert(['category_id' => 10, 'post_id' => 5]);
        DB::table('category_post')->insert(['category_id' => 7, 'post_id' => 6]);
    }
}
