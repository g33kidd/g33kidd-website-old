<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function taggable()
    {
        return $this->morphTo('taggable');
    }
}
