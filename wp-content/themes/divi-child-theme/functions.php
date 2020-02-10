<?php
/**
 * Custom Functions file for current theme.
 *
 */

// IMPORT PARENT STYLE
function child_theme_enqueue_styles() {
    $parent_style = 'divi-style'; // This is 'divi-style' for the Divi theme.
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'child_theme_enqueue_styles' );


function aag_custom_footer() {
	//echo do_shortcode('[et_pb_section global_module="170"][/et_pb_section]');
	
	$curlang = apply_filters( 'wpml_current_language', NULL );
	if($curlang=='fr') {
		echo do_shortcode('[et_pb_section global_module="170"][/et_pb_section]');
	}
	elseif($curlang=='en') {
		echo do_shortcode('[et_pb_section global_module="737"][/et_pb_section]');
	}
	
}
add_action('et_after_main_content', 'aag_custom_footer');


function et_get_footer_credits() {
    $footer_credits = __('&copy; 2019 Winlight. All rights reserved.','winlight-aag');
    $credits_format = '<%2$s id="footer-info">%1$s</%2$s>';
    return et_get_safe_localization( sprintf( $credits_format, $footer_credits, 'div' ) );
}

/*
function footag_func( $atts,$content='' ) {
	//$lang = $atts['lang']
	$id_en = 
	return "foo = {}";
}
add_shortcode( 'footag', 'footag_func' );
*/

?>
