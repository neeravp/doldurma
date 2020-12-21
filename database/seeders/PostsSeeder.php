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
            'user_id' => 1,
            'title' => 'LARAVEL Test Test Test',
            'description' => '<p>Test Test Test</p>',
            //'category_id'    => 9,
        ]); //'name' => 'alfred', is-portal-manager

        Post::create([
            'user_id' => 2,
            'title' => 'WEB Test Test Test',
            'description' => '<p>Test Test Test</p>',
            //'category_id'    => 7,
        ]); //'name' => 'ella', is-manager

        Post::create([
            'user_id' => 3,
            'title' => 'HTML Test Test Test',
            'description' => '<p>Test Test Test</p>',
            //'category_id'    => 5,
        ]);//'name' => 'elizabeth', is-manager

        Post::create([
            'user_id' => 4,
            'title' => 'CSS Test Test Test',
            'description' => '<p>Test Test Test</p>',
            //'category_id'    => 6
        ]); // 'name' => 'scarlett', is-editor

        Post::create([
            'user_id' => 5,
            'title' => 'LUMEN Test Test Test',
            'description' => '<p>Test Test Test</p>',
            //'category_id'    => 10, //laravel
        ]); //'name' => 'william', is-writer

        Post::create([
            'user_id' => 6,
            'title' => 'FLUTTER Test Test Test',
            'description' => '<p>Test Test Test</p>',
            //'category_id'    => 7, //flutter
        ]); //'name' => 'william',is-writer
    }
}
