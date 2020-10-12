<?php
/**
 * valuexvail functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package valuexvail
 */

/**
 * Table of Contents:
 * Theme Support
 * Register Sidebars(Register widget area.)
 * Register Widget Subscribe Form.
 * Register a custom post type.
 * Register a custom Taxonomy.
 * Register Styles
 * Register Scripts
 * Required Files
 */

if ( ! function_exists( 'valuexvail_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function valuexvail_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on valuexvail, use a find and replace
		 * to change 'valuexvail' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'valuexvail', get_template_directory() . '/languages' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 360, 270 );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'main-menu' => esc_html__( 'Main', 'valuexvail' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'valuexvail_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 53,
				'width'       => 166,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'valuexvail_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function valuexvail_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'valuexvail' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'valuexvail' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar( 
		array(
		'name'          => esc_html__( 'About Page Sidebar', 'valuexvail' ),
		'id'            => 'about-page-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'valuexvail' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
		) 
	);
}
add_action( 'widgets_init', 'valuexvail_widgets_init' );

/**
 * Register Widget.
 */
function valuexvail_custom_form_widget() {
    register_widget( 'Valuexvail_Custom_Form' );
}

add_action( 'widgets_init', 'valuexvail_custom_form_widget' );

/**
 * Register a custom post type.
 *
 * @see get_post_type_labels() for label keys.
 */
add_action( 'init', 'register_post_types' );
function register_post_types(){

	//Register a custom post type called "hotels".
	register_post_type( 'hotels', [
		'label'  => null,
		'labels' => [
			'name'               => 'Hotels',
			'singular_name'      => 'Hotel', 
			'add_new'            => 'Add Hotel', 
			'add_new_item'       => 'Add New Hotel', 
			'edit_item'          => 'Edit Hotel', 
			'new_item'           => 'New Hotel', 
			'view_item'          => 'Watch the Hotel', 
			'search_items'       => 'Search for Hotel', 
			'not_found'          => 'Hotel not found', 
			'not_found_in_trash' => 'Not found in cart', 
			'parent_item_colon'  => '', 
			'menu_name'          => 'Hotels', 
		],
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, 
		'exclude_from_search' => true, 
		'show_ui'             => true, 
		'show_in_nav_menus'   => true, 
		'show_in_menu'        => true, 
		'show_in_admin_bar'   => null, 
		'show_in_rest'        => true, 
		'rest_base'           => null, 
		'menu_position'       => 4,
		'menu_icon'          => 'dashicons-admin-home',
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'thumbnail','excerpt', 'post-formats', ],
		'taxonomies'          => [],
		
		'rewrite'             => true,
		'query_var'           => true,
	] );

	//Register a custom post type called "presentations".
	register_post_type( 'presentations', [
		'label'  => null,
		'labels' => [
			'name'               => 'Presentations',
			'singular_name'      => 'Presentation', 
			'add_new'            => 'Add Presentation', 
			'add_new_item'       => 'Add New Presentation', 
			'edit_item'          => 'Edit Presentation', 
			'new_item'           => 'New Presentation', 
			'view_item'          => 'Watch the Presentation', 
			'search_items'       => 'Search for Presentation', 
			'not_found'          => 'Presentation not found', 
			'not_found_in_trash' => 'Not found in cart', 
			'parent_item_colon'  => '', 
			'menu_name'          => 'Presentations', 
		],
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, 
		'exclude_from_search' => true, 
		'show_ui'             => true, 
		'show_in_nav_menus'   => true, 
		'show_in_menu'        => true, 
		'show_in_admin_bar'   => null, 
		'show_in_rest'        => true, 
		'rest_base'           => null, 
		'menu_position'       => 5,
		'menu_icon'          => 'dashicons-format-image',
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'thumbnail','excerpt', 'post-formats', ],
		'taxonomies'          => ['years'],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );
}

/**
 * Register a custom Taxonomy.
 */
add_action( 'init', 'create_taxonomy' );
function create_taxonomy(){

	register_taxonomy( 'taxonomy', [ 'presentations' ], [ 
		'label'                 => '', // $labels->name
		'labels'                => [
			'name'              => 'Years',
			'singular_name'     => 'Years',
			'search_items'      => 'Search Years',
			'all_items'         => 'All Years',
			'view_item '        => 'View Year',
			'parent_item'       => 'Parent Year',
			'parent_item_colon' => 'Parent Year:',
			'edit_item'         => 'Edit Year',
			'update_item'       => 'Update Year',
			'add_new_item'      => 'Add New Year',
			'new_item_name'     => 'New Year Name',
			'menu_name'         => 'Years',
		],
		'description'           => '', 
		'public'                => true,
		'publicly_queryable'    => true,
		'hierarchical'          => false,

		'rewrite'               => true,
	] );
}

/**
 * Enqueue Scripts and Styles.
 *
 * Register and Enqueue Styles.
 */
function valuexvail_styles() {
	
	wp_enqueue_style( 'valuexvail-style', get_stylesheet_uri() );

	/*Google Fonts*/
	wp_enqueue_style( 'montserrat', 'https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700', array( 'valuexvail-style' ) );

	/*Bootstrap CSS File*/
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array( 'valuexvail-style' ) );

	//Font-Awesome CSS File
	wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css', array( 'valuexvail-style' ) );

	/*Fancybox CSS Files*/
	wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/assets/css/fancybox.css', array( 'valuexvail-style' ) );

	/*Main Stylesheet File*/
	wp_enqueue_style( 'valuexvail-main-styles', get_template_directory_uri() . '/assets/css/styles.css', array( 'valuexvail-style' ) );

	/*Responsive Stylesheet File*/
	wp_enqueue_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css', array( 'valuexvail-style' ) );
}

add_action( 'wp_enqueue_scripts', 'valuexvail_styles' );

/**
 * Register and Enqueue Scripts.
 */
function valuexvail_scripts() {

	global $valuexvail_option;
 	
   /*jQuery*/
   wp_deregister_script( 'jquery' );
   wp_register_script( 'jquery', includes_url( '/js/jquery/jquery.js' ), false, null, true );
   wp_enqueue_script( 'jquery' );
	 
   /*Bootstrap JS*/
   wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ), '', true );

   /*Hoverdir*/
   wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.min.js', array( 'jquery' ), '', true );

   /*Font Awesome JS*/
   wp_enqueue_script( 'jquery.hoverex', 'https://use.fontawesome.com/c28784b6b4.js', array( 'jquery' ), '', true );

   /*Fancybox JS*/
   wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/assets/js/jquery.fancybox.js', array( 'jquery' ), '', true );

   	// <script async defer src ="https://maps.googleapis.com/maps/api/js?key=AIzaSyCDFvV0pZu4Q2ugFZcoORXk_T7a7To-TXw&callback=initMap">
	// </script>
   
   /*Map JS*/
   if (is_page_template('page-contact-us.php')) {

	/*Google Maps APIs*/
	wp_enqueue_script( 'map-api-key', 'https://maps.googleapis.com/maps/api/js?key=' . $valuexvail_option['google-maps-api-key']);

	wp_enqueue_script( 'map', get_template_directory_uri() . '/assets/js/map.js', array( 'jquery' ), '', true );
	}

	// Localize the script with new data
	$google_maps_options = array(
    	'lat'	 => $valuexvail_option['google-maps-lat'],
    	'lng'    => $valuexvail_option['google-maps-lng'],
		'zoom'   => $valuexvail_option['google-maps-zoom'],
	);
	wp_localize_script( 'map', 'valuexvail_map', $google_maps_options );


   /*Template JS*/
   wp_enqueue_script( 'template', get_template_directory_uri() . '/assets/js/template.js', array( 'jquery' ), '', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
	   
add_action( 'wp_enqueue_scripts', 'valuexvail_scripts' );

/**
 * REQUIRED FILES
 * Include required files.
 */

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/*Register TGM Plugin Activation.*/
require get_template_directory() . '/inc/init-tgm-plugin-activation.php';

/**
 * Theme Options.
 * Customizer additions.
 */
require get_template_directory() . '/inc/theme-options.php';

/*ACF*/
require get_template_directory() . '/inc/acf-options.php';

/*Classes*/
require get_template_directory() . '/inc/widgets/class-valuexvail-custom-form-widget.php';


