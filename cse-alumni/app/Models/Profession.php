<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
  protected $fillable=['name','appointmentDate'];
  public function user()
  {
  	return $this->belongsTo('App\Models\User');
  }
}
