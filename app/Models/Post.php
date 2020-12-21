<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @property int $user_id
 * @property int $language_id
 * @property string $title
 * @property string $slug
 * @property boolean $post_type
 * @property boolean $published
 * @property boolean $selected_for_app
 * @property boolean $selected_for_intermediate
 * @property boolean $is_breaking_news
 * @property boolean $confirmed
 * @property boolean $private
 * @property string $password
 * @property boolean $scheduled
 * @property mixed $published_date_time
 * @property string $featured_image
 * @property mixed $deleted_at
 * @property mixed $created_at
 * @property mixed $updated_at
 */
class Post extends Model
{
    use HasFactory;

    /**
     * Get the language to which the current Post belongs.
     */
    public function language(): BelongsTo
    {
        return $this->belongsTo(Language::class);
    }

    /**
     * Get the User to which the current Post belongs.
     */

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    /*public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id', 'author');
    }*/
}
