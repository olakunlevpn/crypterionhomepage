<?php

namespace Olakunlevpn\Crypterionhomepage;

use Illuminate\Support\ServiceProvider;

class CrypterionhomepageServiceProvider extends ServiceProvider {

	public function boot() {

		$this->loadRoutesFrom(__DIR__ . '/routes/web.php');
		$this->loadViewsFrom(__DIR__ . '/views/', 'crypterionhomepage');

		$this->mergeConfigFrom(
			__DIR__ . '/config/homepage.php', 'crypterionhomepage'
		);


		$this->publishes([
			__DIR__.'/resources' => public_path('vendor/crypterionhomepage'),
		], 'public');


	}

	public function register() {

	}

}
