<?php

/**
 * ManjaroGreen functions and definitions
 *
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage ManjaroGreen
 * @since ManjaroGreen 1.0
 */



/*
* Setup WordPress Theme
*
*
**/
function wpse_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('automatic-feed-links');
    add_editor_style('editor-style.css');
    load_theme_textdomain('manjaro-green',dirname(__FILE__).'/languages');
    /**
	 * Set the content width based on the theme's design and stylesheet.
	 */
	if ( ! isset( $content_width ) ){
		$content_width = 1020;
	}
 	$defaults = array(
		'before'           => '<p>' . __( 'Pages:','manjaro-green' ),
		'after'            => '</p>',
		'link_before'      => '',
		'link_after'       => '',
		'next_or_number'   => 'number',
		'separator'        => ' ',
		'nextpagelink'     => __( 'Next page' ,'manjaro-green'),
		'previouspagelink' => __( 'Previous page' ,'manjaro-green'),
		'pagelink'         => '%',
		'echo'             => 1
	);
	wp_link_pages( $defaults );
}
add_action( 'after_setup_theme', 'wpse_theme_setup' );


/*
* Setup Theme Title
*
*
**/
function wp_title_set() {
	if(is_home()){
		echo bloginfo('name');
	}else{
		wp_title('').'&nbsp;|&nbsp;'.bloginfo( 'name' );
	}
}
add_action('wp_title','wp_title_set');


/*
* Definition footer widget config
*
*
**/
function theme_slug_widgets_init() {
	$footer_config = array(
		'name' => 'footerWidget',
		'id' => 'footerWidget',
		'description' => 'FooterWidget',
		'before_widget' => '<section class="footerWidget">',
		'after_widget' => '</section>',
		'before_title' => '<h3 class="footerWidgetTitle">',
		'after_title' => '</h3>'
	);
	register_sidebar($footer_config);
}
add_action( 'widgets_init', 'theme_slug_widgets_init' );


/*
* Custom Header image
*
*
**/
$defaults = array(
  'default-image'          => get_template_directory_uri().'/img/header.png',
  'random-default'         => false,
  'width'                  => 1020,
  'height'                 => 300,
  'flex-height'            => false,
  'flex-width'             => false,
  'default-text-color'     => '',
  'header-text'            => true,
  'uploads'                => true,
  'wp-head-callback'       => '',
  'admin-head-callback'    => '',
  'admin-preview-callback' => '',
);
add_theme_support('custom-header',$defaults);

/*
* Thumbnails Support
*
*
**/
add_theme_support( 'post-thumbnails' );


/*
* Custom Background
*
*
**/
$defaults = array(
	'default-color'          => '',
	'default-image'          => '',
	'default-repeat'         => '',
	'default-position-x'     => '',
	'default-attachment'     => '',
	'wp-head-callback'       => '_custom_background_cb',
	'admin-head-callback'    => '',
	'admin-preview-callback' => ''
);
add_theme_support( 'custom-background', $defaults );


/*
* HTML5 Support
*
*
**/
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

/*
* Remove hash to more-link
*
*
**/
function remove_more_jump_link($link) {
  $offset = strpos($link, '#more-');
  if ($offset) {
    $end = strpos($link, '"',$offset);
  }
  if ($end) {
    $link = substr_replace($link, '', $offset, $end-$offset);
  }
  return $link;
}
add_filter('the_content_more_link', 'remove_more_jump_link');

/*
* Search Filter
*
*
**/
function SearchFilter($query) {
	if ($query->is_search) {
		$query->set('post_type', 'post');
	}
	return $query;
}
add_filter('pre_get_posts','SearchFilter');


/*
* Setting excerpt length
*
*
**/
function my_excerpt_length($length) {
    return 40;
}
add_filter('excerpt_length', 'my_excerpt_length');

/*
* Exeprt string
*
*
**/
function my_excerpt_more($more){
    return '...';
}
add_filter('excerpt_more', 'my_excerpt_more');

/*
* Comment autolink invalidation
*
*
**/
remove_filter('comment_text', 'make_clickable', 9);


/*
* Load JavaScript file
*
*
**/
function script_load() {
	wp_enqueue_script('function', get_stylesheet_directory_uri().'/js/function.js', array('jquery'), '1.0.0', true);

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'script_load' );