<?php

/* 
 * Blackbird Page Speed Functions File.
 * 
 */


/**
 * Replace WordPress jQuery with Google Hosted Libraries
 * @author Blackbird Consulting/Jason Chafin
 * @link https://gist.github.com/Herm71/916bc9481f62845ddc97248a871cab4a
 */

function bb_modify_jquery(){
    if (!is_admin()){
        $jquery_replace = get_option('jquery_replace');
        if ($jquery_replace == 1){         
        
 // deregister WordPress JQuery
    wp_deregister_script('jquery');
    //register and enqueue jquery
    wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js', null, true); // register the external file  
        wp_enqueue_script('jquery'); // enqueue the external file
}
    }
}

add_action('init','bb_modify_jquery');

/**
 * Remove Query String from Static Resources
 * @author Blackbird Consulting/Jason Chafin
 * @link http://www.blackbirdconsult.com/wordpress-seo-remove-version-query-strings/
 *
 * @param $src
 * @return modified query string
 */
function _bb_remove_query_string($src){
    $parts=explode('?',$src);
    return $parts[0];
}
function bb_add_filters (){   
    $version_query_filter = get_option('remove_query_strings');
        if ($version_query_filter == 1){
        add_filter( 'script_loader_src', '_bb_remove_query_string', 15, 1 );
add_filter( 'style_loader_src', '_bb_remove_query_string', 15, 1 );
 }
 }
  add_action('wp','bb_add_filters');