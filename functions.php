<?php
/**
 * add theme support to dashboard, like header image
 */
// add_theme_support( 'custom-header' );

/**
 * add arguments to the theme support
 */
$arguments = array(
	'flex-width'    => true,
	'width'         => 980,
	'flex-height'    => true,
	'height'        => 200,
	'default-image' => get_template_directory_uri() . '/images/fakenews.png',
);
add_theme_support( 'custom-header', $arguments );


/**
 * add menu function to dashboard
 */
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );
?>