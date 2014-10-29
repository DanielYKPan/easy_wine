<?php namespace Easywine\Service\Validation;

interface ValidatorInterface {

	/**
     * Add data to validation against
     *
     * @param array
     * @return \Easywine\Service\Validation\ValidatorInterface  $this
     */
    public function with(array $input);

    /**
     * Test if validation passes
     *
     * @return boolean
     */
    public function passes();

    /**
     *  Retrieve validation rules
     *
     * @return array
     */
    public function getRules();

    /**
     *  Retrieve custome validation messages
     *
     * @return array
     */
    public function getMessages();

    /**
     * Retrieve validation errors
     *
     * @return array
     */
    public function getErrors();
	
}