<?php

// ajout de fonctions au thème
 add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );

//ajout de style et des scripts
function register_assets(){

	wp_enqueue_script(
		'wordpress',
		'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js'
		
	);
	
	wp_enqueue_script(
		'custom-scripts',
		get_template_directory_uri().'/scripts/main.js',
		 array(),
		'1.0');
		

    wp_enqueue_style(
		'shape-theme',
		get_stylesheet_uri(),
		 array(),
		  '1.0');
    
	wp_enqueue_style(
		'wordpress-css',
		'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css'
	);
		  
    if (is_front_page()){
		wp_enqueue_style(
		'shape-theme-custom-css',
		get_template_directory_uri().'/style.css',
		 array(),
		  '1.0');
		wp_enqueue_style(
			'content-css',
			get_template_directory_uri().'/assets/styles/content.css',
			array(),
			'1.0'
		);
		wp_enqueue_style(
			'includes-css',
			get_template_directory_uri().'/assets/styles/includes.css',
			array(),
			'1.0'
		);
		wp_enqueue_style(
			'equipe-css',
			get_template_directory_uri().'/assets/styles/equipe.css',
			array(),
			'1.0'
		);
		wp_enqueue_style(
			'contact-css',
			get_template_directory_uri().'/assets/styles/contact.css',
			array(),
			'1.0'
		);
}}
add_action('wp_enqueue_scripts', 'register_assets');