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
        Category::create([
            'parent_id'   => null,
            'name'        => 'programming languages'
        ]);
        Category::create([
            'parent_id'   => 1,
            'name'        => 'web'
        ]);
        Category::create([
            'parent_id'   => 1,
            'name'        => 'mobile'
        ]);
        Category::create([
            'parent_id'   => 2,
            'name'        => 'php'
        ]);
        Category::create([
            'parent_id'   => 2,
            'name'        => 'html'
        ]);
        Category::create([
            'parent_id'   => 2,
            'name'        => 'css'
        ]);
        Category::create([
            'parent_id'   => 3,
            'name'        => 'flutter'
        ]);
        Category::create([
            'parent_id'   => 3,
            'name'        => 'java'
        ]);
        Category::create([
            'parent_id'   => 4,
            'name'        => 'laravel'
        ]);
        Category::create([
            'parent_id'   => 4,
            'name'        => 'lumen'
        ]);
    }
}