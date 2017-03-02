<?php
/**
 * Created by PhpStorm.
 * User: marco.bevilacqua
 * Date: 01/03/2017
 * Time: 15:09
 */

/*
 * INCLUDE style.css in child theme
 */
add_action( 'wp_enqueue_scripts', 'enqueue_parent_theme_style' );
function enqueue_parent_theme_style() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}