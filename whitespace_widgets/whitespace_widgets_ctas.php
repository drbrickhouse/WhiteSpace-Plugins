<?php
/*
* Plugin Name: WhiteSpace CTA Widget
* Plugin Description: Provides a widget for displaying posts from the CTA custom post type
* Version: 1.0
* Author: Dillon Brickhouse
* Author URI: drbrickhouse.com
*/

class WhiteSpace_CTAs extends WP_Widget {

/************* Creating the widget ***********************/
	function whitespace_ctas() {
		// Instantiate the parent object
		parent::__construct( false, "CTA's" );
	}

/************* Creating the front end display ***********************/
	function widget( $args, $instance ) {
		// Widget output
    extract( $args );
    $title = apply_filters( 'widget_title', $instance['title']);
		$num_ctas = $instance['num_ctas'];
		$cta_class = $instance['cta_class'];
		$cta_layout = apply_filters( 'widget_text', $instance['cta_layout'] );

		require( 'whitespace_widgets_ctas_front_end.php' );
	}

/************* Updating the information ***********************/
	function update( $new_instance, $old_instance ) {
		// Save widget options
    $instance = $old_instance;
    $instance['title'] = strip_tags($new_instance['title']);
		$instance['num_ctas'] = strip_tags($new_instance['num_ctas']);
		$instance['cta_class'] = strip_tags($new_instance['cta_class']);
		$instance['cta_layout'] = $new_instance['cta_layout'];

    return $instance;
	}

/************* Creating the back end form ***********************/
	function form( $instance ) {
		// Output admin widget options form
    $title = esc_attr( $instance['title'] );
		$num_ctas = esc_attr( $instance['num_ctas'] );
		$cta_class = esc_attr( $instance['cta_class'] );
		$cta_layout = esc_attr( $instance['cta_layout'] );

		require( 'whitespace_widgets_ctas_fields.php' );
	}
}

/************ Hook Into Widgits Init to Register the Widgets ******************/
add_action( 'widgets_init', 'register_widget( "WhiteSpace_CTAs" )' );

?>
