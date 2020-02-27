<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    protected $fillable=[
    'roll',
    'name',
    'batch',
    'session',
    'bloodgroup',
    'image',
    'profession',
    'phonenumber',
    'email',
    
    ];
}
