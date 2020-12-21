<?php

namespace App\Models;

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


    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
