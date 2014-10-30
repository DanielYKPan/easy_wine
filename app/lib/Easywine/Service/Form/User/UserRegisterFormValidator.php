<?php namespace Easywine\Service\Form\User;

use Easywine\Service\Validation\AbstractLaravelValidator;

class UserRegisterFormValidator extends AbstractLaravelValidator {

	/**
	 * Validation rules
	 *
	 * @var Array
	 */
	protected $rules = [
		'email' => 'required|email|unique:users',		
		'password' => 'required|min:6|max:20|confirmed',
		'password_confirmation' => 'required',
		'first_name' =>'required|alpha_dash',
		'last_name' => 'required|alpha_dash',
		'title' => 'required',
		'age' => 'required',
		'address'=>'required',
		'suburb'=>'required',
		'postcode'=>'required|digits:4',
		'state'=>'required',
		'contact_number'=>'required|integer',
		'subscribed'=>'required',
	];

	/**
	 *  Return validation rules
	 *
	 * @return array
	 */
	public function getRules()
	{
		$rules = [
			'email' => 'required|email|unique:users',		
			'password' => 'required|min:6|max:20|confirmed',
			'password_confirmation' => 'required',
			'first_name' =>'required|alpha_dash',
			'last_name' => 'required|alpha_dash',
			'title' => 'required',
			'age' => 'required',
			'address' => 'required',
			'suburb' => 'required',
			'postcode' => 'required|digits:4',
			'state' => 'required',
			'contact_number' => 'required|integer',
			'subscribed' => 'required',
		];

		return $rules;
	}
}