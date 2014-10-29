<?php namespace Easywine\Service\Form\User;

use Easywine\Service\Validation\ValidatorInterface;
use Easywine\Repo\User\UserRepositoryInterface;

class UserLoginForm {

	/**
	 *  Form Data
	 *
	 *	@var array
	 */
	protected $data;

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

	public function login(array $input)
	{
		if( ! $this->valid($input) )
		{
			return false;
		}

		return $this->user->loginUser($input);
	}

	public function getErrors()
	{
		return $this->validator->getErrors();
	}

	protected function valid(array $input)
	{
		return $this->validator->with($input)->passes();
	}
}