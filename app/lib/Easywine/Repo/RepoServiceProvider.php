<?php namespace Easywine\Repo;

use User;
use Easywine\Repo\User\EloquentUserRepository;
use Illuminate\Support\ServiceProvider;
use Easywine\Service\Form\User\UserLoginForm;
use Easywine\Service\Form\User\UserLoginFormValidator;

class RepoServiceProvider extends ServiceProvider {

	public function register()
	{
		$app = $this->app;

		$app->bind('Easywine\Repo\User\UserRepositoryInterface', function($app){
			return new EloquentUserRepository(new User);
		});
	}
}