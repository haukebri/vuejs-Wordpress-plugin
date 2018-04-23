<?php

function registershortcode( $atts ){
  $query = new WP_Query( array( 'post_type' => 'timeline' ) );
  $return = '';

  $return .= '<script>';
  $return .= "var wpquery=". json_encode($query->get_posts());
  $return .= '</script>';
  //$return .= ;
  $return .= file_get_contents(plugin_dir_url( __FILE__ ).'template/main.html');

	return $return;
}

function create_posttype() {
    register_post_type( 'timeline',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Timeline' ),
                'singular_name' => __( 'Event' )
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => 'timeline'),
        )
    );
}
