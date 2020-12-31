<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 *
 * @property int $id
 * @property int $parent_id
 * @property string $name
 * @property string $description
 * @property boolean $request_in_register
 * @property boolean $selected_for_app
 * @property boolean $locked
 * @property string $locked_message
 * @property boolean $is_default
 * @property mixed $deleted_at
 * @property mixed $created_at
 * @property mixed $updated_at
 */
class Category extends Model
{
    use HasFactory;

    // protected $with = ['subcategories'];

    /**
     * Get the parent Category to which the current Category belongs.
     */
    public function parent(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'parent_id', 'id', 'parent');
    }

    /**
     * Get all Categories which belong to the current Category.
     */
    public function subcategories(): HasMany
    {
        return $this->hasMany(Category::class, 'parent_id', 'id');
    }

    /**
     * Get all Posts which are associated with the current Category.
     */
    public function posts(): BelongsToMany
    {
        return $this->belongsToMany(Post::class);
    }

    /**
     * Get all Users which are associated with the current Category.
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    /**
     * Query to get all top level categories.
     */
    public static function topLevel():Builder
    {
        return static::whereNull('parent_id');
    }

    /**
     * Query to get all direct child (subCategories) of top level categories.
     */
    public static function secondLevel()
    {
        return static::where('parent_id', static::topLevel()->pluck('id'));
    }

    /**
     * Query to get all direct child (subCategories) of second level categories.
     */
    public static function thirdLevel()
    {
        return static::where('parent_id', static::secondLevel()->pluck('id'));
    }

    /**
     * Query constraint to get Categories which has an associated user with given $userId.
     */
    public function scopeForUser(Builder $query, int $userId): Builder
    {
        return $query->whereHas('users', fn($query) => $query->whereId($userId));
    }

    /**
     * Query constraint to get Categories with associated Posts.
     */
    public function scopeWithPosts($query)
    {
        return $query->with('posts');
    }

    public function getSubcategoryIds()
    {
        $ids = $this->subcategories->pluck('id');
        
        $this->subcategories->each(function($sub) use(&$ids){            
            if($sub->subcategories->count()) {            
                $ids->push($sub->getSubcategoryIds());
            }
        });      

        return $ids->flatten();
    }
}