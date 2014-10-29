<?php namespace Easywine\Service\Validation;

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