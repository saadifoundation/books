<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getRouteKeyName(): string
    {
        return 'name_en';
    }

    public function books(): BelongsToMany
    {
        return $this->belongsToMany(Book::class)
            ->withPivot('role_id')
            ->withTimestamps()
            ->join('roles', 'role_id', '=', 'roles.id')
            ->select(
                'books.*',
                'roles.title as role_title',
                'roles.title_abbr as role_title_abbr',
                'roles.group as role_group'
            );
    }
}
