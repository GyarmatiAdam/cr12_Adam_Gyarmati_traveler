<?php
/**
 * add theme support to dashboard, like header image
 */
// add_theme_support( 'custom-header' );

/**
 * add arguments to the theme support
 */
$arguments = array(

	'default-image' => get_template_directory_uri() . '/images/traveler.jpg',
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

//dropdown categories
 $args = array(
	'show_option_all'    => '',
	'show_option_none'   => '',
	'option_none_value'  => '-1',
	'orderby'            => 'ID',
	'order'              => 'ASC',
	'show_count'         => 0,
	'hide_empty'         => 1,
	'child_of'           => 0,
	'exclude'            => '',
	'include'            => '',
	'echo'               => 1,
	'selected'           => 0,
	'hierarchical'       => 0,
	'name'               => 'cat',
	'id'                 => '',
	'class'              => 'postform',
	'depth'              => 0,
	'tab_index'          => 0,
	'taxonomy'           => 'category',
	'hide_if_empty'      => false,
	'value_field'	     => 'term_id',
); 

//widgets
/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

?>