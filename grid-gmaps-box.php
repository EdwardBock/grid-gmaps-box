<?php
/*
Plugin Name: Grid GoogeMaps
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
		'grid-box-gmail-script',
		plugins_url( '/boxes/js/gmaps.js' , __FILE__ ),
		array( 'jquery' )
	);
	wp_enqueue_style(
		'grid-box-gmail-css',
		plugins_url('/boxes/css/gmaps.css', __FILE__)
	);

	require "boxes/grid-gmaps-box.inc";
}

add_filter("grid_editor_widgets", "grid_gmaps_box_editor_widgets");
function grid_gmaps_box_editor_widgets($widgets){
	$widgets["js"]["widget"] = plugins_url( "/editor-widgets/coordinates.js", __FILE__ );
	$widgets["css"]["widget"] = plugins_url( "/editor-widgets/coordinates.css", __FILE__ );
	return $widgets;
}

add_filter("grid_templates_paths", "grid_gmaps_box_tempaltes_path");
function grid_gmaps_box_tempaltes_path($paths){
	$paths[] = dirname(__FILE__)."/templates";
	return $paths;
}

?>