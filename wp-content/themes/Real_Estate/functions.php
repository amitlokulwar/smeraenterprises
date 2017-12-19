<?php 
require_once(TEMPLATEPATH . '/includes/functions/sidebars.php'); 

 
//Add support for WordPress 3.0's custom menus
add_action( 'init', 'register_my_menu' );
 
add_theme_support( 'post-thumbnails' );

//Register area for custom menu
function register_my_menu() {
    register_nav_menu( 'primary-menu', __( 'Primary Menu' ) );
    register_nav_menu( 'footer-menu', __( 'Footer Menu' ) );
}

// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'THEMENAME' ),
) );


add_action( 'wp_enqueue_scripts', 'default_enqueue_style' );
add_action( 'wp_enqueue_scripts', 'default_enqueue_script' );

//Enable multisite feature (WordPress 3.0)
define('WP_ALLOW_MULTISITE', true);

/*Custom post types*/
function cptui_register_my_cpts() {

	/**
	 * Post Type: Slider.
	 */

	$labels = array(
		"name" => __( "Slider", "" ),
		"singular_name" => __( "Slider", "" ),
		"menu_name" => __( "Slider", "" ),
		"all_items" => __( "All Slides", "" ),
	);

	$args = array(
		"label" => __( "Slider", "" ),
		"labels" => $labels,
		"description" => "All sliders",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "slider", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail", "custom-fields" ),
	);

	register_post_type( "slider", $args );

	/**
	 * Post Type: Trainers.
	 */

	$labels = array(
		"name" => __( "Trainers", "" ),
		"singular_name" => __( "Trainer", "" ),
		"menu_name" => __( "Trainers", "" ),
		"all_items" => __( "All Trainers", "" ),
	);

	$args = array(
		"label" => __( "Trainers", "" ),
		"labels" => $labels,
		"description" => "Our Trainers",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "our_trainers", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "our_trainers", $args );

	/**
	 * Post Type: Testimonials.
	 */

	$labels = array(
		"name" => __( "Testimonials", "" ),
		"singular_name" => __( "Testimonial", "" ),
		"menu_name" => __( "Testimonials", "" ),
		"all_items" => __( "All Testimonials", "" ),
	);

	$args = array(
		"label" => __( "Testimonials", "" ),
		"labels" => $labels,
		"description" => "All Testimonials",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "testimonials", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail", "excerpt", "custom-fields" ),
	);

	register_post_type( "testimonials", $args );

	/**
	 * Post Type: Classes.
	 */

	$labels = array(
		"name" => __( "Classes", "" ),
		"singular_name" => __( "Class", "" ),
		"menu_name" => __( "Our Class", "" ),
		"all_items" => __( "All Classes", "" ),
	);

	$args = array(
		"label" => __( "Classes", "" ),
		"labels" => $labels,
		"description" => "Our Class",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "classes", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail", "excerpt" ),
	);

	register_post_type( "classes", $args );

	/**
	 * Post Type: Gallery.
	 */

	$labels = array(
		"name" => __( "Gallery", "" ),
		"singular_name" => __( "Gallery", "" ),
		"menu_name" => __( "Gallery", "" ),
		"all_items" => __( "All Galleries", "" ),
	);

	$args = array(
		"label" => __( "Gallery", "" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "our_gallery", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "thumbnail", "custom-fields" ),
		"taxonomies" => array( "category" ),
	);

	register_post_type( "our_gallery", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );


 
