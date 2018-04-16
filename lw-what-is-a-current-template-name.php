<?php
/*
Plugin Name: lw what is a current template name?
Description: Display the name of the template used at the top of the pages
Version: 0.1.0
Author: Florian Luce
Author URI: florian-luce.info
Text Domain: lw-what-is-a-current-template-name
License: GPL2
*/

/* ------ -
* Display path to current template for admin
* --- -
*
*/
add_action( 'wp_head', function() {
    if(!is_admin()) {

        global $template;
        echo '<p style="position: absolute; top: 32px; left: 0; z-index: 100000; background-color: crimson; padding: 7px;">' . $template . '</p>';
    }
} );
