<?php namespace Easywine\Service\Form;

use Illuminate\Support\ServiceProvider;
use Easywine\Service\Form\User\UserLoginForm;
use Easywine\Service\Form\User\UserLoginFormValidator;

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
	}
}