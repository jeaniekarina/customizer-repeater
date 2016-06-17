<?php

require get_template_directory() . '/customizer-repeater/inc/customizer.php';

function customizer_repeater_admin_styles() {
	wp_enqueue_style( 'customizer_repeater_admin_stylesheet', get_template_directory_uri().'/customizer-repeater/css/admin-style.css','1.0.0' );
}
add_action( 'admin_enqueue_scripts', 'customizer_repeater_admin_styles', 10 );

function customizer_repeater_registers() {
	wp_enqueue_script( 'customizer_repeater_ddslick', get_template_directory_uri() .'/customizer-repeater/js/jquery.ddslick.js', array("jquery"), '1.0.0');
	wp_enqueue_script( 'customizer_repeater_script', get_template_directory_uri() . '/customizer-repeater/js/customizer_repeater.js', array("jquery","jquery-ui-draggable","customizer_repeater_ddslick"), '1.0.0', true  );

}
add_action( 'customize_controls_enqueue_scripts', 'customizer_repeater_registers' );