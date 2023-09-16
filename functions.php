<?php
/**
 * @package Standard
 */

function standard_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'standard' ),
			'menu-2' => esc_html__( 'Secondary', 'standard' ),
			'menu-left-logocenter' => esc_html__( 'Logo Center Menu Left', 'standard' ),
			'menu-right-logocenter' => esc_html__( 'Logo Center Menu Right', 'standard' ),
		)
	);
}
add_action( 'after_setup_theme', 'standard_setup' );


function standard_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'standard_content_width', 640 );
}
add_action( 'after_setup_theme', 'standard_content_width', 0 );



function standard_widgets_init() {
	register_sidebar(
		array('name'          => esc_html__( 'Logo Header', 'standard' ),
			'id'            => 'widget-1',)
	);
	register_sidebar(
		array('name'          => esc_html__( 'Button Default', 'standard' ),
			'id'            => 'widget-2',)
	); 
	register_sidebar(
		array('name'          => esc_html__( 'Contact Form', 'standard' ),
			'id'            => 'widget-3',)
	);
	
}
add_action( 'widgets_init', 'standard_widgets_init' );

function standard_scripts() {
	wp_enqueue_style( 'standard-style', get_stylesheet_uri() );
	wp_enqueue_style( 'standard-bootstrap-style', get_template_directory_uri() . '/src/css/bootstrap.min.css', array(), null );
	wp_enqueue_style( 'standard-main-style', get_template_directory_uri() . '/src/scss/style.css', array(), null );
	wp_enqueue_style( 'standard-swiper-style', get_template_directory_uri() . '/src/css/swiper.css', array(), null );

	wp_enqueue_script( 'standard-jquery-js', get_template_directory_uri() . '/src/js/jquery.js', array(), null, true );
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/src/js/bootstrap.min.js', array(), null, true );
	wp_enqueue_script( 'standard-swiper-js', get_template_directory_uri() . '/src/js/swiper.js', array(), null, true );
	wp_enqueue_script( 'standard-main-js', get_template_directory_uri() . '/src/js/main.js', array(), null, true );
}
add_action( 'wp_enqueue_scripts', 'standard_scripts' );


function custom_post_type(){
	$labels_frontpage = array(
	  'name' => 'So Funksioniert',
	);
	  register_post_type('so-funksioniert', array(
	  'labels' => $labels_frontpage,
	  'public' => true,
	  'has_archive' => true,
	  'publicly_queryable' => true,
	  'query_var' => true,
	  'rewrite' => true,
	  'capability_type' => 'post',
	  'hierarchical' => false,
	  'supports' => array(
	  'title',
	  'editor',
	  'excerpt',
	  'thumbnail',
	  'revisions',),
	  'menu_position' => 8,
	  'exclude_from_search' => false,
	  'menu_icon' => 'dashicons-admin-users',
	  ));
  }
add_action('init', 'custom_post_type');