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
    }
}