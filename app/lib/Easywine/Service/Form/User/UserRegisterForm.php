<?php namespace Easywine\Service\Form\User;

use Easywine\Service\Validation\ValidatorInterface;
use Easywine\Repo\User\UserRepositoryInterface;

class UserRegisterForm {

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
	 * Register New User
	 *
	 * @param Array User Registration Inform
	 * @param String Link where it would redirect to when form validation fails
	 * @return \Illuminate\Database\Eloquent\Model
	 */
	public function register(array $input, $returnLink)
	{
		$this->validator->with($input, $returnLink)->validates();
		return $this->user->registerUser($input);
	}
}