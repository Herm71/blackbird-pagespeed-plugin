<?php
/*
 * Blackbird Starter Plugin Settings Admin Area
 * 
 * Adds custom theme setting admin area
 * These Theme Settings were created with the help
 * of Otto's tutorial and many references to the WordPress Codex
 * http://ottopress.com/2009/wordpress-settings-api-tutorial/
 * 
 * Author: Blackbird Consulting
 * Author URI: http://www.blackbirdconsult.com
 * 
 */
//Settings Menu
add_action('admin_menu', 'bb_pagespeed_settings_menu');

function bb_pagespeed_settings_menu() {
	add_menu_page('Blackbird Page Speed Plugin Settings', 'PageSpeed Plugin Settings', 'administrator', 'blackbird-pagespeed-plugin-settings', 'blackbird_pagespeed_plugin_settings_page', 'dashicons-admin-generic');
}

function blackbird_pagespeed_plugin_settings_page() {
 ?><div class="pagespeed-wrap">
     <a href="http://www.blackbirdconsult.com" target="blank"><img src="<?php echo plugins_url('blackbird-pagespeed-plugin/lib/images/blackbird-logo.png')?>"></a>
<h2>PageSpeed Options</h2>
<p>This plugin initiates several functions that will improve the page load speed of your webite.
The options below will allow you to enable the following:</p>
<form method="post" action="options.php">
    <?php settings_fields( 'blackbird-pagespeed-plugin-settings-group' ); ?>
    <?php do_settings_sections( 'blackbird-pagespeed-plugin-settings-group' ); ?>
<ul>
    <li><h3>Replace WordPress jQuery with Google Hosted Libraries:</h3>WordPress includes a copy of the jQuery library in its base install. This is great for development purposes, but in a live site it adds additional strain on your server. Offloading the work to Google Hosted Libraries will improve your page load speed. For more information, see <a href="http://www.blackbirdconsult.com/wordpress-jquery/" target="blank">WordPress jQuery makes your website slower</a>.
        
        <p class="img-header">Before</p>
    <img src="<?php echo plugins_url('blackbird-pagespeed-plugin/lib/images/jquery-replace-before.png')?>">
        <p class="img-header">After</p>
        <img src="<?php echo plugins_url('blackbird-pagespeed-plugin/lib/images/jquery-replace-after.png')?>">
<table class="form-table">
        <tr valign="top">
        <th scope="row">Replace WordPress jQuery</th>
        <td><?php 
        // Get an array of options from the database.
$wpjq_options = get_option( 'jquery_replace' );
 
// Get the value of this option.
$wpjq_checked = $wpjq_options;
 
// The value to compare with (the value of the checkbox below).
$wpjq_current = 1; 
 
// True by default, just here to make things clear.
$wpjq_echo = true;
        ?><input id="jqueryReplace" type="checkbox" name="jquery_replace" value="1" <?php checked( $wpjq_checked, $wpjq_current, $wpjq_echo ); ?>/>       
     
        </td>
        </tr>      
    </table>
</li>

    <li><h3>Remove version query strings from CSS and jQuery:</h3>Most scripts and stylesheets called by WordPress include a query string identifying the version, eg `/wp-includes/js/jquery/jquery.js?ver=1.4.2`. This can cause issues with cacheing, as this is a "dynamic link, as opposed to a "static" link. Turning this option on will replace all the version query strings in your site. For more information, see <a href="http://www.blackbirdconsult.com/wordpress-seo-remove-version-query-strings/" target="blank">WordPress SEO: Remove Version Query Strings from JavaScript JS and CSS Stylesheet Files</a>.
    <p class="img-header">Before</p>
    <img src="<?php echo plugins_url('blackbird-pagespeed-plugin/lib/images/jquery-css-version-remove-before.png')?>">
        <p class="img-header">After</p>
<img src="<?php echo plugins_url('blackbird-pagespeed-plugin/lib/images/jquery-css-version-remove-after.png')?>">
    <table class="form-table">
       <tr valign="top">
        <th scope="row">Remove Version Query Strings</th>
        <td><?php 
        // Get an array of options from the database.
$rvqs_options = get_option( 'remove_query_strings' );
 
// Get the value of this option.
$rvqs_checked = $rvqs_options;
 
// The value to compare with (the value of the checkbox below).
$rvqs_current = 1; 
 
// True by default, just here to make things clear.
$rvqs_echo = true;
        ?><input id="removeVersionQuery" type="checkbox" name="remove_query_strings" value="1" <?php checked( $rvqs_checked, $rvqs_current, $rvqs_echo ); ?>/>       
     
        </td>
        </tr>
        
    </table></li>
</ul>
   
    <?php submit_button(); ?>

</form>

</div><?php 
//$test1 = get_option('jquery_replace');
//$test2 = get_option('remove_query_strings');

//echo $test1.'<br>';
//echo $test2.'<br>';
//echo plugins_url('lib/css/admin-css.css', __FILE__).'<br>';

echo plugins_url('lib/images/blackbird-logo.png');
//var_dump($checked);
}

//Settings Page
add_action( 'admin_init', 'blackbird_pagespeed_plugin_settings' );

function blackbird_pagespeed_plugin_settings() {
	register_setting( 'blackbird-pagespeed-plugin-settings-group', 'remove_query_strings' );
	register_setting( 'blackbird-pagespeed-plugin-settings-group', 'jquery_replace' );
}