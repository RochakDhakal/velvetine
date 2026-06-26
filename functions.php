<?php
if ( ! defined( 'VELVETINE_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'VELVETINE_VERSION', wp_get_theme()->get( 'Version' ) );
}
define( 'VELVETINE_DEBUG', defined( 'WP_DEBUG' ) && WP_DEBUG === true );
define( 'VELVETINE_DIR', trailingslashit( get_template_directory() ) );
define( 'VELVETINE_URL', trailingslashit( get_template_directory_uri() ) );

if ( ! function_exists( 'velvetine_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since velvetine 1.0.0
	 *
	 * @return void
	 */
	function velvetine_support() {
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );
		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'post-thumbnails' );
		// Enqueue editor styles.
		add_editor_style( 'style.css' );
		// Removing default patterns.
		remove_theme_support( 'core-block-patterns' );
	}

endif;
add_action( 'after_setup_theme', 'velvetine_support' );

/*
----------------------------------------------------------------------------------
Enqueue Styles
-----------------------------------------------------------------------------------*/
if ( ! function_exists( 'velvetine_styles' ) ) :
	function velvetine_styles() {
		// registering style for theme
		wp_enqueue_style( 'velvetine-style', get_stylesheet_uri(), array(), VELVETINE_VERSION );
		if ( is_rtl() ) {
			wp_enqueue_style( 'velvetine-rtl-css', get_template_directory_uri() . '/assets/css/rtl.css', 'rtl_css', VELVETINE_VERSION );
		}
	}
endif;

add_action( 'wp_enqueue_scripts', 'velvetine_styles' );

/**
 * Enqueue scripts for admin area
 */
function velvetine_admin_style() {
	$hello_notice_current_screen = get_current_screen();
	if ( ! empty( $_GET['page'] ) && 'about-velvetine' === $_GET['page'] || $hello_notice_current_screen->id === 'themes' || $hello_notice_current_screen->id === 'dashboard' || $hello_notice_current_screen->id === 'plugins' ) {
		wp_enqueue_style( 'velvetine-admin-style', get_template_directory_uri() . '/inc/admin/css/admin-style.css', array(), VELVETINE_VERSION, 'all' );
		wp_enqueue_script( 'velvetine-admin-scripts', get_template_directory_uri() . '/inc/admin/js/velvetine-admin-scripts.js', array( 'jquery' ), VELVETINE_VERSION, true );

		wp_localize_script(
			'velvetine-admin-scripts',
			'velvetine_admin_localize',
			array(
				'ajax_url'     => admin_url( 'admin-ajax.php' ),
				'nonce'        => wp_create_nonce( 'velvetine_admin_nonce' ),
				'welcomeNonce' => wp_create_nonce( 'velvetine_welcome_nonce' ),
				'redirect_url' => admin_url( 'themes.php?page=about-velvetine' ),
				'scrollURL'    => admin_url( 'plugins.php?cozy-addons-scroll=true' ),
				'demoURL'      => admin_url( 'themes.php?page=advanced-import' ),
			)
		);
	}
}
add_action( 'admin_enqueue_scripts', 'velvetine_admin_style' );

/**
 * Enqueue assets scripts for both backend and frontend
 */
add_action(
	'enqueue_block_assets',
	function () {
		wp_enqueue_style( 'velvetine-blocks-style', get_template_directory_uri() . '/assets/css/blocks.css', array(), VELVETINE_VERSION );
	}
);


/**
 * Load core file.
 */
require_once get_template_directory() . '/inc/core/init.php';

/**
 * Load welcome page file.
 */
require_once get_template_directory() . '/inc/admin/welcome-notice.php';

function velvetine_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'velvetine_add_woocommerce_support' );
