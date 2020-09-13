<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function getRouteKeyName()
    {
        return 'title_abbr';
    }
    
    public function levels()
    {
        return $this->belongsToMany('App\Level')->withTimestamps();
    }

    public function audio()
    {
        return $this->hasMany('App\Audio');
    }

    public function users()
    {
        return $this->belongsToMany('App\User')
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
        return $this->belongsTo('App\Collection');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }
}
