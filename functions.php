<?php

/** AGGIORNA IN AUTOMATICO IL NUMERO DELLA VERSIONE */
define('WSA_VERSION', (WSA_IS_STAGING ? time() : '1.0.0'));

define('WSA_IS_ADMIN', current_user_can('edit_others_posts'));
    
/**
 * This function takes care of all the setup and functionalities that should be added to your theme
 */
function wsa_setup() {
	/**
	 * add_theme_support will be used to add some functionalities
	 * 
	 * @see  https://developer.wordpress.org/reference/functions/add_theme_support/
	 * @see  https://developer.wordpress.org/block-editor/developers/themes/theme-support/
	 */
    add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'wp-block-styles' ); /** carica stili dei blocchi di default */
	add_theme_support( 'align-wide' ); /* allineamento a dx di Gutemberg */
	add_theme_support( 'responsive-embeds' ); /** video responsive */
}
add_action( 'after_setup_theme', 'wsa_setup' );


function storie_files(){
	//wp_enqueue_style('wpstorie_main_styles', get_stylesheet_uri());

	wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css');

	//wp_enqueue_style( 'storie-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'), 'all' );
	// enqueue our style.css file
	wp_enqueue_style( 'wsa-reset', get_stylesheet_directory_uri().'/style.css', array(), WSA_VERSION, 'all' );
    wp_enqueue_style( 'wsa-style', WSA_INCLUDES.'/css/style.css', array( 'wsa-reset' ), WSA_VERSION, 'all' );
	
}
add_action('wp_enqueue_scripts', 'storie_files');

// add title in uri
function storie_features(){
	add_theme_support('title-tag');
}
add_action('after_setup_theme','storie_features');











