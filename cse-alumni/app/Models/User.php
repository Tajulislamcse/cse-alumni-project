<?php
namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
class User extends Authenticatable
{
	use Notifiable;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'alumniId',
		'name',
		'batch_id',
		'session',
		'bloodgroup',
		'designation',
		'gender',
		'image',
		'phoneNo',
		'email',
		'password'
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
	 * The attributes that should be cast to native types.
	 *
	 * @var array
	 */
	protected $casts = [
		'email_verified_at' => 'datetime',
	];
	public function posts()
	{
		return $this->hasMany('App\Models\Post');
	}
	public function profession()
	{
		return $this->hasOne('App\Models\Profession');
	}
	public function roles()
	{
		return $this->belongsToMany('App\Models\Role');
	}
	public function hasRole($role)
	{
		return $this->roles()->where('name',$role)->first()!=null;
	}
	public function hasAnyRole($roles)
	{
		return $this->roles()->whereIn('name',$roles)->first()!=null;
	}
	public function batch()
	{
		return $this->belongsTo('App\Models\Batch');
	}
}
