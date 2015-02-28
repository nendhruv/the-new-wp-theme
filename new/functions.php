<?php

// Make theme available for translation
// Translations can be filed in the /languages/ directory
load_theme_textdomain( 'new', TEMPLATEPATH . '/languages' );
 
$locale = get_locale();
$locale_file = TEMPLATEPATH . "/languages/$locale.php";
if ( is_readable($locale_file) )
    require_once($locale_file);
 
// Get the page number
function get_page_number() {
    if ( get_query_var('paged') ) {
        print ' | ' . __( 'Page ' , 'new') . get_query_var('paged');
    }
} // end get_page_number


// Register widgetized areas
function theme_widgets_init() {
    // Area 1
    register_sidebar( array (
        'name'          => 'Primary Widget Area',
        'id'            => 'primary_widget_area',
        'before_widget' => '<li id="%1$s" class="widget-container %2$s ">',
        'after_widget'  => '</li>',
        'before_title'  => '<div class="row sidebar-head"><div class=" col-sm-3 col-sm-offset-2"><h3 class="widget-title">',
        'after_title'   => '</h3></div></div>',
    ) );
 
    // Area 2
    register_sidebar( array (
        'name'          => 'Secondary Widget Area',
        'id'            => 'secondary_widget_area',
        'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<div class="row"><h3 class="widget-title col-sm-3 col-sm-offset-5">',
        'after_title'   => '</h3></div>',
    ) );

      // Area 3
    register_sidebar( array (
        'name'          => 'About Widget Area',
        'id'            => 'about_widget_area',
        'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<div class="row sidebar-head"><div class=" col-sm-3 col-sm-offset-2"><h3 class="widget-title">',
        'after_title'   => '</h3></div></div>',
    ) );


     register_sidebar( array (
        'name'          => 'Footer Widget 1',
        'id'            => 'footer-widget-1',
        'before_widget' => '<li id="%1$s" class="widget-container %2$s ">',
        'after_widget'  => '</li>',
        'before_title'  => '<div class="row sidebar-head"><div class=" col-sm-3 col-sm-offset-2"><h3 class="widget-title">',
        'after_title'   => '</h3></div></div>',
    ) );

      register_sidebar( array (
        'name'          => 'Footer Widget 2',
        'id'            => 'footer-widget-2',
        'before_widget' => '<li id="%1$s" class="widget-container %2$s ">',
        'after_widget'  => '</li>',
        'before_title'  => '<div class="row sidebar-head"><div class=" col-sm-3 col-sm-offset-2"><h3 class="widget-title">',
        'after_title'   => '</h3></div></div>',
    ) );
} // end theme_widgets_init
 
add_action( 'init', 'theme_widgets_init' );


$preset_widgets = array (
    'primary_widget_area'   => array( 'search', 'pages', 'categories', 'archives' ),
    'about_widget_area'   => array( 'search', 'pages', 'categories', 'archives' ),
    'secondary_widget_area' => array( 'links', 'meta' )
);
if ( isset( $_GET['activated'] ) ) {
    update_option( 'sidebars_widgets', $preset_widgets );
}
// update_option( 'sidebars_widgets', NULL );


// Check for static widgets in widget-ready areas
function is_sidebar_active( $index ){
    global $wp_registered_sidebars;
 
    $widgetcolums = wp_get_sidebars_widgets();
 
    if ( $widgetcolums[$index] ) return true;
 
    return false;
} // end is_sidebar_active



function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );



function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );


$args = array(
    'width'         => 980,
    'height'        => 60,
    'default-image' => get_template_directory_uri() . '/images/header.jpg',
);
add_theme_support( 'custom-header', $args );


$args = array(
    
    'default-image' => '%1$s/img/background.jpg',
);
add_theme_support( 'custom-background', $args );

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 150, 300,true );

add_theme_support(' custom-footer ');


add_action('get_header', 'my_filter_head');

  function my_filter_head() {
    remove_action('wp_head', '_admin_bar_bump_cb');
  }

