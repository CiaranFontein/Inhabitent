<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	if(is_singular('page')){
		global $post;
		$classes[] = 'page-' . $post->post_name;
	}

	return $classes;
}

function set_login_logo(){
	echo '<style type="text/css">                                                                   
	#login h1 a { background-image:url('.get_stylesheet_directory_uri().'/images/inhabitent-logo-text-dark.svg) !important; 
	height: 53px !important; width: 300px !important; background-size: cover; }                            
</style>';
}

add_action('login_head', 'set_login_logo');

function set_login_logo_destination(){
	return get_bloginfo('url');
}
add_filter('login_headerurl', 'set_login_logo_destination');

function inhabitent_debug($var){
	echo '<pre>';
	var_dump($var);
	echo '</pre>';
}



add_filter( 'body_class', 'red_starter_body_classes' );

function inhabitent_remove_submenus() {
    remove_submenu_page( 'themes.php', 'theme-editor.php' );
    remove_submenu_page( 'plugins.php', 'plugin-editor.php' );
}
add_action( 'admin_menu', 'inhabitent_remove_submenus', 110 );