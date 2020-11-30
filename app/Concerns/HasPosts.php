<?php

namespace App\Concerns;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Collection;

trait HasPosts
{
    /**
     * Get all available posts for the currently logged in user
     *
     * @return void
     */
    public function posts()
    {
        $method = 'postsFor' . Str::studly(str_replace('is-', '', $this->roles->first()->label));

        return $this->{$method}()->collapse();
    }

    /**
     * Get all posts associated with all categories including
     * their subcategories for the logged in Portal Manager
     */
    public function postsForPortalManager(): Collection
    {
        return Category::with(['subcategories.posts.language', 'posts.language'])
            ->get()
            ->pluck('posts')
            ->filter(function ($collection) {
                return !!$collection->count();
            });
    }

    /**
     * Get all posts for the logged in Manager which belong to
     * one of the categories associated with the Manager
     */
    public function postsForManager(): Collection
    {
        return $this->categories()
        ->with('posts.language')
        ->get()
        ->pluck('posts')
        ->filter(function ($collection) {
            return !!$collection->count();
        });
    }

    /**
     * Get only the posts which belong to the categories for the Editor
     * and which are authored by the logged in Editor
     */
    public function postsForEditor(): Collection
    {
        return $this->categories()->with(['posts' => function ($query) {
            $query->where('user_id', $this->id)->with('language');
        }])
        ->get()
        ->pluck('posts')
        ->filter(function ($collection) {
            return !!$collection->count();
        });
    }

    /**
     * Get only the posts which belong to the categories for the Writer
     * and which are authored by the logged in Writer
     */
    public function postsForWriter(): Collection
    {
        return $this->categories()->with(['posts' => function ($query) {
            $query->where('user_id', $this->id)->with('language');
        }])
        ->get()
        ->pluck('posts')
        ->filter(function ($collection) {
            return !!$collection->count();
        });
    }
}