<?php namespace Easywine\Service\Validation;

use Illuminate\Validation\Factory as Validator;
use Easywine\Exception\FormValidationException;

abstract class AbstractLaravelValidator implements ValidatorInterface {

	/**
	 * Validator
	 *
	 * @var \Illuminate\Validation\Factory
	 */
	protected $validator;

	/**
	 * A link that would be redirect to
	 * when validation fails
	 *
	 * @return string
	 */
	protected $returnLink;

	/**
	 * Validation data key=>value array
	 *
	 * @var Array
	 */
	protected $input = array();

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
	 *	And set the redirect back link
	 *
	 * @return \Easywine\Service\Validation\AbstractLaravelValidation
	 */
	public function with(array $input, $returnLink)
	{
		$this->input = $input;
		$this->returnLink = $returnLink;
		return $this;
	}

	/**
	 *  Validate passes or fails
	 *
	 * @return void
	 */
	public function validates()
	{
		$validator = $this->validator->make(
			$this->input,
			$this->getRules(),
			$this->getMessages()
		);

		// if the validation fails, throw a 'FormValidationException'
		if($validator->fails())
			throw new FormValidationException($validator, $this->returnLink);
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
}