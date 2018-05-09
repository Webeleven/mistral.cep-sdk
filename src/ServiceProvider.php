<?php
/**
 * Created by PhpStorm.
 * User: webeleven
 * Date: 4/11/18
 * Time: 5:09 PM
 */

namespace Webeleven\MistralCepSdk;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
use Webeleven\PassportSdk\AuthService;

class ServiceProvider extends LaravelServiceProvider
{

	/**
	 * @var bool
	 */
	protected $defer = true;

	/**
	 *
	 */
	public function register()
	{

		$this->app->singleton(Client::class, function ($app){
			return new Client;
		});

		$this->app->singleton(TokenService::class, function ($app){
			return new TokenService(
				$app[Client::class],
				env('MISTRAL_CEP_ENDPOINT'),
				env('MISTRAL_CEP_CLIENT_ID'),
				env('MISTRAL_CEP_CLIENT_SECRET')
			);
		});

		$this->app->singleton(Sdk::class, function ($app){
			return new Sdk(
				env('MISTRAL_CEP_ENDPOINT'),
				$app[Client::class],
				$app[TokenService::class]
			);
		});
	}
	/**
	 * @return array
	 */
	public function provides()
	{
		return [
			Client::class,
			TokenService::class,
			Sdk::class,
		];
	}
}