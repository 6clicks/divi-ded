<?php

/**
 * Enqueue scripts and styles.
 */
function snow_scripts() {
	// register main stylesheet
	wp_enqueue_style( 'snow-style', get_stylesheet_directory_uri(). '/css/style.css', array(), '', 'all' );
  wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );

	// register Animate style sheet
    wp_enqueue_style( 'animate', get_stylesheet_directory_uri(). '/css/aos.css', array(), '', 'all' );


    // register Animation JS
	wp_enqueue_script( 'aos', get_stylesheet_directory_uri() . '/js/aos.js', array(), '20151215', true );
	// register CUSTOM SCRIPT
	wp_enqueue_script( 'snow-scripts', get_stylesheet_directory_uri() . '/js/my_scripts.js', array(), '20151215', true );

}
add_action( 'wp_enqueue_scripts', 'snow_scripts' );

// CUSTOMIZE THE WORDPRESS ADMIN (off by default)
//require_once( 'inc/admin.php' );

/**
 * Register widget area.*/

/* function snow_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'snow' ),
		'id'            => 'sidebar_1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
		}
add_action( 'widgets_init', 'snow_widgets_init' );

*/

/* Appel d'une page de maintenance personnalisée en cas de mise à jour */
if ( ! function_exists( 'custo_maintenance_mode' ) ) :
    function custo_maintenance_mode() {
    if ( file_exists( ABSPATH . '.maintenance' ) ) {
        include_once( get_stylesheet_directory() . '/maintenance.php' );
        die();
    }
}
add_action( 'wp', 'custo_maintenance_mode' );
endif;
