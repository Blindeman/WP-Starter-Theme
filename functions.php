<?php

add_action( 'after_setup_theme', 'setup_beachfire' );
if( !function_exists( 'setup_beachfire' ) ){
    function setup_beachfire(){
        load_theme_textdomain( 'beachfire', get_template_directory() . '/languages' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
        register_nav_menus( array( 'main-menu' => esc_html__( 'Main Menu', 'beachfire' ) ) );
    }
}

add_action( 'widgets_init', 'beachfire_widget_area' );
function beachfire_widget_area(){
    register_sidebar(
        array(
            'id' => 'area-for-widgets',
            'name' => esc_html__( 'Widget Area' , 'beachfire' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>'
        )
    );
}

add_action( 'wp_enqueue_scripts', 'beachfire_scripts' );
function beachfire_scripts(){
    wp_enqueue_style( 'beachfire-style', get_stylesheet_uri() );
    // TODO: wp_enqueue_script( '_s-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true ); I have to try this out
    // TODO: do I want to load jquery?
    wp_enqueue_script( 'beachfire-h5bp-modernizer', get_template_directory_uri() . '/js/modernizr-3.7.1.min.js', array(), '20180528', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}