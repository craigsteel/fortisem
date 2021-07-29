<?php
/**
 * Enqueue scripts and styles.
 *
 * @package fortisem
 */

function fortisem_scripts() {
	wp_enqueue_style( 'fortisem-style', get_stylesheet_uri() );

	wp_enqueue_style( 'fortisem-mainstyle', get_template_directory_uri() . '/dist/css/main.css' );
	
	wp_enqueue_script('jquery');

	wp_enqueue_script( 'fortisem-wp-custom', get_template_directory_uri() . '/dist/js/custom.min.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'fortisem_scripts' );