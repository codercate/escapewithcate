<?php

//Adding the CSS and JS files
function ewc_setup() {
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans|Quicksand&display=swap');
    wp_enqueue_style('fontawesome', 'https://kit.fontawesome.com/77e52d726d.js');
	wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
    wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime());
    wp_enqueue_script('main', get_theme_file_uri('/js/main.js'), NULL, microtime(), true);
	wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', array('jquery'), true);
    wp_enqueue_script('fontawesome', 'https://kit.fontawesome.com/77e52d726d.js');
}

add_action('wp_enqueue_scripts', 'ewc_setup');

//Adding Theme Support
function ewc_init() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5',
        array('comment-list', 'comment-form', 'search-form')
    );
}

add_action('after_setup_theme', 'ewc_init');








<?php

//Adding the CSS files
function ewc_enqueue_styles() {
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans|Quicksand&display=swap');
    wp_enqueue_style('fontawesome', 'https://kit.fontawesome.com/77e52d726d.js');
	wp_register_style(
        'bootstrap.min', 
        get_template_directory_uri() . '/css/bootstrap.min.css'
    );
    wp_enqueue_style( 'bootstrap.min' );
    wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime());
}

//Adding the JS files
function ewc_enqueue_scripts() {
    wp_enqueue_script('main', get_theme_file_uri('/js/main.js'), NULL, microtime(), true);
	wp_enqueue_script('jquery');
	wp_register_script(
        'jquery.bootstrap.min', 
        get_template_directory_uri() . '/js/bootstrap.min.js', 
        'jquery'
    );
    wp_enqueue_script('jquery.bootstrap.min');
	wp_register_script(
        'jquery.bootstrap.bundle.min', 
        get_template_directory_uri() . '/js/bootstrap.bundle.min.js', 
        'jquery'
    );
	wp_enqueue_script('jquery.bootstrap.bundle.min');
    wp_enqueue_script('fontawesome', 'https://kit.fontawesome.com/77e52d726d.js');
}

add_action('wp_enqueue_scripts', 'ewc_enqueue_styles');
add_action('wp_enqueue_scripts', 'ewc_enqueue_scripts');

//Adding Theme Support
function ewc_init() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5',
        array('comment-list', 'comment-form', 'search-form')
    );
}

add_action('after_setup_theme', 'ewc_init');