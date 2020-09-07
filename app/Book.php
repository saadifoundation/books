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

    public function audios()
    {
        return $this->hasMany('App\Audio')->withTimestamps();
    }

    public function users()
    {
        return $this->belongsToMany('App\User')
                    ->withPivot('role_id')
                    ->withTimestamps()
                    ->join('roles', 'role_id', '=', 'roles.id')
                    ->select('*');
    }
    
    public function collection()
    {
        return $this->belongsTo('App\Collection')->withTimestamps();
    }
}
