<?php

function load_stylesheets(){
	wp_register_style('font', get_template_directory_uri().'/fonts/font.css', [], 1, 'all');
 	wp_enqueue_style('font');


	wp_register_style('main', get_template_directory_uri().'/styles/style.css', [], 1, 'all');
	wp_enqueue_style('main');
};

add_action('wp_enqueue_scripts', 'load_stylesheets');
?>


