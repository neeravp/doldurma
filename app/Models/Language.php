<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @property int $id
 * @property string $name
 * @property string $label
 */
class Language extends Model
{
    use HasFactory;

    /**
     * Get all Posts associated with the current Language.
     */
    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }
}