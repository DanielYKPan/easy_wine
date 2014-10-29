<?php namespace Easywine\Exception;

use Illuminate\Validation\Validator;

class FormValidationException extends \Exception
{
	protected $validator;
	protected $returnLink;

	public function __construct(Validator $validator,  $returnLink)
	{
		$this->message = 'Validation has failed.';
		$this->validator = $validator;
		$this->returnLink = $returnLink;
	}

	/**
	 * Retrieve a link where it would be 
	 * redirect back when validation fails
	 *
	 * @return string
	 */
	public function getReturnLink()
	{
		return $this->returnLink;
	}

	/**
	 * Retrieve the validator
	 *
	 * @return \Illuminate\Validation\Validator
	 */
	public function getValidator()
	{
		return $this->validator;
	}
}