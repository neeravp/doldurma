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
            'title'          => 'Post on Laravel category',
            'description'    => '<p>post on laravel category post on laravel category post on laravel category</p>',
            'slug'           => 'post-on-laravel-category',
            'post_type'      => true,
            'published'      => true,
            'confirmed'      => true,
            'featured_image' => '{"images":{"original":"\/uploads\/post_images\/2020\/1606483705.png","300":"\/uploads\/post_images\/2020\/300_1606483705.png","900":"\/uploads\/post_images\/2020\/900_1606483705.png"},"thumbnail":"\/uploads\/post_images\/2020\/300_1606483705.png"}'
        ]);

        Post::create([
            'user_id'        => 1,
            'title'          => 'Post on Flutter category',
            'description'    => '<p>post on flutter category post on flutter category post on flutter category</p>',
            'slug'           => 'post-on-flutter-category',
            'post_type'      => true,
            'published'      => true,
            'confirmed'      => true,
            'featured_image' => '{"images":{"original":"\/uploads\/post_images\/2020\/1606483733.png","300":"\/uploads\/post_images\/2020\/300_1606483733.png","900":"\/uploads\/post_images\/2020\/900_1606483733.png"},"thumbnail":"\/uploads\/post_images\/2020\/300_1606483733.png"}'
        ]);
    }
}
