<?php
/**
* Plugin Name: Csaba's sandbox plugin
* Description: This is a sandbox testing plugin. When you activate it, it makes the post titles UPPERCASE.
* Version: 0.1
* Author: Csaba Varga
* Author URI: https://csabavarga.me/
**/

add_filter('the_title', 'uppercase_title');
function uppercase_title ($title) {
    $title = strtoupper($title);  
    return $title;
}