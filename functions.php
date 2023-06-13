<?php

function citas_scripts() {
    wp_enqueue_style('bootstrap-style', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap-icon', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css');
    wp_enqueue_style('custom-style', get_stylesheet_uri(), array(), rand(111, 9999), 'all');

    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.3.0', true);
    wp_enqueue_script('cts-js', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('multilevel-dropdown', get_template_directory_uri() . '/js/multilevel-dropdown.js', array('jquery'), '1.0', true);

}

add_action('wp_enqueue_scripts', 'citas_scripts');

function remove_admin_bar() {
    show_admin_bar(false);
}

add_action('after_setup_theme', 'remove_admin_bar');

require_once('class-wp-bootstrap-navwalker.php');

// register_nav_menus(array(
//     'primary' => __('Primary Menu', 'citas'),
// ));


function my_theme_register_menus() {
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu')
        )
    );
}
add_action('init', 'my_theme_register_menus');

?>
