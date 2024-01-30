<?php

function MyWordPressTheme_register_style() {

    $version = wp_get_theme() ->get('Version');
    wp_enqueue_style('mywptheme-style', get_template_directory_uri(). "/style.css", array('mywptheme-bootstrap'), '1.0', 'all');
    wp_enqueue_style('mywptheme-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
    wp_enqueue_style('mywptheme-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');

}

add_action('wp_enque_scripts','MyWordPressTheme_register_style');

function MyWordPressTheme_register_scripts() {

 wp_enqueue_script('mywptheme-jquery','https://code.jquery.com/jquery-3.4.1.slim.min.js', array(),'3.4.1',true);
 wp_enqueue_script('mywptheme-popper','https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(),'3.4.1',true);
 wp_enqueue_script('mywptheme-bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(),'3.4.1',true);
 wp_enqueue_script('mywptheme-main',get_template_directory_uri()."/assets/js/main.js", array(),'1.0',true);

}

add_action('wp_enque_scripts','MyWordPressTheme_register_scripts');

?>