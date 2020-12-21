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
        // portal manager is on all of category and can see all posts which posted into
        // this categories - alfred
        DB::table('category_user')->insert(['category_id' => 1, 'user_id' => 1]);//'programming languages'
        DB::table('category_user')->insert(['category_id' => 2, 'user_id' => 1]);//'web'
        DB::table('category_user')->insert(['category_id' => 3, 'user_id' => 1]);//'mobile'
        DB::table('category_user')->insert(['category_id' => 4, 'user_id' => 1]);//'php'
        DB::table('category_user')->insert(['category_id' => 5, 'user_id' => 1]);//'html'
        DB::table('category_user')->insert(['category_id' => 6, 'user_id' => 1]);//'css'
        DB::table('category_user')->insert(['category_id' => 7, 'user_id' => 1]);//'flutter'
        DB::table('category_user')->insert(['category_id' => 8, 'user_id' => 1]);//'java'
        DB::table('category_user')->insert(['category_id' => 9, 'user_id' => 1]);//'laravel'
        DB::table('category_user')->insert(['category_id' => 10, 'user_id'=> 1]);//'lumen'

        // is-manager should see only posts which is
        // synced into this categories(web and their sub-directories) ella
        DB::table('category_user')->insert(['category_id' => 2, 'user_id' => 2]);//'web'
        DB::table('category_user')->insert(['category_id' => 4, 'user_id' => 2]);//'php'
        DB::table('category_user')->insert(['category_id' => 5, 'user_id' => 2]);//'html'
        DB::table('category_user')->insert(['category_id' => 6, 'user_id' => 2]);//'css'
        DB::table('category_user')->insert(['category_id' => 9, 'user_id' => 2]);//'laravel'
        DB::table('category_user')->insert(['category_id' => 10, 'user_id' => 2]);//'lumen'

        // another is-manager should see only posts which is synced
        // into this categories(mobile and their sub-directories)
        DB::table('category_user')->insert(['category_id' => 3, 'user_id' => 3]);//'mobile'
        DB::table('category_user')->insert(['category_id' => 7, 'user_id' => 3]);//'flutter'
        DB::table('category_user')->insert(['category_id' => 8, 'user_id' => 3]);//'java'

        //is-editor should see only this categories posts
        DB::table('category_user')->insert(['category_id' => 4, 'user_id' => 4]);//'php'
        DB::table('category_user')->insert(['category_id' => 9, 'user_id' => 4]);//'laravel'
        DB::table('category_user')->insert(['category_id' => 10, 'user_id' => 4]);//'lumen'

        // is-writer
        DB::table('category_user')->insert(['category_id' => 10, 'user_id' => 5]);//'lumen'
        DB::table('category_user')->insert(['category_id' => 7, 'user_id' => 6]);//'flutter'
        // all of user which synced into categories shouldn't see another posts which not synced into directories
        // FOR EXAMPLE
    }
}
