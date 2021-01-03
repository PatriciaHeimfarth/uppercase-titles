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
  add_shortcode( 'write_hello_world', 'hello_world' );


defined('ABSPATH') or die("Thanks for visting");
?>