<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable=
    [
    	'employeeId',
    	'name',
    	'image',
    	'bloodGroup',
    	'phoneNumber',
    	'email',
    	'description',
    	'researchInterest',
    	'conferenceArticles'
    ];
}
