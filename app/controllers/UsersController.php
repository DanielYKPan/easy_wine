<?php

use Easywine\Repo\User\UserRepositoryInterface as User;
use Easywine\Service\Form\User\UserLoginForm;
use Easywine\Service\Form\User\UserRegisterForm;

class UsersController extends \BaseController {

	protected $user;
	protected $user_login_form;
	protected $user_register_form;

	/**
	 * Dependency Injection
	 */
	public function __construct(User $user=null, 
								UserLoginForm $user_login_form,
								UserRegisterForm $user_register_form)
	{
		$this->user = $user?: new User;
		$this->user_login_form = $user_login_form;
		$this->user_register_form = $user_register_form;
	}

	/**
	 * Display login page
	 *
	 * @return Response login page
	 */
	public function getLogin()
	{
		return View::make('users.login');
	}

	/**
	 * Attempt to log user in
	 *
	 * @return Response user account page
	 */
	public function postLogin()
	{
		$login_inform = array(
			'email' => Input::get('email'),
			'password' => Input::get('password')
		);

		$returnLink = "user/login";

		// user login form processes
		if($this->user_login_form->login($login_inform, $returnLink))
		{
			return Redirect::intended('user/dashboard');
		} else {
			return Redirect::action('UsersController@getLogin')
							->withInput($login_inform)
							->with('message', 'The email or the password you entered is incorrent.');
		}
	}

	/**
	 * Attempt to logout user
	 * GET /user/logout
	 *
	 * @return Redirect to home page
	 */
	public function getLogout()
	{
		$this->user->logoutUser();
		return Redirect::route('home');
	}

	public function getRegister()
	{
		return View::make('users.register');
	}

	public function postRegister()
	{
		$register_inform = Input::all();
		$register_inform['user_role'] = 'normal customer';
		$returnLink = "user/register";

		$this->user_register_form->register($register_inform, $returnLink);
		return View::make('users.register_result');
	}

	public function getDashboard()
	{
		return View::make('users.dashboard');
	}

	//registration form email validation. Ajax calling function
	//check if the registering email already being used
	public function postValidateEmail()
	{
		$input = array(
			'email' => Input::get('email'),
			);
		$rule = array(
			'email' => 'unique:users,email',
			);

		$validator = Validator::make($input, $rule);

		if($validator->fails()){
			$return_array = array(
				'status'=>false, 
				);
			return Response::json($return_array);
		}

		$return_array = array('status'=>true);
		return Response::json($return_array);
	}
}