<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'user_id'        => 1,
            'title'          => 'Post on LARAVEL category (by portal manager)',
            'description'    => '<p>post on laravel category post on laravel category post on laravel category</p>',
            //'category_id'    => 9,
        ]); //'name' => 'alfred', is-portal-manager

        Post::create([
            'user_id'        => 2,
            'title'          => 'Post on FLUTTER category (by portal manager)',
            'description'    => '<p>post on flutter category post on flutter category post on flutter category</p>',
            //'category_id'    => 7,
        ]); //'name' => 'ella', is-manager

        Post::create([
            'user_id'        => 3,
            'title'          => 'Post on HTML category (by is-editor)',
            'description'    => '<p>post on flutter category post on flutter category post on flutter category</p>',
            //'category_id'    => 5,
        ]);//'name' => 'elizabeth', is-manager

        Post::create([
            'user_id'        => 4,
            'title'          => 'Post on CSS category (by is-manager)',
            'description'    => '<p>post on flutter category post on flutter category post on flutter category</p>',
            //'category_id'    => 6
        ]); // 'name' => 'scarlett', is-editor

        Post::create([
            'user_id'        => 5,
            'title'          => 'Post on LUMEN category (by is-writer)',
            'description'    => '<p>post on flutter category post on flutter category post on flutter category</p>',
            //'category_id'    => 10, //laravel
        ]); //'name' => 'william', is-writer

        Post::create([
            'user_id'        => 6,
            'title'          => 'Post on FLUTTER category (by is-writer)',
            'description'    => '<p>post on flutter category post on flutter category post on flutter category</p>',
            //'category_id'    => 7, //flutter
        ]); //'name' => 'william',is-writer
    }
}
