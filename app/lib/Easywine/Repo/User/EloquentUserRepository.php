<?php namespace Easywine\Repo\User;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class EloquentUserRepository implements UserRepositoryInterface {

	protected $user;
	protected $userDetail;

	public function __construct(Model $user, Model $userDetail)
	{
		$this->user = $user;
		$this->userDetail = $userDetail;
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

	/**
	 * Attempt to register user/create user
	 *
	 * @param Array register information
	 * @return \Illuminate\Database\Eloquent\Model
	 */
	public function registerUser($register_input)
	{
		$this->user->email = $register_input['email'];
		$this->user->password = $register_input['password'];
		$this->user->user_role = $register_input['user_role'];
		$this->user->save();
		$this->userDetail->title = $register_input['title'];
		$this->userDetail->first_name = $register_input['first_name'];
		$this->userDetail->last_name = $register_input['last_name'];
		$this->userDetail->age = $register_input['age'];
		$this->userDetail->address = $register_input['address'];
		$this->userDetail->suburb = $register_input['suburb'];
		$this->userDetail->postcode = $register_input['postcode'];
		$this->userDetail->state = $register_input['state'];
		$this->userDetail->company_name = $register_input['company_name'];
		$this->userDetail->contact_number = $register_input['contact_number'];
		$this->userDetail->subscribed = $register_input['subscribed'];
		$this->user->userDetail()->save($this->userDetail);

		return $this->user;
	}
}