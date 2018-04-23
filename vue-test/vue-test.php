<?php
   /*
   Plugin Name: Vue Test Timeline
   Plugin URI: http://haukebrinkmann.de
   description: Vue Timeline Plugin
   Version: 1
   Author: Hauke Brinkmann
   Author URI:
   License: MIT
   */

include_once('func.php');


add_shortcode( 'vue-timeline', 'registershortcode' );
add_action( 'init', 'create_posttype' );
