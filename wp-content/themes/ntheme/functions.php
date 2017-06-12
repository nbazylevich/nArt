<?php

add_action('wp_enqueue_scripts','ntheme_scripts');
function ntheme_scripts(){
    wp_enqueue_style('bootstrap.min', get_template_directory_uri() . '/bootstrap/dist/css/bootstrap.min.css' );

    wp_enqueue_script('jquery-2.1.1', get_template_directory_uri() . '/jquery-2.1.1.js' );
    wp_enqueue_script('bootstrap.min', get_template_directory_uri() . '/bootstrap/dist/js/bootstrap.min.js' );
}
