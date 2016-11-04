<?php

namespace App;

use Illuminate\Notifications\Notifiable;
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
     * The roles that belong to the user.
     */
    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }

    /**
     * Checks if the user has a given role.
     * @param  string  $role name of the role
     * @return boolean
     */
    public function hasRole($role)
    {
        return $this->roles()->contains('name', $role);
    }

    /**
     * Probably not needed, just for simplicity right now.
     * Toggles the current state of the given role on this user.
     * @param  string $role name of the role
     */
    public function toggleRole($role)
    {
        return $this->roles()->toggle($role);
    }
}