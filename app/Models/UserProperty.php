<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserProperty extends Model
{
    use HasFactory;

    /**
     * Get the User to which the current UserProperty belongs.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}