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
    register_nav_menu('footerMenuLocation', 'Footer Menu Location');

}
add_action('after_setup_theme', 'theme_features');

//Featured image
add_theme_support( 'post-thumbnails' );

// WP_LIST_PAGES ADD CLASSES
add_filter('wp_list_pages', create_function('$t', 'return str_replace("<a ", "<a class=\"list-group-item list-group-item-action\" ", $t);'));
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


  function headless_wp_organisation_init() {
    $labels = array(
        'name'               => _x( 'Organisation', 'post type general name', 'headless-wp' ),
        'singular_name'      => _x( 'Organisation', 'post type singular name', 'headless-wp' ),
        'menu_name'          => _x( 'Organisation', 'admin menu', 'headless-wp' ),
        'name_admin_bar'     => _x( 'Organisation', 'add new on admin bar', 'headless-wp' ),
        'add_new'            => _x( 'Add New', 'organisation', 'headless-wp' ),
        'add_new_item'       => __( 'Add New Item', 'headless-wp' ),
        'new_item'           => __( 'New item to organisation', 'headless-wp' ),
        'edit_item'          => __( 'Edit item', 'headless-wp' ),
        'view_item'          => __( 'View item', 'headless-wp' ),
        'all_items'          => __( 'All items', 'headless-wp' ),
        'search_items'       => __( 'Search items', 'headless-wp' ),
        'parent_item_colon'  => __( 'Parent Items:', 'headless-wp' ),
        'not_found'          => __( 'No items found.', 'headless-wp' ),
        'not_found_in_trash' => __( 'No items found in Trash.', 'headless-wp' )
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Description.', 'headless-wp' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'organisation' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' ),
        'menu_icon'          => 'dashicons-megaphone',
        'taxonomies'         => array( 'category', 'post_tag' )
    );

    register_post_type( 'organisation', $args );
}

add_action( 'init', 'headless_wp_organisation_init' );



?>


