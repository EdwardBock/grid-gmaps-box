<?php
/**
 * Plugin Name: Grid GoogleMaps Box
 * Plugin URI: https://github.com/EdwardBock/grid-gmaps-box
 * Description: Provides a GoogleMaps Box for Grid.
 * Version: 1.0
 * Author: Edward Bock <me@edwardbock.de>
 * Author URI: http://www.edwardbock.de
 * Requires at least: 4.0
 * Tested up to: 4.1
 * License: http://www.gnu.org/licenses/gpl-2.0.html GPLv2
 * @copyright Copyright (c) 2015, Edward Bock
 * @package Palasthotel\Grid-GoogleMaps-Box
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