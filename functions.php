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
		  
    if (is_front_page() || is_page('newsletter')){
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





function shape_register_post_types() {
	// La déclaration de nos Custom Post Types et Taxonomies ira ici
    // CPT prestations
    $labels = array(
        'name' => 'services',
        'singular_name' => 'service',
        'add_new_item' => 'Ajouter un service',
        'edit_item' => 'Modifier le services',
        'menu_name' => 'Services'
    );

	$args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor','thumbnail' ),
        'menu_position' => 5, 
        'menu_icon'   => 'dashicons-money-alt',
	);

	register_post_type( 'services', $args );


    }
add_action( 'init', 'shape_register_post_types' );












function shape_register_post_presentation() {
	// La déclaration de nos Custom Post Types et Taxonomies ira ici
    // CPT prestations
    $labels = array(
        'name' => 'presentation',
        'singular_name' => 'presentation',
        'add_new_item' => 'Ajouter la presentation',
        'edit_item' => 'Modifier la presentation',
        'menu_name' => 'presentation'
    );

	$args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor','thumbnail' ),
        'menu_position' => 5, 
        'menu_icon'   => 'dashicons-money-alt',
	);

	register_post_type( 'presentation', $args );


    }
add_action( 'init', 'shape_register_post_presentation' );












function shape_register_post_confiance() {
	// La déclaration de nos Custom Post Types et Taxonomies ira ici
    // CPT prestations
    $labels = array(
        'name' => 'confiance',
        'singular_name' => 'confiance',
        'add_new_item' => 'Ajouter la confiance',
        'edit_item' => 'Modifier la confiance',
        'menu_name' => 'confiance'
    );

	$args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor','thumbnail' ),
        'menu_position' => 5, 
        'menu_icon'   => 'dashicons-money-alt',
	);

	register_post_type( 'confiance', $args );


    }
add_action( 'init', 'shape_register_post_confiance' );


function shape_register_post_contact() {
	// La déclaration de nos Custom Post Types et Taxonomies ira ici
    // CPT prestations
    $labels = array(
        'name' => 'contact',
        'singular_name' => 'contact',
        'add_new_item' => 'Ajouter le contact',
        'edit_item' => 'Modifier le contact',
        'menu_name' => 'contact'
    );

	$args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor' ),
        'menu_position' => 5, 
        'menu_icon'   => 'dashicons-money-alt',
	);

	register_post_type( 'contact', $args );


    }
add_action( 'init', 'shape_register_post_contact' );

add_theme_support( 'post-thumbnails' );