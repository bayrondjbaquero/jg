<?php namespace Autority\service;

use Illuminate\Support\ServiceProvider;

class JgServiceProvider extends ServiceProvider {

	public function register(){

		$app = $this->app;
		$app->bind('Autority\user\sentry\UserInterface','Autority\user\sentry\SentryUser');
		$app->bind('Autority\user\userDetail\userDetailInterface','Autority\user\userDetail\UserDetail');
		$app->bind('Autority\session\SessionInterface','Autority\session\SentrySession');
	}

}