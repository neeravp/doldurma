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
        // DB::table('category_user')->insert(['category_id' => 2, 'user_id' => 2]);//'web'
        DB::table('category_user')->insert(['category_id' => 4, 'user_id' => 2]);//'php'
        // DB::table('category_user')->insert(['category_id' => 5, 'user_id' => 2]);//'html'
        // DB::table('category_user')->insert(['category_id' => 6, 'user_id' => 2]);//'css'
        DB::table('category_user')->insert(['category_id' => 10, 'user_id' => 2]);//'laravel'
        DB::table('category_user')->insert(['category_id' => 11, 'user_id' => 2]);//'lumen'

        // another is-manager should see only posts which is synced
        // into this categories(web and their sub-directories) Elizabeth
        DB::table('category_user')->insert(['category_id' => 2, 'user_id' => 3]);//'web'
        DB::table('category_user')->insert(['category_id' => 5, 'user_id' => 3]);//'html'
        DB::table('category_user')->insert(['category_id' => 7, 'user_id' => 3]);//'js'

        //is-editor should see only this categories posts
        // DB::table('category_user')->insert(['category_id' => 4, 'user_id' => 4]);//'php'
        // DB::table('category_user')->insert(['category_id' => 9, 'user_id' => 4]);//'laravel'
        // DB::table('category_user')->insert(['category_id' => 10, 'user_id' => 4]);//'lumen'
        

        ///Jack : is-editor
        DB::table('category_user')->insert(['category_id' => 3, 'user_id' => 9]);//'mobile'
        DB::table('category_user')->insert(['category_id' => 8, 'user_id' => 9]);//'flutter'
        DB::table('category_user')->insert(['category_id' => 9, 'user_id' => 9]);//'java'
        //Jim: is-writer
        DB::table('category_user')->insert(['category_id' => 8, 'user_id' => 10]);//'flutter'

        // is-writer
        // DB::table('category_user')->insert(['category_id' => 10, 'user_id' => 5]);//'lumen' William
        // DB::table('category_user')->insert(['category_id' => 7, 'user_id' => 6]);//'flutter' Linda
        // DB::table('category_user')->insert(['category_id' => 7, 'user_id' => 4]);//'js' Scarlet
        DB::table('category_user')->insert(['category_id' => 10, 'user_id' => 6]);//'lumen' Linda
        // all of user which synced into categories shouldn't see another posts which not synced into directories
        // FOR EXAMPLE

        //Messi
        DB::table('category_user')->insert(['category_id' => 12, 'user_id' => 7]);//'images'
        DB::table('category_user')->insert(['category_id' => 14, 'user_id' => 7]);//'gif'
        DB::table('category_user')->insert(['category_id' => 15, 'user_id' => 7]);//'png'
        DB::table('category_user')->insert(['category_id' => 16, 'user_id' => 7]);//'jpg'
        DB::table('category_user')->insert(['category_id' => 17, 'user_id' => 7]);//'bmp'

        //Ronaldo
        DB::table('category_user')->insert(['category_id' => 13, 'user_id' => 8]);//'sounds'
        DB::table('category_user')->insert(['category_id' => 18, 'user_id' => 8]);//'ogg'
        DB::table('category_user')->insert(['category_id' => 19, 'user_id' => 8]);//'mp3'

    }
}