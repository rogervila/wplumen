<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Post;

class WpServiceProvider extends ServiceProvider
{
	/**
	 * Get Wordpress configuration and global variables
	 */
	public function register()
	{
		// Define Wordpress Table Prefix;
		global $wpdb;
		define('TABLE_PREFIX', $wpdb->prefix);
	}


	public function boot()
	{
		/**
		 * Prevent overwriting Wordpress internal routes (TODO)
		 */
		$this->app->singleton('wp_routes', function($app){
			return $app->get('/test', function () use ($app) {
				return 'test';
			});
		});
	}
}
