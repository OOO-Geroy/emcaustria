<?php
/**
 * GeneratePress.
 *
 * Please do not make any edits to this file. All edits should be done in a child theme.
 *
 * @package GeneratePress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Set our theme version.
define( 'GENERATE_VERSION', '2.4.2' );

require_once(__DIR__ . '/K8Init.php');

if ( ! function_exists( 'generate_setup' ) ) {
	add_action( 'after_setup_theme', 'generate_setup' );
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since 0.1
	 */
	function generate_setup() {
		// Make theme available for translation.
		load_theme_textdomain( 'generatepress' );

		// Add theme support for various features.
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link', 'status' ) );
		add_theme_support( 'woocommerce' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
		add_theme_support( 'customize-selective-refresh-widgets' );
		add_theme_support( 'align-wide' );
		add_theme_support( 'responsive-embeds' );

		add_theme_support( 'custom-logo', array(
			'height' => 70,
			'width' => 350,
			'flex-height' => true,
			'flex-width' => true,
		) );

		// Register primary menu.
		register_nav_menus( array(
			'primary' => __( 'Primary Menu', 'generatepress' ),
		) );

		/**
		 * Set the content width to something large
		 * We set a more accurate width in generate_smart_content_width()
		 */
		global $content_width;
		if ( ! isset( $content_width ) ) {
			$content_width = 1200; /* pixels */
		}

		// This theme styles the visual editor to resemble the theme style.
		add_editor_style( 'css/admin/editor-style.css' );
	}
}

/**
 * Get all necessary theme files
 */
$theme_dir = get_template_directory();

require $theme_dir . '/inc/theme-functions.php';
require $theme_dir . '/inc/defaults.php';
require $theme_dir . '/inc/class-css.php';
require $theme_dir . '/inc/css-output.php';
require $theme_dir . '/inc/general.php';
require $theme_dir . '/inc/customizer.php';
require $theme_dir . '/inc/markup.php';
require $theme_dir . '/inc/typography.php';
require $theme_dir . '/inc/plugin-compat.php';
require $theme_dir . '/inc/block-editor.php';
require $theme_dir . '/inc/migrate.php';
require $theme_dir . '/inc/deprecated.php';

if ( is_admin() ) {
	require $theme_dir . '/inc/meta-box.php';
	require $theme_dir . '/inc/dashboard.php';
}

/**
 * Load our theme structure
 */
require $theme_dir . '/inc/structure/archives.php';
require $theme_dir . '/inc/structure/comments.php';
require $theme_dir . '/inc/structure/featured-images.php';
require $theme_dir . '/inc/structure/footer.php';
require $theme_dir . '/inc/structure/header.php';
require $theme_dir . '/inc/structure/navigation.php';
require $theme_dir . '/inc/structure/post-meta.php';
require $theme_dir . '/inc/structure/sidebars.php';


add_shortcode( 'EMC_SHORT_YT', 'yt');

function yt( $atts ) {
		$a = shortcode_atts( array(
			'id' => 'dkPLIw9aZwY',
		), $atts );
		$img_name = 'maxresdefault.jpg';
		if( !url_exists( "http://img.youtube.com/vi/".$a['id']."/maxresdefault.jpg" ) )
			$img_name = 'hqdefault.jpg';
		$str = "<div class='k8_yt-wrr'>
							<a href='%s' rel='nofollow' class='k8_yt-link'>
								<span class='btn-blu pls'><i class='fa fa-play-circle' aria-hidden='true'></i></span>
							</a>
							<img class='of-cv' src='https://img.youtube.com/vi/%s/%s'/>
						</div>";
		return sprintf(
			$str,
			$a['id'],
			$a['id'],
			$img_name
		);
	}

	function url_exists($url){
		$headers = get_headers($url);
		return stripos($headers[0],"200 OK")?true:false;
	}
add_filter( 'tribe_get_event_website_link', 'add_no_follow_event_website', 10, 2);

function add_no_follow_event_website( $html ) {
	//Strip out HTML
	$url = strip_tags( $html );

	//Add nofollow attribute
	return sprintf( '<a href="%1$s" rel="nofollow" target="_blank">%1$s</a>', $url );
}

//Fix for slider shortcode from shortcodes ultimate
add_action('setup_theme', function(){
	wp_register_script( 'generate-fontawesome', $theme_dir . "/js/fontawesome.js", array(), GENERATE_VERSION, true );
	wp_enqueue_script( 'emc-custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), GENERATE_VERSION . 1, true );
	wp_register_script( 'swiper', plugins_url( 'vendor/swiper/swiper.js', SU_PLUGIN_FILE ), array( 'jquery' ), '2.6.1', true );
});

add_action( 'wp_enqueue_scripts', 'e_mc_load_scripts' );
function e_mc_load_scripts(){
	wp_enqueue_script( 'emc-customm', get_template_directory_uri() . '/js/custom.js', array(), false, true );
}



add_filter( 'auto_update_plugin', '__return_false' );
add_filter( 'auto_update_theme', '__return_false' );

function emc_register_favicon_meta() {
  ?>
  	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#8ebe20">
    <link rel="manifest" href="/site.webmanifest">
	<meta name="msapplication-TileColor" content="#8ebe20">
	<meta name="theme-color" content="#8ebe20">
  <?php
}
add_action( 'wp_head', 'emc_register_favicon_meta' );