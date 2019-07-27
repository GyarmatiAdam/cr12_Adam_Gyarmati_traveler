<?php
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

//register stylesheet and script
function wpdocs_wp_traveler_scripts() {
    wp_enqueue_style( 'style.css', get_stylesheet_uri() );
    wp_enqueue_script( 'script.js', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'wpdocs_wp_traveler_scripts' );

//comment form
$fields =  array(
    'author' =>
        '<input name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .'" size="30" placeholder="'.__('Your name','text-domain').( $req ? ' (Required)' : '' ).'"/>',
    'email' =>
        '<input name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .'" size="30" placeholder="'.__('Your email','text-domain').( $req ? ' (Required)' : '' ).'"/>',
);
$args = array(
    'id_form'           => 'commentform',
    'class_form'        => 'comment-form',
    'id_submit'         => 'submit',
    'class_submit'      => 'submit',
    'name_submit'       => 'submit',
    'submit_button'     => '<input name="%1$s" type="submit" id="%2$s" class="%3$s" value="%4$s" />',
    'title_reply'       => '',
    'title_reply_to'    => __( 'Reply to %s','text-domain' ),
    'cancel_reply_link' => __( 'Cancel comment','text-domain' ),
    'label_submit'      => __( 'Post comment','text-domain' ),
    'format'            => 'xhtml',
    'comment_field'     =>  '<textarea id="comment" name="comment" placeholder="'.__('Comment text','text-domain').'" cols="45" rows="8" aria-required="true">' .'</textarea>',
    'logged_in_as'      => '<p class="logged-in-as">' .
                          sprintf(
                              __( 'Logged in as %1$s. <a href="%2$s" title="%3$s">%4$s</a>', 'text-domain'),
                              $user_identity,
                              wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) ),
                              __('Log out?','text-domain'),
                              __('Click to log out.','text-domain')
                          ) . '</p>',
    'comment_notes_before' => '<p class="comment-notes">' . __( 'Your email address will not be published.','text-domain' ) .'</p>',
    'fields'            => apply_filters( 'comment_form_default_fields', $fields ),
);

comment_form( $args );

?>