<?php namespace Easywine\Repo;

use User;
use UserDetail;
use Wine;
use Type;
use Variety;
use Easywine\Repo\User\EloquentUserRepository;
use Easywine\Repo\Wine\EloquentWineRepository;
use Illuminate\Support\ServiceProvider;

class RepoServiceProvider extends ServiceProvider {

	public function register()
	{
		$app = $this->app;

		$app->bind('Easywine\Repo\User\UserRepositoryInterface', function($app){
			return new EloquentUserRepository(new User, new UserDetail);
		});

		$app->bind('Easywine\Repo\Wine\WineRepositoryInterface', function($app){
			return new EloquentWineRepository(new Wine, new Type, new Variety);
		});
	}
}