<?php

/*
Plugin Name: WordPress Create React App
Plugin URI:  http://link to your plugin homepage
Description: Create a basic React app for Wordpress
Version:     1.0
Author:      Giannis Dallas
Author URI:  https://giannisdallas.com
License:     GPL2 etc
License URI: 
*/

//[foobar]
function WP_Create_React_App_func(){
	return "<div id='reactApp'>This is a test</div>";
}
add_shortcode( 'WP-CRApp', 'WP_Create_React_App_func' );

function reactapp_enqueue_scripts() {
	//wp_enqueue_script( 'React-js', 'https://unpkg.com/react@16/umd/react.production.min.js', array(), '', true  );
	//wp_enqueue_script( 'React-DOM', 'https://unpkg.com/react-dom@16/umd/react-dom.production.min.js', array(), '', true  );

	wp_enqueue_script( 'custom-react-app', plugin_dir_url( __FILE__ ) . '/app.js', array(), '', true ); 
}

add_action( 'wp_enqueue_scripts', 'reactapp_enqueue_scripts' );