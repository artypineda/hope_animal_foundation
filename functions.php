<?php
/**
 * hope_animal_foundation functions and definitions
 * @package hope_animal_foundation
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'hope_animal_foundation_setup' ) ) :
	function hope_animal_foundation_setup() {
		load_theme_textdomain( 'hope_animal_foundation', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );

		// Register Navs: wp_nav_menu()
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'hope_animal_foundation' ),
				'menu-1m' => esc_html__( 'Primary - Mobile', 'hope_animal_foundation' ),
				'menu-2' => esc_html__( 'Above The Header', 'hope_animal_foundation' ),
				'menu-3' => esc_html__( 'Services Nav Menu - Footer', 'hope_animal_foundation' ),
				'menu-4' => esc_html__( 'Support Us Nav Menu - Footer', 'hope_animal_foundation' ),
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
				'hope_animal_foundation_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for core custom logo.
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'hope_animal_foundation_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 * Priority 0 to make it available to lower priority callbacks.
 * @global int $content_width
 */
function hope_animal_foundation_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'hope_animal_foundation_content_width', 640 );
}
add_action( 'after_setup_theme', 'hope_animal_foundation_content_width', 0 );

/* Much better way to Register multiple widgets areas */
function hope_animal_foundation_widgets_init($name, $id, $description,$beforeWidget, $afterWidget, $beforeTitle, $afterTitle){
    register_sidebar( array(
        'name' => esc_html__( $name, 'hope_animal_foundation' ),
        'id' => $id,
        'description' => esc_html__( $description, 'hope_animal_foundation' ),
        'before_widget' => $beforeWidget,
        'after_widget' => $afterWidget,
        'before_title' => $beforeTitle,
        'after_title' => $afterTitle,
    ));
}
 
function multiple_widget_init(){
    //hope_animal_foundation_widgets_init('Hope AF Sidebar', 'hopeaf-sd-1', 'Add Widgets Here', '<section id="%1$s" class="widget %2$s">', '</section>', '<h2 class="widget-title">', '</h2>');
    hope_animal_foundation_widgets_init('Contact Us', 'footer-details', 'Contact Details Goes Here', '<section id="%1$s" class="widget %2$s">', '</section>', '<h2 class="widget-title">', '</h2>');
}
add_action('widgets_init', 'multiple_widget_init');


// Enqueue scripts and styles.
function hope_animal_foundation_scripts() {

	wp_enqueue_style( 'hope_animal_foundation-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'hope_animal_foundation-variables', get_template_directory_uri() . '/styles/variables.css', array(), _S_VERSION );
	wp_enqueue_style( 'hope_animal_foundation-main', get_template_directory_uri() . '/styles/main.css', array(), _S_VERSION );
	wp_enqueue_style( 'hope_animal_foundation-mobile', get_template_directory_uri() . '/styles/mobile.css', array(), _S_VERSION );
	wp_enqueue_style( 'hope_animal_foundation-components', get_template_directory_uri() . '/styles/components.css', array(), _S_VERSION );

	wp_style_add_data( 'hope_animal_foundation-style', 'rtl', 'replace' );
	wp_enqueue_script( 'hope_animal_foundation-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'hope_animal_foundation-custom-js', get_template_directory_uri() . '/js/custom.js', array(), _S_VERSION, true );
    
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'hope_animal_foundation_scripts' );

require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/customizer.php';

if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// Allow SVGS
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {

	global $wp_version;
	if ( $wp_version !== '4.7.1' ) {
	   return $data;
	}
  
	$filetype = wp_check_filetype( $filename, $mimes );
  
	return [
		'ext'             => $filetype['ext'],
		'type'            => $filetype['type'],
		'proper_filename' => $data['proper_filename']
	];
}, 10, 4 );

function cc_mime_types( $mimes ){
$mimes['svg'] = 'image/svg+xml';
return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );
  
function fix_svg() {
echo '<style type="text/css">
		.attachment-266x266, .thumbnail img {
			width: 100% !important;
			height: auto !important;
		}
		</style>';
}
add_action( 'admin_head', 'fix_svg' );


// Type Kit
function typekit_enqueue_scripts() {
	wp_enqueue_script( 'mytheme-typekit', 'https://use.typekit.net/eon7gyh.js', array(), '1.0' );
	wp_add_inline_script( 'mytheme-typekit', 'try{Typekit.load({ async: true });}catch(e){}' );
 }
 add_action( 'wp_enqueue_scripts', 'typekit_enqueue_scripts' );

 
// Kill ACF Pro Admin Panel for Everyone
add_filter('acf/settings/show_admin', '__return_false');