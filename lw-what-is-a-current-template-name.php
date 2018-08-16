<?php
/*
Plugin Name: lw what is a current template name?
Description: Display the name of the template used at the top of the pages
Version: 0.2.0
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
    if( ! is_admin() && current_user_can( 'edit_theme_options' ) ) {
        global $template;
        if( true === is_admin_bar_showing() ) {
            echo '<p style="position: absolute; top: 32px; left: 0; z-index: 100000; background-color: crimson; padding: 7px;">' . $template . '</p>';
        } else {
            echo '<p style="position: absolute; top: 0; left: 0; z-index: 100000; background-color: crimson; padding: 7px;">' . $template . '</p>';
        }
    }
} );
