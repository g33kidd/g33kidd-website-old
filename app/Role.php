<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

    protected $fillable = ['name', 'description'];

    /**
     * The users that belongs to this role.
     */
    public function users()
    {
        return $this->belongsToMany('App\User');
    }

}
