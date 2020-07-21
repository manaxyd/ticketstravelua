<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends \TCG\Voyager\Models\User
{
    use Notifiable;

    //protected $table = "users";
    //protected $primaryKey = "id";


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

public function posts() {
    return $this->hasMany('Post','author_id','id');
    //return $this->hasMany('SpoHotel','author_id','id');
}


//    protected $casts = [
//        'id' => 'integer',
//        'role_id' => 'integer',
//        'name' => 'string',
//        'name' => 'string',
//        'avatar' => 'string',
//        'password' => 'string',
//        'remember_token' => 'string',
//        'settings' => 'string',
//        'created_at' => 'datetime',
//        'updated_at' => 'datetime'
//    ];

//    protected $dates = [
//        'created_at',
//        'updated_at'
//    ];
}
