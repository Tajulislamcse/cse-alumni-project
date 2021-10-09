<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    public function generalMembers()
    {
        return $this->hasMany('App\Models\User');
    }
}
