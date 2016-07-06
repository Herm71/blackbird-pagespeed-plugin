<?php
/**
 * Plugin Name: Blackbird Page Speed Plugin
 * Plugin URI: https://github.com/Herm71/blackbird-pagespeed-plugin
 * Description: Starter Plugin for development purposes. Theme independent.
 * Version: 0.2.1
 * Author: Blackbird Consulting
 * Author URI: http://www.blackbirdconsult.com/
 * License: GPL2
 * Text Domain: blackbird-starter
 * GitHub Plugin URI: https://github.com/Herm71/blackbird-pagespeed-plugin
 * GitHub Branch: master
 * 
 * 
 * 
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU 
 * General Public License version 2, as published by the Free Software Foundation.  You may NOT assume 
 * that you can use any other version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without 
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 */

// Plugin Directory 
define( 'BB_PAGESPEED_DIR', dirname( __FILE__ ) );

// Plugin Settings
include_once( BB_PAGESPEED_DIR . '/lib/functions/admin.php' );

// Plugin Functions
include_once( BB_PAGESPEED_DIR . '/lib/functions/functions.php' );


//Add link to Plugin Settings Page
function bb_pagespeed_plugin_add_settings_link( $links ) {
    $settings_link = '<a href="options-general.php?page=blackbird-pagespeed-plugin-settings">' . __( 'Settings' ) . '</a>';
    array_push( $links, $settings_link );
  	return $links;
}
$plugin = plugin_basename( __FILE__ );
add_filter( "plugin_action_links_$plugin", 'bb_pagespeed_plugin_add_settings_link' );

// ADD STYLES
function bb_pagespeed_styles(){
    wp_enqueue_style('bb-pagespeed-styles', plugins_url('lib/css/admin-css.css', __FILE__));
}

add_action('admin_enqueue_scripts', 'bb_pagespeed_styles');
