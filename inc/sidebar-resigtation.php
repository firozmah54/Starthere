<?php
function Startup_theme_slug_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Footer contact', 'startup' ),
		'id'            => 'footer-1',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'startup' ),
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<div class="section-title section-title-sm position-relative pb-3 mb-4"><h3 class="text-light mb-0">',
		'after_title'   => '</h3></div>',
	) );
// search form 
	register_sidebar( array(
		'name'          => __( 'search contact', 'startup' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'startup' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s mb-0">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="section-title section-title-sm position-relative pb-3 mb-4"><h3 class="text-dark mb-0">',
		'after_title'   => '</h3></div>',
	) );
	//header social media 
	register_sidebar( array(
		'name'          => __( ' social media ', 'startup' ),
		'id'            => 'header-1',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'startup' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s mb-0">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="section-title section-title-sm position-relative pb-3 mb-4"><h3 class="text-dark mb-0">',
		'after_title'   => '</h3></div>',
	) );
}
add_action( 'widgets_init', 'Startup_theme_slug_widgets_init' );