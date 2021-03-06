<?php namespace Easywine\Service\Form\User;

use Easywine\Service\Validation\ValidatorInterface;
use Easywine\Repo\User\UserRepositoryInterface;

class UserLoginForm {

	/**
	 *  validator
	 *
	 *	@var \Easywine\Service\Form\Contracts\ValidatorInterface
	 */
	protected $validator;

	/**
	 *  User repository
	 *
	 *	@var \Easywine\Repo\User\UserRepositoryInterface
	 */
	protected $user;

	public function __construct(ValidatorInterface $validator,
								UserRepositoryInterface $user)
	{
		$this->validator = $validator;
		$this->user = $user;
	}

	/**
	 * Attempt to login user
	 *
	 * @param Array User Login Inform
	 * @param String Link where it would redirect to when form validation fails
	 * @return Boolean
	 */
	public function login(array $input, $returnLink)
	{
		$this->validator->with($input, $returnLink)->validates();
		return $this->user->loginUser($input);
	}
}