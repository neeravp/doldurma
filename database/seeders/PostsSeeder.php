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
        Post::create([ //id:1
            'user_id' => 1,
            'title' => 'LARAVEL Test Test Test',
            'description' => '<p>Test Test Test</p>',
        ]); //'name' => 'alfred', is-portal-manager

        Post::create([ //id:2
            'user_id' => 2,
            'title' => 'WEB Test Test Test',
            'description' => '<p>Test Test Test</p>',
        ]); //'name' => 'ella', is-manager

        Post::create([ //id:3
            'user_id' => 3,
            'title' => 'HTML Test Test Test',
            'description' => '<p>Test Test Test</p>',
        ]);//'name' => 'elizabeth', is-manager

        Post::create([ //id:4
            'user_id' => 4,
            'title' => 'CSS Test Test Test',
            'description' => '<p>Test Test Test</p>',
        ]); // 'name' => 'scarlett', is-editor

        Post::create([ //id:5
            'user_id' => 5,
            'title' => 'LUMEN Test Test Test',
            'description' => '<p>Test Test Test</p>',
        ]); //'name' => 'william', is-writer

        Post::create([ //id:6
            'user_id' => 6,
            'title' => 'FLUTTER Test Test Test',
            'description' => '<p>Test Test Test</p>',
        ]); //'name' => 'william',is-writer


        Post::create([ //id:7
            'user_id' => 7,
            'title' => 'IMAGES Test Test Test',
            'description' => '<p>Test Test Test</p>',
        ]); //'name' => 'messi',is-manager


        Post::create([ //id:8
            'user_id' => 8,
            'title' => 'SOUNDS Test Test Test',
            'description' => '<p>Test Test Test</p>',
        ]); //'name' => 'ronaldo',is-manager
    }
}
