<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	protected $fillable = ['email', 'password','remember_token', 'user_role'];

	/*protected $appends = ['full_name'];*/

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token','created_at', 'updated_at');

	/**
	 * Relationship with UserDetail
	 *
	 * A user should have his user details, including
	 * first name, last name, address, etc.
	 * 
	 */
	public function userDetail()
	{
		return $this->hasOne('UserDetail');
	}

	/*public function getFullNameAttribute()
    {
    	$userFullName = $this->userDetail()->select(['title', 'first_name', 'last_name'])->firstOrFail()->toArray();
        return $userFullName['title'].' '.ucfirst($userFullName['first_name']).' '.ucfirst($userFullName['last_name']);
    }*/

    public function setPasswordAttribute($password)
    {
    	$this->attributes['password'] = Hash::make($password);
    }
}
