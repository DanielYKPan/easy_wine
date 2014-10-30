<?php namespace Easywine\Repo\User;

interface UserRepositoryInterface {

	/**
	 * Attempt to login user
	 *
	 * @param Array userInput
	 * @return Response
	 */
	public function loginUser($useInput);

	/**
	 *  Attempt to logout user
	 */
	public function logoutUser();

	/**
	 * Attempt to register user/create user
	 *
	 * @param Array userInput
	 * @return Response
	 */
	public function registerUser($userInput);
}