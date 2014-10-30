<?php

//WinesController Tests

use Easywine\Repo\Wine\WineRepositoryInterface;

Class WinesControllerTest extends \TestCase {

	public function setUp()
	{
		parent::setUp();
		$this->mock = $this->mock('Easywine\Repo\Wine\WineRepositoryInterface');
	}

	public function mock($class)
	{
		$mock = Mockery::mock($class);
		$this->app->instance($class, $mock);

		return $mock;
	}

	public function testDisplaySpecificWineByProductCode()
	{
		//code to go
	}
}