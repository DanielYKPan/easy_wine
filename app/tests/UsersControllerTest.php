<?php

use Easyway\Repo\User\UserRepositoryInterface;
use Easyway\Service\Form\UserLoginForm;

class UsersControllerTest extends \TestCase {

	public function setUp()
	{
		parent::setUp();
		$this->user_repository_mock = $this->mock('Easywine\Repo\User\UserRepositoryInterface');
	}

	public function mock($class)
	{
		$mock = Mockery::mock($class);
		$this->app->instance($class, $mock);

		return $mock;
	}

	public function testLoginSuccessWithValidLoginInformAndRedirectToUserDashboard()
	{
		Input::replace($input=['email'=>'example@example.com', 'password'=>'example']);
		$this->user_repository_mock->shouldReceive('loginUser')
			->with($input)
			->once()
			->andReturn(true);

		$this->call('POST', 'user/login',$input);
		$this->assertRedirectedToAction('UsersController@getDashboard');
	}

	public function testLoginFailsAndReceiveAMessage()
	{
		Input::replace($input=['email'=>'example@example.com', 'password'=>'example']);
		$this->user_repository_mock->shouldReceive('loginUser')
			->with($input)
			->once()
			->andReturn(false);

		$this->call('POST', 'user/login', $input);
		$this->assertRedirectedToAction('UsersController@getLogin');
		$this->assertSessionHas(array('message'));
	}

	/**
	 * @expectedException Easywine\Exception\FormValidationException
	 */
	public function testLoginFailsWithEmptyEmailInformAndThrowFormValidationException()
	{
		Input::replace($input=['email'=>'', 'password'=>'example']);
		$this->user_repository_mock->shouldReceive('loginUser')
			->with($input)
			->never();

		$this->call('POST', 'user/login',$input);
	}

	/**
	 * @expectedException Easywine\Exception\FormValidationException
	 */
	public function testLoginFailsWithInvalidEmailAddressFormatAndThrowFormValidationException()
	{
		Input::replace($input=['email'=>'somethinghere', 'password'=>'example']);
		$this->user_repository_mock->shouldReceive('loginUser')
			->with($input)
			->never();

		$this->call('POST', 'user/login',$input);
	}

	/**
	 * @expectedException Easywine\Exception\FormValidationException
	 */
	public function testLoginFailsWithEmptyPasswordInformAndThrowFormValidationException()
	{
		Input::replace($input=['email'=>'somethinghere', 'password'=>'']);
		$this->user_repository_mock->shouldReceive('loginUser')
			->with($input)
			->never();

		$this->call('POST', 'user/login',$input);
	}
}