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


function hello_world()
{
    return "Hello World";
}
add_shortcode('write_hello_world', 'hello_world');


function get_first_title()
{
    global $loop;
    $all_posts = get_posts(array('numberposts' => -1));
    $loop = new WP_Query($all_posts);
    if ($loop->have_posts()) {
        while ($loop->have_posts()) {
            $loop->the_post();
            return the_title();
        }
    }
    return "no posts";
}
add_shortcode('write_first_title', 'get_first_title');

defined('ABSPATH') or die("Thanks for visting");
