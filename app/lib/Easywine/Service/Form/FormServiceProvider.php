<?php namespace Easywine\Service\Form;

use Illuminate\Support\ServiceProvider;
use Easywine\Service\Form\User\UserLoginForm;
use Easywine\Service\Form\User\UserLoginFormValidator;
use Easywine\Service\Form\User\UserRegisterForm;
use Easywine\Service\Form\User\UserRegisterFormValidator;

class FormServiceProvider extends ServiceProvider {

	public function register()
	{
		$app = $this->app;

		$app->bind('Easywine\Service\Form\User\UserLoginForm', function($app){
			return new UserLoginForm(
				new UserLoginFormValidator($app['validator']),
				$app->make('Easywine\Repo\User\UserRepositoryInterface')
			);
		});

		$app->bind('Easywine\Service\Form\User\UserRegisterForm', function($app){
			return new UserRegisterForm(
				new UserRegisterFormValidator($app['validator']),
				$app->make('Easywine\Repo\User\UserRepositoryInterface')
			);
		});
	}
}