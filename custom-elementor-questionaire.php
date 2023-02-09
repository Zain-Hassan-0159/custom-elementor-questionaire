<?php

/**
 * Plugin Name:       Custom Elementor Questionaire
 * Description:       Questionaire is created by Zain Hassan.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Zain Hassan
 * Author URI:        https://hassanzain.com
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       elementor-questionaire 
*/

if(!defined('ABSPATH')){
exit;
}

function add_customQuestoinaire_category( $elements_manager ) {

	$elements_manager->add_category(
		'el-custom-questionaire',
		[
			'title' => esc_html__( 'Custom Questionaire', 'elementor-questionaire' ),
			'icon' => 'fa fa-plug',
		]
	);

}
add_action( 'elementor/elements/categories_registered', 'add_customQuestoinaire_category' );

/**
 *  questionaire Elementor Custom Widget
*/
function register_customQuestionaire_elementor_widgets( $widgets_manager ) {
    /** Home Slider Widget **/
	require_once( __DIR__ . '/inc/custom-questionaire.php' );
	$widgets_manager->register( new \questionaireCustom_widget_elementor );

}
add_action( 'elementor/widgets/register', 'register_customQuestionaire_elementor_widgets' );