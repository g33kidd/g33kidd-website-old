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
        'name', 'email', 'password', 'username'
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
     * Posts that the user has created.
     */
    public function posts()
    {
        return $this->hasMany('App\Post');
    }

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
        if($this->roles()->where('name', $role)->get()->count() > 0) {
            return true;
        } else {
            return false;
        }
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

    /**
     * Notification Channels
     */
    public function routeNotificationForEmail()
    {
        return $this->email;
    }
}
