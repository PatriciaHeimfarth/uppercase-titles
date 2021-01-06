<?php

/**
 * Plugin Name:  Uppercase Titles
 * Description: Plugin for uppercase all post titles
 * Version: 1.0
 * Author: Patricia Heimfarth
 * License: GPL2
 * License URI:  https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:  uppercase-titles
 */


function upcati_write_all_titles_uppercase($post)
{
    $post->post_title = strtoupper($post->post_title);    
}

add_filter('the_post', 'upcati_write_all_titles_uppercase'); 


defined('ABSPATH') or die("Thanks for visting");

?>