<?php

//add image in posts
add_theme_support('post-thumbnails');
/**
 * define('themeDir', get_template_directory() . '/');
 * require(themeDir . 'functions/gallery.php');
 */

/* remove emoji comments */
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

/* Add Menu */
add_action('init', 'register_my_menus');
function register_my_menus()
{
    register_nav_menus([
        'header-menu' => __('Header Menu'),
        'footer-menu' => __('Footer Menu'),
    ]);
}

function template_widgets_init()
{
    register_sidebar([
        'name' => esc_html__('Sidebar', 'template'),
        'id' => 'sidebar-1',
        'description' => esc_html__('Add widgets here.', 'template'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ]);
}

add_action('widgets_init', 'template_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function theme_styles()
{
    wp_enqueue_style('theme_css', get_template_directory_uri() . '/public/css/main.css');
}

add_action('wp_enqueue_scripts', 'theme_styles');
function theme_js()
{
    global $wp_scripts;
    wp_register_script('html5_shiv', 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js', '', '', false);
    wp_register_script('respond_js', 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js', '', '', false);
    $wp_scripts->add_data('html5_shiv', 'conditional', 'lt IE 9');
    $wp_scripts->add_data('respond_js', 'conditional', 'lt IE 9');
    wp_enqueue_script('theme_js_1', 'https://ariutta.github.io/svg-pan-zoom/dist/svg-pan-zoom.js', '', true, 'in_footer');
    wp_enqueue_script('theme_js', get_template_directory_uri() . '/public/js/main.js', '', true, 'in_footer');


}

add_action('wp_enqueue_scripts', 'theme_js');
/**
 * Create custom excerpt
 *
 * @param $count
 *
 * @return bool|string
 */
function get_excerpt($count)
{
    //$permalink = get_permalink($post->ID);
    $excerpt = get_the_content();
    $excerpt = strip_tags($excerpt);
    $excerpt = substr($excerpt, 0, $count);
    $excerpt = $excerpt . '...';

    return $excerpt;
}



add_action('customize_register', 'customize_register_theme');


function customize_register_theme($wp_customize)
{
    $wp_customize->add_section('settings_theme', array(
        'title' => __('Configuración Guayacan', 'guayacan'),
        'priority' => 35
    ));

    //tel
    $wp_customize->add_setting('settings_theme[phone]', array(
        'default' => '',
        'capability' => 'edit_theme_options',
        'type' => 'option',
        'transport' => 'postMessage'
    ));
    $wp_customize->add_control('phone', array(
        'label' => __('Teléfono', 'guayacan'),
        'section' => 'settings_theme',
        'settings' => 'settings_theme[phone]',
    ));
    //face
    $wp_customize->add_setting('settings_theme[face]', array(
        'default' => '',
        'capability' => 'edit_theme_options',
        'type' => 'option',
        'transport' => 'postMessage'
    ));
    $wp_customize->add_control('guayacan_face', array(
        'label' => __('Facebook', 'guayacan'),
        'section' => 'settings_theme',
        'settings' => 'settings_theme[face]',
    ));
    //ins
    $wp_customize->add_setting('settings_theme[ins]', array(
        'default' => '',
        'capability' => 'edit_theme_options',
        'type' => 'option',
        'transport' => 'postMessage'
    ));
    $wp_customize->add_control('guayacan_ins', array(
        'label' => __('Instagram', 'guayacan'),
        'section' => 'settings_theme',
        'settings' => 'settings_theme[ins]',
    ));
}





