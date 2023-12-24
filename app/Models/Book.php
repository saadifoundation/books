<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function getRouteKeyName()
    {
        return 'title_abbr';
    }

    public function levels()
    {
        return $this->belongsToMany(Level::class)->withTimestamps();
    }

    public function audio()
    {
        return $this->hasMany(Audio::class);
    }

    public function users()
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

    public function collection()
    {
        return $this->belongsTo(Collection::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
