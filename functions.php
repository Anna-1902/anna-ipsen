<?php 

//hjælp fra Scott

function theme_resources() {
    wp_enqueue_script( 'jqueryjs', 'https://code.jquery.com/jquery-3.6.0.min.js', array (), 3.6, true);
    wp_enqueue_style('main', get_stylesheet_directory_uri() . '/assets/css/main.css', array(), 1.0, 'all');
    wp_enqueue_script( 'headermenujs', get_template_directory_uri() . '/assets/js/headermenu.js', array (), 1.0, true);
    
    wp_enqueue_script( 'animateonscrolljs', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array (), 2.3, true);
    wp_enqueue_style('animateonscrollcss', 'https://unpkg.com/aos@2.3.1/dist/aos.css', array(), 2.3, 'all');

    wp_enqueue_style('theme_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'theme_resources');

function theme_features() {
    add_theme_support('title-tag');
    add_post_type_support( 'page', 'excerpt' );
    add_theme_support( 'custom-logo' );
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    register_nav_menu('undernavigation', 'Undernavigation');

}
add_action('after_setup_theme', 'theme_features');

//Featured image
add_theme_support( 'post-thumbnails' );

// WP_LIST_PAGES ADD CLASSES
// add_filter('wp_list_pages', create_function('$t', 'return str_replace("<a ", "<a class=\"list-group-item list-group-item-action\" ", $t);'));
// ADD CLASS TO HTML TABLES
add_filter( 'the_content', 'tableClass' );
function tableClass( $content ) {
    return str_replace( '<table>', '<table class="table">', $content );
}
 // Classes for li in header menu
function atg_menu_classes($classes, $item, $args) {
    if($args->theme_location == 'primary') {
      $classes[] = 'hover:text-green-700 transition-colors duration-200';
    }
    return $classes;
  }
  add_filter('nav_menu_css_class', 'atg_menu_classes', 1, 3);


?>


