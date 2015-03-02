<?php

/* Register Quick Links */

function register_my_menu() {
    register_nav_menu('quick-links',__( 'Quick Links' ));
}
add_action( 'init', 'register_my_menu' );


/* Enqueue Custom CSS */
function total_custom() {
	wp_enqueue_style( 'total-custom', get_stylesheet_directory_uri().'/custom.css' );
}

add_action( 'wp_enqueue_scripts', 'total_custom' );