<?php
define('version', '1.0.0');

function scripts() {
    wp_enqueue_style('dfco_bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), version, 'all');
    wp_enqueue_style('dfco_css', get_template_directory_uri() . '/style.css', array('dfco_bootstrap'), version, 'all');
    wp_enqueue_script('script_js', get_template_directory_uri() . '/js/script.js', array('jquery'), version, true);

    }
    

add_action('wp_enqueue_scripts', 'scripts');

function admin_scripts(){
    wp_enqueue_style('bootstrap_admin', get_template_directory_uri() . 'css/bootstrap.min.css', array(), version);
}

add_action('admin_init', 'admin_scripts');


function setup(){


    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'setup');