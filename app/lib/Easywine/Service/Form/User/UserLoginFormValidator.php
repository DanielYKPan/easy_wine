<?php namespace Easywine\Service\Form\User;

use Easywine\Service\Validation\AbstractLaravelValidator;

class UserLoginFormValidator extends AbstractLaravelValidator {

	/**
	 * Validation rules
	 *
	 * @var Array
	 */
	protected $rules = [
		'email' => 'required|email',
		'password' => 'required'
	];

	/**
	 *  Return validation rules
	 *
	 * @return array
	 */
	public function getRules()
	{
		$rules = [
			'email' => 'required|email',
			'password' => 'required'
		];

		return $rules;
	}
}