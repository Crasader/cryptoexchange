<?php

namespace Lloricode\PaymentGateway;

use Illuminate\Support\ServiceProvider;

class PaymentGatewayServiceProvider extends ServiceProvider
{
	/**
	* Bootstrap the application services.
	*
	* @return void
	*/
	public function boot()
	{ 
		$this->publishes([
			__DIR__.'/config' => base_path('/config/'),
		]);
		$this->loadMigrationsFrom(__DIR__.'/migration');
	}

	/**
	* Register the application services.
	*
	* @return void
	*/
	public function register()
	{
		$this->mergeConfigFrom(
			__DIR__.'/config/cryptobox_config.php' ,'cryptobox_config'
		);

		$this->app->singleton('lloricodepaymentGateway', function ($app) {
 			return new IntegrateSource;
 		});
	}
}