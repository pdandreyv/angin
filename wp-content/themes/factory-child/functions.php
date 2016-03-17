<?php
/**
 * CommerceGurus Child theme functions
 */

// Dequeue parent css
function cg_dequeue_parent_css() {
	wp_dequeue_style( 'cg-commercegurus' ); 
	wp_dequeue_style( 'cg-responsive' ); 
}

add_action( 'wp_enqueue_scripts', 'cg_dequeue_parent_css', 100 );

// Reorder parent css
function cg_reorder_child_css() {
	wp_dequeue_style( 'cg-style' );
	wp_register_style( 'cg-child-styles', get_stylesheet_uri() );
	wp_enqueue_style( 'cg-commercegurus' );
	wp_enqueue_style( 'cg-responsive' );
    wp_enqueue_style( 'custom-fonts', get_stylesheet_directory_uri() . '/css/custom_fonts.css' );
	wp_enqueue_style( 'cg-child-styles' );

}

add_action( 'wp_enqueue_scripts', 'cg_reorder_child_css', 101 );

add_filter('loop_shop_per_page', create_function('$cols', 'return 16;'));
add_filter( 'loop_shop_per_page', function ( $cols ) {
    // $cols contains the current number of products per page based on the value stored on Options -> Reading
    // Return the number of products you wanna show per page.
    return 16;
}, 90 );
?>