<?php

require_once __DIR__.'/vendor/autoload.php';

try {
	(new Dotenv\Dotenv(__DIR__))->load();
} catch (Dotenv\Exception\InvalidPathException $e) {
	//
}



/**
 * Register menus with Wordpress
 */
if ( ! defined( 'register_menu' ) ) {

	function register_menu() {
		register_nav_menus([
			'primary' => __( 'Primary' ),
			'secondary' => __( 'Secondary' ),
			'social' => __( 'Social' ),
		]);
	}

	add_action( 'init', 'register_menu' );
}


/**
 * Add Featured image for posts
 */
add_theme_support( 'post-thumbnails' ); 


/**
 * Compress output buffer
 */
if ( ! defined( 'html_compress' ) ) {

	function html_compress($buffer){
		
		$search = [
			'/\n/',			 // replace end of line by a space
			'/\>[^\S ]+/s',	 // strip whitespaces after tags, except space
			'/[^\S ]+\</s',	 // strip whitespaces before tags, except space
		 	'/(\s)+/s',		 // shorten multiple whitespace sequences,
		];
	 
		$replace = [
			' ',
			'>',
		 	'<',
		 	'\\1',
		];
	 
		return preg_replace($search, $replace, $buffer);
	}
}

/**
 * Minify html
 */
if ( ! defined( 'minify_html' ) ) {
	function minify_html(){
		ob_start('html_compress');
	}
}

if ( getenv('APP_ENV') == 'production' ) {
	add_action('wp_loaded','minify_html');
}


/**
 * Laravel Helpers adapted to Wordpress
 */

function asset($path)
{
	return get_template_directory_uri() . '/public/' . $path;
}
