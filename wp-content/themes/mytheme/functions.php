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
	wp_enqueue_style('main', get_stylesheet_directory_uri(). '/assets/css/main.css', array(), 1, 'all');
	//wp_enqueue_style('main');
	wp_enqueue_style('fontawesome', get_stylesheet_directory_uri(). '/assets/css/fontawesome-all.min.css', array(), 1, 'all');
	//wp_enqueue_style('fontawesome');
	wp_register_style('_breakpoints', get_template_directory_uri(). '/assets/sass/libs/_breakpoints.scss', array(), 1, 'all');
	//wp_enqueue_style('_breakpoints');
	wp_enqueue_style('_functions', get_stylesheet_directory_uri(). '/assets/sass/libs/_functions.scss', array(), 1, 'all');
	//wp_enqueue_style('_functions');

	wp_enqueue_style('_html-grid', get_stylesheet_directory_uri(). '/assets/sass/libs/_html-grid.scss', array(), 1, 'all');
	//wp_enqueue_style('_html-grid');
	wp_enqueue_style('_mixins', get_stylesheet_directory_uri(). '/assets/sass/libs/_mixins.scss', array(), 1, 'all');
	//wp_enqueue_style('_mixins');
	wp_enqueue_style('_vars', get_stylesheet_directory_uri(). '/assets/sass/libs/_vars.scss', array(), 1, 'all');
	//wp_enqueue_style('_vars');
	wp_enqueue_style('_vendor', get_stylesheet_directory_uri(). '/assets/sass/libs/_vendor.scss', array(), 1, 'all');
	//wp_enqueue_style('_vendor');

}

      add_action('wp_enqueue_scripts', 'load_stylesheets');

     function load_scripts()
     {
wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js',array(), 1,1,1);
	wp_enqueue_script('jquery');

	wp_register_script('dropotron', get_template_directory_uri() . '/assets/js/jquery.dropotron.min.js',array(), 1,1,1);
	wp_enqueue_script('dropotron');
	wp_register_script('browser', get_template_directory_uri() . '/assets/js/browser.min.js',array(), 1,1,1);
	wp_enqueue_script('browser');
	wp_register_script('breakpoints', get_template_directory_uri() . '/assets/js/breakpoints.min.js',array(), 1,1,1);
	wp_enqueue_script('breakpoints');

	wp_register_script('util', get_template_directory_uri() . '/assets/js/util.js',array(), 1,1,1);
	wp_enqueue_script('util');
	wp_register_script('main', get_template_directory_uri() . '/assets/js/main.js',array(), 1,1,1);
	wp_enqueue_script('main');

     }
     add_action('wp_enqueue_scripts','load_scripts');
function register_menu()
{
register_nav_menus(
	array(
		'primary-menu' => 'Primary Menu',
		'footer-menu'  => 'Footer Menu',
		'side-menu' => 'Side Menu'
	)
);

}

 add_action('init','register_menu');

//register_sidebar
function reg_sidebar() {
  register_sidebar([
    'name'          => esc_html__( 'sidebar', 'mytheme' ),
    'id'            => 'sidebar',
    'description'   => esc_html__( 'Add widgets for main sidebar here', 'mytheme' ),
    'before_widget' => '<section class="widget">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ]);  
}
add_action( 'widgets_init', 'reg_sidebar' );

function reg_sidebar2() {
  register_sidebar([
    'name'          => esc_html__( 'sidebar2', 'mytheme' ),
    'id'            => 'sidebar2',
    'description'   => esc_html__( 'Add widgets for main sidebar here', 'mytheme' ),
    'before_widget' => '<section class="widget">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ]);  
}
add_action( 'widgets_init', 'reg_sidebar2' );



