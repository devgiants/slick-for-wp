<?php
/*
Plugin Name: Slick For Wordpress
Plugin URI: http://getbootstrap.com/
Description: Include Bootstrap
Version: 1.0
Author: Nicolas BONNIOT
Author URI: http://devgiants.fr
Text Domain: slick
*/

/**
 * Add slick scripts
 */
function slick_scripts()
{
    wp_enqueue_style('slick', '//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css');
    wp_enqueue_style('slick-theme', '//cdn.jsdelivr.net/jquery.slick/1.5.9/slick-theme.css', array('slick'));
    wp_enqueue_script('slick', '//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js', array('jquery'), null, true);
}

add_action( 'wp_enqueue_scripts', 'slick_scripts' );