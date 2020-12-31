<?php
namespace Tests\Fixtures;


use App\Models\Category;
use App\Models\Post;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TestDatabaseSeeder extends Seeder
{
    public function run()
    {
        
        User::create([ //portal manager 1
            'name' => 'Alfred',
            'family' => 'alfred',
            'username' => 'alfred',
            'email' => 'palfred@p.com',
            'password' => Hash::make('secret'),
            'two_factor_expiry' => '2021-11-07 05:03:04',
            'session_id' => 'SwvfMfKEWYPNc6lXTi8dVrMLifBCgEUOk31999ki',
            'api_token' => 'a',
            'remember_token' => 'rPHHS7IDAg66fwntKll0kDMCJ6shL8JnsXKX6N8RC7vcAF5n8b3NvObTrGe0'
        ]);

        User::create([ //is-manager 2
            'name' => 'Ella',
            'family' => 'ella',
            'username' => 'ella',
            'email' => 'p1ella@p.com',
            'password' => Hash::make('secret'),
            'two_factor_expiry' => '2020-11-18 00:33:37',
            'session_id' => 'SCTB5X1sWmlsNHaoC7YY2xQDozCuNOxDj7VBqK2z',
            'api_token' => '5efCYGiZfYfbInVHxS9oi2BddEeIStf9ISzBik4RssC16gZP60J1bHsWwzeq',
            'remember_token' => 'rPHHS7IDAg66fwntKll0kDMCJ6shL8JnsXKX6N8RC7vcAF5n8b3NvObTrGe0'
        ]);

        User::create([ //is-manager 3
            'name' => 'Elizabeth',
            'family' => 'elizabeth',
            'username' => 'elizabeth',
            'email' => 'p2elizabeth@p.com',
            'password' => Hash::make('secret'),
            'two_factor_expiry' => '2020-11-22 06:29:29',
            'session_id' => 'jQQ2lNkcsid8ZJBp7vHyVfcy4f790ZRohTdeGG8d',
            'api_token' => 'WgvwYZpvAApBwvLXiX3IkYNNdUlsFZW02cPVaCLEh71Mw2bnzCnJfJiJl836',
            'remember_token' => 'j5alcluEhrEGXPWz0kdklOpuoqvR9kDhymSHcOcNT7qRDpEcdLkj52dhko1X',
        ]);

        User::create([ //is-editor 4
            'name' => 'Scarlett',
            'family' => 'scarlett',
            'username' => 'scarlett',
            'email' => 'p2scarlett@p.com',
            'password' => Hash::make('secret'),
            'two_factor_expiry' => '2020-11-22 06:29:29',
            'session_id' => 'jQQ2lNkcsid8ZJBp7vHyVfcy4f790ZRohTdeGG8d',
            'api_token' => 'WgvwYZpvAApBwvLXiX3IkYNNdUlsFZW02cPVaCLEh71Mw2bnzCnJfJiJl836',
            'remember_token' => 'j5alcluEhrEGXPWz0kdklOpuoqvR9kDhymSHcOcNT7qRDpEcdLkj52dhko1X',
        ]);


        User::create([ //is-editor 5
            'name' => 'Jack',
            'family' => 'jack',
            'username' => 'jack',
            'email' => 'p2jack@p.com',
            'password' => Hash::make('secret'),
            'two_factor_expiry' => '2020-11-22 06:29:29',
            'session_id' => 'jQQ2lNkcsid8ZJBp7vHyVfcy4f790ZRohTdeGG8d',
            'api_token' => 'WgvwYZpvAApBwvLXiX3IkYNNdUlsFZW02cPVaCLEh71Mw2bnzCnJfJiJl836',
            'remember_token' => 'j5alcluEhrEGXPWz0kdklOpuoqvR9kDhymSHcOcNT7qRDpEcdLkj52dhko1X',
        ]);


        User::create([ //is-writer 6
            'name' => 'Jim',
            'family' => 'jim',
            'username' => 'jim',
            'email' => 'p2jim@p.com',
            'password' => Hash::make('secret'),
            'two_factor_expiry' => '2020-11-22 06:29:29',
            'session_id' => 'jQQ2lNkcsid8ZJBp7vHyVfcy4f790ZRohTdeGG8d',
            'api_token' => 'WgvwYZpvAApBwvLXiX3IkYNNdUlsFZW02cPVaCLEh71Mw2bnzCnJfJiJl836',
            'remember_token' => 'j5alcluEhrEGXPWz0kdklOpuoqvR9kDhymSHcOcNT7qRDpEcdLkj52dhko1X',
        ]);

        User::create([ //is-editor 7
            'name' => 'Linda',
            'family' => 'linda',
            'username' => 'linda',
            'email' => 'p2linda@p.com',
            'password' => Hash::make('secret'),
            'two_factor_expiry' => '2020-11-22 06:29:29',
            'session_id' => 'jQQ2lNkcsid8ZJBp7vHyVfcy4f790ZRohTdeGG8d',
            'api_token' => 'WgvwYZpvAApBwvLXiX3IkYNNdUlsFZW02cPVaCLEh71Mw2bnzCnJfJiJl836',
            'remember_token' => 'j5alcluEhrEGXPWz0kdklOpuoqvR9kDhymSHcOcNT7qRDpEcdLkj52dhko1X',
        ]);

        User::create([ //is-editor 8
            'name' => 'Ronaldo',
            'family' => 'ronaldo',
            'username' => 'ronaldo',
            'email' => 'p2ronaldo@p.com',
            'password' => Hash::make('secret'),
            'two_factor_expiry' => '2020-11-22 06:29:29',
            'session_id' => 'jQQ2lNkcsid8ZJBp7vHyVfcy4f790ZRohTdeGG8d',
            'api_token' => 'WgvwYZpvAApBwvLXiX3IkYNNdUlsFZW02cPVaCLEh71Mw2bnzCnJfJiJl836',
            'remember_token' => 'j5alcluEhrEGXPWz0kdklOpuoqvR9kDhymSHcOcNT7qRDpEcdLkj52dhko1X',
        ]);
        
        //-----------RolesSeeder------------//
        Role::create([  //id:1
            'name'  => 'Portal Manager',
            'label' => 'is-portal-manager'
        ]);

        Role::create([  //id:2
            'name'  => 'Manager',
            'label' => 'is-manager'
        ]);

        Role::create([  //id:3
            'name'  => 'Editor',
            'label' => 'is-editor'
        ]);

        Role::create([  //id:4
            'name'  => 'Writer',
            'label' => 'is-writer'
        ]);
        
        //-----------RolesUserSeeder------------//
        DB::table('role_user')->insert(['role_id' => 1, 'user_id' => 1]); //portal manager(user: Alfred)

        DB::table('role_user')->insert(['role_id' => 2, 'user_id' => 2]); //is-manager (user:Ella)
        DB::table('role_user')->insert(['role_id' => 2, 'user_id' => 3]); //is-manager (user:Elizabeth)

        DB::table('role_user')->insert(['role_id' => 3, 'user_id' => 5]); //is-editor (user:Jack)

        DB::table('role_user')->insert(['role_id' => 4, 'user_id' => 4]); //is-writer (user:Scarlett)
        DB::table('role_user')->insert(['role_id' => 4, 'user_id' => 7]); //is-writer (user:Linda)
        DB::table('role_user')->insert(['role_id' => 4, 'user_id' => 6]); //is-writer (user:Jim)
        
        //-----------CategoriesSeeder------------//
        Category::create([ //root id:1
            'parent_id' => null,
            'name' => 'application'
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
        Category::create([ //web  //id:7
            'parent_id' => 2, //parent:web
            'name' => 'js'
        ]);
        Category::create([ //mobile  //id:8
            'parent_id' => 3, //parent:mobile
            'name' => 'flutter'
        ]);
        Category::create([ //mobile  //id:9
            'parent_id' => 3, //parent:mobile
            'name' => 'java'
        ]);
        Category::create([ //php  //id:10
            'parent_id' => 4, //parent:web\php
            'name' => 'laravel'
        ]);
        Category::create([ //php  //id:11
            'parent_id' => 4, //parent:web\php
            'name' => 'lumen'
        ]);
        Category::create([ //multimedia  //id:12
            'parent_id' => null, //parent:web\php
            'name' => 'multimedia'
        ]);
        Category::create([ //images  //id:13
            'parent_id' => 12, //parent:multimedia
            'name' => 'lumen'
        ]);
        
        //-----------CategoryUserSeeder------------//

        //Alfred: portal-manager
        DB::table('category_user')->insert(['category_id' => 1, 'user_id' => 1]);//'application'
        DB::table('category_user')->insert(['category_id' => 2, 'user_id' => 1]);//'web'
        DB::table('category_user')->insert(['category_id' => 3, 'user_id' => 1]);//'mobile'
        DB::table('category_user')->insert(['category_id' => 4, 'user_id' => 1]);//'php'
        DB::table('category_user')->insert(['category_id' => 5, 'user_id' => 1]);//'html'
        DB::table('category_user')->insert(['category_id' => 6, 'user_id' => 1]);//'css'
        DB::table('category_user')->insert(['category_id' => 7, 'user_id' => 1]);//'js'
        DB::table('category_user')->insert(['category_id' => 8, 'user_id' => 1]);//'flutter'
        DB::table('category_user')->insert(['category_id' => 9, 'user_id' => 1]);//'java'
        DB::table('category_user')->insert(['category_id' => 10, 'user_id' => 1]);//'laravel'
        DB::table('category_user')->insert(['category_id' => 11, 'user_id'=> 1]);//'lumen'

        //Ella: manager
        // DB::table('category_user')->insert(['category_id' => 2, 'user_id' => 2]);//'php'
        DB::table('category_user')->insert(['category_id' => 4, 'user_id' => 2]);//'php'
        DB::table('category_user')->insert(['category_id' => 10, 'user_id' => 2]);//'laravel'
        DB::table('category_user')->insert(['category_id' => 11, 'user_id' => 2]);//'lumen'

        //Elizabeth: manager
        DB::table('category_user')->insert(['category_id' => 2, 'user_id' => 3]);//'web'
        DB::table('category_user')->insert(['category_id' => 5, 'user_id' => 3]);//'html'
        DB::table('category_user')->insert(['category_id' => 6, 'user_id' => 3]);//'css'
        DB::table('category_user')->insert(['category_id' => 7, 'user_id' => 3]);//'js'

        //Jack: editor
        DB::table('category_user')->insert(['category_id' => 3, 'user_id' => 5]);//'mobile'
        DB::table('category_user')->insert(['category_id' => 8, 'user_id' => 5]);//'flutter'
        DB::table('category_user')->insert(['category_id' => 9, 'user_id' => 5]);//'java'

        //Scarlet: writer

        //Jim: writer
        DB::table('category_user')->insert(['category_id' => 8, 'user_id' => 6]);//'flutter'

        // Linda: writer
        DB::table('category_user')->insert(['category_id' => 11, 'user_id' => 7]);//'lumen' 
        // Scarlet: writer
        DB::table('category_user')->insert(['category_id' => 7, 'user_id' => 4]);//'js' 


        //--------------Post--------------------//
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

        DB::table('category_post')->insert(['category_id' => 9, 'post_id' => 1]);
        DB::table('category_post')->insert(['category_id' => 2, 'post_id' => 2]);
        DB::table('category_post')->insert(['category_id' => 5, 'post_id' => 3]);
        DB::table('category_post')->insert(['category_id' => 6, 'post_id' => 4]);
        DB::table('category_post')->insert(['category_id' => 10, 'post_id' => 5]);
        DB::table('category_post')->insert(['category_id' => 7, 'post_id' => 6]);

        DB::table('category_post')->insert(['category_id' => 12, 'post_id' => 7]);
        DB::table('category_post')->insert(['category_id' => 13, 'post_id' => 8]);
    }
}