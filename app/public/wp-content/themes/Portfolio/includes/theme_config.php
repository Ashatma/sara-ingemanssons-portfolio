<?php

function custom_theme_features()  {

	// Add theme support for Post Formats
	add_theme_support( 'post-formats', array('gallery'  ) );

	// Add theme support for Featured Images
	add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'custom_theme_features' );

?>