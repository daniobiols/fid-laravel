<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'lastname', 'email', 'password',
        // 'email', 'password', 'type_users_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function genre()
    {
    	//return $this->belongsTo(Genre::class, 'foreing_key', 'id');
    	return $this->belongsTo(Genre::class);
    }

    public function image()
    {
        return $this->hasOne(Image::class);
    }

    public function actors()
    {
    	//return $this->belongsToMany(Actor::class, 'tabla_de_relacion', 'foreing_key', 'id');
    	return $this->belongsToMany(Actor::class);
}
