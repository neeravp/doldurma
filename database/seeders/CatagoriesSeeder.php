<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CatagoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([ //id:1
            'parent_id'   => null,
            'name'        => 'programming languages'
        ]);
        Category::create([  //id:2
            'parent_id'   => 1,
            'name'        => 'web'
        ]);
        Category::create([  //id:3
            'parent_id'   => 1,
            'name'        => 'mobile'
        ]);
        Category::create([ //web  //id:4
            'parent_id'   => 2, //parent:web
            'name'        => 'php'
        ]);
        Category::create([ //web  //id:5
            'parent_id'   => 2, //parent:web
            'name'        => 'html'
        ]);
        Category::create([ //web  //id:6
            'parent_id'   => 2, //parent:web
            'name'        => 'css'
        ]);
        Category::create([ //mobile  //id:7
            'parent_id'   => 3, //parent:mobile
            'name'        => 'flutter'
        ]);
        Category::create([ //mobile  //id:8
            'parent_id'   => 3, //parent:mobile
            'name'        => 'java'
        ]);
        Category::create([ //php  //id:9
            'parent_id'   => 4, //parent:web\php
            'name'        => 'laravel'
        ]);
        Category::create([ //php  //id:10
            'parent_id'   => 4, //parent:web\php
            'name'        => 'lumen'
        ]);
    }
}
