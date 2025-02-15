<?php

namespace App\Models;

use App\Models\Scopes\ActiveBookScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Book extends Model
{
    protected static function booted()
    {
        static::addGlobalScope(new ActiveBookScope());
    }

    public function getRouteKeyName(): string
    {
        return 'title_abbr';
    }

    public function levels(): BelongsToMany
    {
        return $this->belongsToMany(Level::class)->withTimestamps();
    }

    public function audio(): HasMany
    {
        return $this->hasMany(Audio::class);
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class)
            ->withPivot('role_id')
            ->withTimestamps()
            ->join('roles', 'role_id', '=', 'roles.id')
            ->select(
                'users.*',
                'roles.title as role_title',
                'roles.title_abbr as role_title_abbr',
                'roles.group as role_group'
            );
    }

    public function collection(): BelongsTo
    {
        return $this->belongsTo(Collection::class);
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }

    public function status(): BelongsTo
    {
        return $this->belongsTo(Status::class);
    }
}
