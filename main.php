<?php
/*Plugin Name: bS5 Masonry
Plugin URI: https://bootscore.me/category/archives/masonry/
Description: This plugin adds masonry.js to WordPress. It is only required if a *-masonry.php in bootScore 5 used and replaces the card columns of Bootstrap 4, which are no longer included in Bootstrap 5.
Version: 5.0.0.1
Author: Bastian Kreiter
Author URI: https://crftwrk.de
License: GPLv3
*/



// Register masonry.pkgd.min.js
function masonry_scripts() {

    wp_enqueue_script( 'masonry-js', plugins_url( '/js/masonry.pkgd.min.js' , __FILE__ ), array( 'jquery' ), '1.0', true );
        
        }
    
add_action('wp_enqueue_scripts','masonry_scripts');