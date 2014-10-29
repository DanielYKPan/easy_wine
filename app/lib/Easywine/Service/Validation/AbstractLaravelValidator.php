<?php namespace Easywine\Service\Validation;

use Illuminate\Validation\Factory as Validator;

abstract class AbstractLaravelValidator implements ValidatorInterface {

	/**
	 * Validator
	 *
	 * @var \Illuminate\Validation\Factory
	 */
	protected $validator;

	/**
	 * Validation data key=>value array
	 *
	 * @var Array
	 */
	protected $input = array();

	/**
	 *  Validation errors
	 *
	 * @var Array
	 */
	protected $errors = array();

	/**
	 *  Validation rules
	 *
	 * @var Array
	 */
	protected $rules = array();

	/**
	 *  Custom validation messages
	 *
	 * @var Array
	 */
	protected $messages = array();

	public function __construct(Validator $validator)
	{
		$this->validator = $validator;
	}

	/**
	 *  Set data to validate
	 *
	 * @return \Easywine\Service\Validation\AbstractLaravelValidation
	 */
	public function with(array $input)
	{
		$this->input = $input;
		return $this;
	}

	/**
	 *  Validate passes or fails
	 *
	 * @return Boolean
	 */
	public function passes()
	{
		$validator = $this->validator->make(
			$this->input,
			$this->getRules(),
			$this->getMessages()
		);

		if($validator->fails())
		{
			$this->errors = $validator->messages();
			return false;
		}

		return true;
	}

	/**
	 *  Return validation rules
	 *
	 * @return Array
	 */
	public function getRules()
	{
		return $this->rules;
	}

	/**
	 *  Return custom validation message
	 *
	 * @return Array
	 */
	public function getMessages()
	{
		return $this->messages;
	}

	/**
	 *  Return errors, if any
	 *
	 * @return Array
	 */
	public function getErrors()
	{
		return $this->errors;
	}
}