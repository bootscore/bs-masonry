<?php
/*Plugin Name: bs Masonry
Plugin URI: https://bootscore.me/category/archives/masonry/
Description: This plugin adds masonry.js to WordPress. It's required if a *-masonry.php file in Bootscore used and replaces the card columns of Bootstrap 4, which are no longer included in Bootstrap 5.
Version: 5.1.0
Tested up to: 6.4.2
Requires at least: 5.0
Requires PHP: 7.4
Author: Bootscore
Author URI: https://bootscore.me
License: MIT License
*/


// Exit if accessed directly
defined( 'ABSPATH' ) || exit;


/**
 * Register masonry.pkgd.min.js
 */
function masonry_scripts() {

  wp_enqueue_script( 'masonry-js', plugins_url( '/js/masonry.pkgd.min.js' , __FILE__ ), array( 'jquery' ), '1.0', true );
        
}

add_action('wp_enqueue_scripts','masonry_scripts');