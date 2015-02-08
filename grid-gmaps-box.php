<?php
/*
Plugin Name: Grid GoogeMaps V3 Box
Plugin URI: http://edwardbock.de/
Description: A box that renders GoogleMaps Api V3
Version: 1.0
Author: Edward Bock
*/
add_action("grid_load_classes", "grid_gmaps_box_load");

function grid_gmaps_box_load(){
	wp_enqueue_script(
		'grid-box-gmail-api',
		'https://maps.googleapis.com/maps/api/js?v=3.exp'
	);
	wp_enqueue_script(
		'grid-box-gmail',
		plugins_url( '/gmaps.js' , __FILE__ ),
		array( 'jquery' )
	);
	require "grid-gmaps-box.inc";
}

?>