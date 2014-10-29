<?php namespace Easywine\Repo\User;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class EloquentUserRepository implements UserRepositoryInterface {

	protected $user;

	public function __construct(Model $user)
	{
		$this->user = $user;
	}

	/**
	 * Attempt to login user
	 *
	 * @param Array userInput
	 * @return Response
	 */
	public function loginUser($login_input)
	{
		return Auth::attempt($login_input);
	}

	/**
	 *  Attempt to logout user
	 */
	public function logoutUser()
	{
		Auth::logout();
		Session::flush();
	}
}