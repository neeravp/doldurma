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
        /*-------------------------------------------*/
        Category::create([ //root id:1
            'parent_id' => null,
            'name' => 'programming languages'
        ]);
        Category::create([  //id:2
            'parent_id' => 1,
            'name' => 'web'
        ]);
        Category::create([  //id:3
            'parent_id' => 1,
            'name' => 'mobile'
        ]);
        Category::create([ //web  //id:4
            'parent_id' => 2, //parent:web
            'name' => 'php'
        ]);
        Category::create([ //web  //id:5
            'parent_id' => 2, //parent:web
            'name' => 'html'
        ]);
        Category::create([ //web  //id:6
            'parent_id' => 2, //parent:web
            'name' => 'css'
        ]);
        Category::create([ //mobile  //id:7
            'parent_id' => 3, //parent:mobile
            'name' => 'flutter'
        ]);
        Category::create([ //mobile  //id:8
            'parent_id' => 3, //parent:mobile
            'name' => 'java'
        ]);
        Category::create([ //php  //id:9
            'parent_id' => 4, //parent:web\php
            'name' => 'laravel'
        ]);
        Category::create([ //php  //id:10
            'parent_id' => 4, //parent:web\php
            'name' => 'lumen'
        ]);

        /*-------------------------------------------*/

        Category::create([ //root  id:11
            'parent_id' => null, //parent
            'name' => 'multimedia'
        ]);

        Category::create([ //images  id:12
            'parent_id' => 11, //parent:multimedia
            'name' => 'images'
        ]);
        Category::create([ //sounds  id:13
            'parent_id' => 11, //parent:multimedia
            'name' => 'sounds'
        ]);

        Category::create([ //root  id:14
            'parent_id' => 12, //parent:multimedia\images\
            'name' => 'gif'
        ]);
        Category::create([ //root  id:15
            'parent_id' => 12, //parent:multimedia\images\
            'name' => 'png'
        ]);
        Category::create([ //root  id:16
            'parent_id' => 12, //parent:multimedia\images\
            'name' => 'jpg'
        ]);
        Category::create([ //root  id:17
            'parent_id' => 12, //parent:multimedia\images\
            'name' => 'bmp'
        ]);

        Category::create([ //root  id:18
            'parent_id' => 13, //parent:multimedia\sounds
            'name' => 'ogg'
        ]);
        Category::create([ //root  id:19
            'parent_id' => 13, //parent:multimedia\sounds
            'name' => 'mp3'
        ]);


    }
}
