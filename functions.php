<?php 

function wpbootstrap_scripts_with_jquery() {
	// Register the script like this for a theme:\
	wp_register_script('main', get_template_directory_uri() . '/js/js.js', array('jquery'));	
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'main' );	
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );

// Add styles
  function switchreclamebureau_adding_styles() {
    // Register scripts

    wp_register_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');

    
    // Enqueue scripts

    wp_enqueue_style('font-awesome');

  }

  add_action('wp_enqueue_scripts', 'switchreclamebureau_adding_styles' );

if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));

if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
}

?>