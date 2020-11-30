<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @property int $id
 * @property string $name
 * @property string $label
 */
class Role extends Model
{
    use HasFactory;

    /**
     * Get all Users associated with the current Role.
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
}