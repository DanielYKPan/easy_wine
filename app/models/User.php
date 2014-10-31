<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	protected $fillable = ['email', 'remember_token', 'user_role'];

	protected $guarded = ['id', 'password'];

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

    public function setPasswordAttribute($password)
    {
    	$this->attributes['password'] = Hash::make($password);
    }
}
