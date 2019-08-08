<?php
/**
 * Plugin Name: Tronald Dump
 * Plugin URI: https://www.fahdmurtaza.com/tronald-dump-widget-shortcode-plugin/
 * Description: A plugin that shows a random dump from the trump
 * Version: 1.0
 * Author: Fahad Muratza
 * Author URI: https://www.fahdmurtaza.com/
 **/

require_once 'vendor/autoload.php';

function fm_get_dump_from_trump( $atts ) {

	$response = Unirest\Request::get("https://matchilling-tronald-dump-v1.p.rapidapi.com/random/quote",
		array(
			"X-RapidAPI-Host" => "matchilling-tronald-dump-v1.p.rapidapi.com",
			"X-RapidAPI-Key" => "THiWjfRXkkmshsXO68PS6diNXNMep1BFxSFjsnHGhxksyjYlRC",
			"Accept" => "application/hal+json"
		)
	);

	echo "<pre>";
	print_r( $response );
	echo "</pre>";
}

add_shortcode( 'tronand-dump', 'fm_get_dump_from_trump' );
$response = Unirest\Request::get("https://matchilling-tronald-dump-v1.p.rapidapi.com/random/quote",
	array(
		"X-RapidAPI-Host" => "matchilling-tronald-dump-v1.p.rapidapi.com",
		"X-RapidAPI-Key" => "THiWjfRXkkmshsXO68PS6diNXNMep1BFxSFjsnHGhxksyjYlRC",
		"Accept" => "application/hal+json"
	)
);
// print_r( $response );
