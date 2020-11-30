<?php

namespace App\Models;

use App\Concerns\HasPosts;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @property int $id
 * @property int $user_id
 * @property int $properties_id
 * @property string $name
 * @property string $family
 * @property string $username
 * @property string $email
 * @property mixed $email_verified_at
 * @property string $password
 * @property boolean $active
 * @property boolean $lock
 * @property string $avatar_path
 * @property string $cover_path
 * @property string $mobile_number
 * @property string $device_id
 * @property string $two_factor_token
 * @property mixed $two_factor_expiry
 * @property string $session_id
 * @property string $api_token
 * @property mixed $deleted_at
 * @property mixed $created_at
 * @property mixed $updated_at
 */
class User extends Authenticatable
{
    use HasFactory, Notifiable, HasPosts;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the parent User to which the current User belongs.
     */
    public function parent(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get all Users which belong to the current User.
     */
    public function kids(): HasMany
    {
        return $this->hasMany(User::class);
    }

    /**
     * Get all Categories to which the current User is associated with.
     */
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

    /**
     * Get the UserProperties for the current User.
     */
    public function properties(): HasOne
    {
        return $this->hasOne(UserProperty::class, 'properties_id', 'id');
    }

    /**
     * Get all Roles to which the current User is associated with.
     */
    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class);
    }

    /**
     * Determine whether current User has the given role.
     * Given role can be a Role object or string or int
     *
     * @param Role|string|int $role
     * @return boolean
     */
    public function hasRole($role)
    {
        /** When $role is an object of class Role */
        if ($role instanceof Role) {
            return !!$role->intersect($this->roles)->count();
        }
        /** When $role is an integer */
        if (is_int(($role))) {
            return $this->roles->contains('id', $role);
        }
        /**
         * When $role is string
         *  - Check against id (in case id is uuid stored as string)
         *  - Check against name
         *  - Check against label
         */
        if (is_string($role)) {
            return !!(
                $this->roles->contains('id', $role) ||
                $this->roles->contains('name', $role) ||
                $this->roles->contains('label', $role)
            );
        }
    }

    public function hasRoleByName($role)
    {
        if ($role == null) {
            return false;
        }
        if (is_string($role)) {
            return $this->roles->contains('name', $role) || $this->roles->contains('label', $role);
        } else {
            return !!$role->intersect($this->roles)->count();
        }
    }
}