<?php

/**
 * Plugin Name:  Uppercase Titles Plugin
 * Description: Plugin for uppercase all Post Titles
 * Version: 1.0
 * Author: Patricia Heimfarth
 * License: GPL2
 * License URI:  https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:  uppercase-titles-plugin
 */


function write_all_titles_uppercase($post)
{
    $post->post_title = strtoupper($post->post_title);    
}

add_filter('the_post', 'write_all_titles_uppercase'); 


defined('ABSPATH') or die("Thanks for visting");
