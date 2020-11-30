<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;

class ExampleTest extends TestCase
{
    public function testBasicTest()
    {
        //Given: ella is logged in
        $ella = User::where('name', 'ella')->firstOrFail();

        //When: ella tries to retrieve posts
        $posts = $ella->posts();

        //Then: ella should be able to see posts only from web category
        $this->assertTrue($posts->contains('title', 'Post on Laravel category'));
        $this->assertFalse($posts->contains('title', 'Post on Flutter category'));
    }
}