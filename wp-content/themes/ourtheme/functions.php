<?php
add_theme_support('title-tag');
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('post_format',['aside','gallery','link','image','script',' style', 'caption']);
add_theme_support('html5');
add_theme_support('custom-header');
add_theme_support('custom-background');
add_theme_support('custom-logo');
add_theme_support('widgets');
function load_stylesheets()
{
	wp_register_style('font', get_template_directory_uri(). '/fonts/beyond_the_mountains-webfont.css', array(), 1, 'all');
	wp_enqueue_style('font');

	wp_register_style('bootstrap', get_template_directory_uri(). '/plugin-frameworks/bootstrap.min.css', array(), 1, 'all');
	wp_enqueue_style('bootstrap');


	wp_register_style('swiper', get_template_directory_uri(). '/plugin-frameworks/swiper.css', array(), 1, 'all');
	wp_enqueue_style('swiper');

wp_register_style('ionicons', get_template_directory_uri(). '/fonts/ionicons.css', array(), 1, 'all');
	wp_enqueue_style('ionicons');

	wp_register_style('styles', get_template_directory_uri(). '/common/styles.css', array(), 1, 'all');
	wp_enqueue_style('styles');

 wp_register_style('custom', get_template_directory_uri(). '/custom.css', array(), 1, 'all');
	wp_enqueue_style('custom');

}

      add_action('wp_enqueue_scripts', 'load_stylesheets');
 
 //scripts       
  function addjs()
{
	wp_register_script('jquery', get_template_directory_uri() . '/plugin-frameworks/jquery-3.2.1.min.js',array(), 1,1,1);
	wp_enqueue_script('jquery');


	wp_register_script('bootstrap', get_template_directory_uri() . '/plugin-frameworks/bootstrap.min.js',array(), 1,1,1);
	wp_enqueue_script('bootstrap');

wp_register_script('swiper', get_template_directory_uri() . '/plugin-frameworks/swiper.js',array(), 1,1,1);
	wp_enqueue_script('swiper');

wp_register_script('scripts', get_template_directory_uri() . '/common/scripts.js',array(), 1,1,1);
	wp_enqueue_script('scripts');
wp_register_script('custom', get_template_directory_uri() . '/custom.js',array(), 1,1,1);
	wp_enqueue_script('custom');
}
 add_action('wp_enqueue_scripts', 'addjs');

function register_menu()
{
register_nav_menus(
	array(
		'primary-menu' => 'Primary Menu',
		'footer-menu'  => 'Footer Menu'
	)
);
}
 add_action('init','register_menu');

// Setup Widget Areas
function wphierarchy_widgets_init() {
  register_sidebar([
    'name'          => esc_html__( 'Main Sidebar', 'wphierarchy' ),
    'id'            => 'main-sidebar',
    'description'   => esc_html__( 'Add widgets for main sidebar here', 'wphierarchy' ),
    'before_widget' => '<section class="widget">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ]);  
}
add_action( 'widgets_init', 'wphierarchy_widgets_init' );


function reg_widget(){
	register_sidebar([
		'name' => esc_html__('sidebar2', 'wphierarchy' ),
		'id'   => 'sidebar2',
    'description'   => esc_html__( 'Add widgets for other sidebar here', 'wphierarchy' ),
    'before_widget' => '<section class="widget">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
	]);
}
add_action( 'widgets_init', 'reg_widget' );