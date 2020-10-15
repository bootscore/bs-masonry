<?php
/*Plugin Name: bS Masonry 5
Plugin URI: https://bootscore.me/category/archives/masonry/
Description: This plugin adds masonry.js to WordPress. It is only required if a *-masonry.php in bootScore-5 used and replaces the card columns of Bootstrap 4, which are no longer included in Bootstrap 5.
Version: 5.0.0
Author: Bastian Kreiter
Author URI: https://crftwrk.de
License: GPLv3
*/



// Register Styles and Scripts
function masonry_scripts() {

    wp_enqueue_script( 'masonry-js', plugins_url( '/js/masonry.pkgd.min.js', __FILE__ ));
        
        }
    
add_action('wp_enqueue_scripts','masonry_scripts');














