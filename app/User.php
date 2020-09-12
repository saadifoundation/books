<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getRouteKeyName()
    {
        return 'name_en';
    }

    public function books()
    {
        return $this->belongsToMany('App\Book')
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
