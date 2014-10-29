<?php

use Easywine\Repo\User\UserRepositoryInterface as User;
use Easywine\Service\Form\User\UserLoginForm;

class UsersController extends \BaseController {

	protected $user;
	protected $user_login_form;

	/**
	 * Dependency Injection
	 */
	public function __construct(User $user=null, 
								UserLoginForm $user_login_form)
	{
		$this->user = $user?: new User;
		$this->user_login_form = $user_login_form;
	}

	/**
	 * Display a listing of the resource.
	 * GET /users
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /users/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /users
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /users/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
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

		// Validate user login form input
		/*if($this->login_validator->with($login_inform)->passes())
		{
			// check user login information and attempt to login user
			if($this->user->loginUser($login_inform))
			{
				return Redirect::intended('user/dashboard');
			}else{
				return Redirect::action('UsersController@getLogin')->with('message','The email or the password you entered is incorrent.')->withInput();
			}
		} else {
			return Redirect::action('UsersController@getLogin')->withInput($login_inform)->withErrors($this->login_validator->getErrors());
		}*/
		if($this->user_login_form->login($login_inform))
		{
			return Redirect::intended('user/dashboard');
		} else {
			return Redirect::action('UsersController@getLogin')
							->withInput($login_inform)
							->with('message', 'The email or the password you entered is incorrent.')
							->withErrors($this->user_login_form->getErrors());
		}
	}

	public function getDashboard()
	{
		return View::make('users.dashboard');
	}
}