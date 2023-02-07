<?php
/**
 * startup Theme Customizer
 *
 * @package startup
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function startup_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'startup_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'startup_customize_partial_blogdescription',
			)
		);
	}
}
add_action( 'customize_register', 'startup_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function startup_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function startup_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function startup_customize_preview_js() {
	wp_enqueue_script( 'startup-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'startup_customize_preview_js' );

// ACF create json data

 
function startup_json_save_point( $path ) {
    
    // update path
    $path = get_stylesheet_directory() . '/acf-json';
    
    
    // return
    return $path;
    
}
add_filter('acf/settings/save_json', 'startup_json_save_point');

//acf theme settings
function startup_acf_op_init(){

	if( function_exists('acf_add_options_page') ) {

		acf_add_options_page(array(
			'page_title'    => 'Theme Options ',
			'menu_title'    => 'Theme Option',
			'menu_slug'     => 'theme-general-settings',
			'capability'    => 'edit_posts',
			'redirect'      => false
		));
		acf_add_options_sub_page(array(
			'page_title'    => 'Counter ',
			'menu_title'    => 'Counter ',
			'parent_slug'   => 'theme-general-settings',
		));
		acf_add_options_sub_page(array(
			'page_title'    => 'about ',
			'menu_title'    => 'About section ',
			'parent_slug'   => 'theme-general-settings',
		));
		acf_add_options_sub_page(array(
			'page_title'    => 'Business  ',
			'menu_title'    => 'Business  section ',
			'parent_slug'   => 'theme-general-settings',
		));
		acf_add_options_sub_page(array(
			'page_title'    => 'SERVICES  ',
			'menu_title'    => 'SERVICES  section ',
			'parent_slug'   => 'theme-general-settings',
		));
		acf_add_options_sub_page(array(
			'page_title'    => 'Pricing',
			'menu_title'    => 'Pricing  section ',
			'parent_slug'   => 'theme-general-settings',
		));

		acf_add_options_sub_page(array(
			'page_title'    => 'contact ',
			'menu_title'    => 'contact section ',
			'parent_slug'   => 'theme-general-settings',
		));
		acf_add_options_sub_page(array(
			'page_title'    => 'Testimonial ',
			'menu_title'    => 'Testimonial ',
			'parent_slug'   => 'theme-general-settings',
		));
		acf_add_options_sub_page(array(
			'page_title'    => 'Team ',
			'menu_title'    => 'Team section ',
			'parent_slug'   => 'theme-general-settings',
		));
		acf_add_options_sub_page(array(
			'page_title'    => 'Blog ',
			'menu_title'    => 'Blog section ',
			'parent_slug'   => 'theme-general-settings',
		));
		acf_add_options_sub_page(array(
			'page_title'    => 'client  ',
			'menu_title'    => 'client logo ',
			'parent_slug'   => 'theme-general-settings',
		));
		acf_add_options_sub_page(array(
			'page_title'    => 'contact  ',
			'menu_title'    => 'contact  ',
			'parent_slug'   => 'theme-general-settings',
		));
	}
}
add_action('acf/init', 'startup_acf_op_init');


/// acf custom post processing

function startup_customize_post_sliders(){
	$labels = array(
		'name'                  => _x( 'Sliders', 'Slider', 'startup' ),
		'singular_name'         => _x( 'Slider', 'Slider', 'startup' ),
		'menu_name'             => _x( 'Slider', 'Slider', 'startup' ),
		'name_admin_bar'        => _x( 'Slider', 'Add New on Slider', 'startup' ),
		'add_new'               => __( 'Add New Slider', 'startup' ),
		'add_new_item'          => __( 'Add New Slider', 'startup' ),
		'new_item'              => __( 'New Slider', 'startup' ),
		'edit_item'             => __( 'Edit Slider', 'startup' ),
		'view_item'             => __( 'View Slider', 'startup' ),
		'all_items'             => __( 'All Slider', 'startup' ),
		'search_items'          => __( 'Search Sliders', 'startup' ),
		'parent_item_colon'     => __( 'Parent Slider:', 'startup' ),
		'not_found'             => __( 'No Slider found.', 'startup' ),
		'not_found_in_trash'    => __( 'No Sliders found in Trash.', 'startup' ),
		'featured_image'        => _x( 'slider Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'startup' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'startup' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'startup' )
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'book' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail' ),
	);
	register_post_type( 'slider', $args );

	//pricing table 

	$labels = array(
		'name'                  => _x( 'Pricings ', 'Pricing', 'startup' ),
		'singular_name'         => _x( 'Pricings', 'Pricings', 'startup' ),
		'menu_name'             => _x( 'Pricing', 'Pricing', 'startup' ),
		'name_admin_bar'        => _x( 'Pricing', 'Add New on Pricings', 'startup' ),
		'add_new'               => __( 'Add New Pricing', 'startup' ),
		'add_new_item'          => __( 'Add New Pricing', 'startup' ),
		'new_item'              => __( 'New Pricing', 'startup' ),
		'edit_item'             => __( 'Edit Pricing', 'startup' ),
		'view_item'             => __( 'View Pricings', 'startup' ),
		'all_items'             => __( 'All Pricings', 'startup' ),
		'search_items'          => __( 'Search Pricing', 'startup' ),
		'parent_item_colon'     => __( 'Parent Pricing:', 'startup' ),
		'not_found'             => __( 'No Pricings found.', 'startup' ),
		'not_found_in_trash'    => __( 'No Pricings found in Trash.', 'startup' )
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'book' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor',  ),
	);
	register_post_type( 'pricing', $args );

	//testimonial post type
	$labels = array(
		'name'                  => _x( 'testimonials ', 'testimonial', 'startup' ),
		'singular_name'         => _x( 'testimonials', 'testimonial', 'startup' ),
		'menu_name'             => _x( 'testimonial', 'testimonial', 'startup' ),
		'name_admin_bar'        => _x( 'testimonial', 'Add New on testimonial', 'startup' ),
		'add_new'               => __( 'Add New testimonial', 'startup' ),
		'add_new_item'          => __( 'Add New testimonial', 'startup' ),
		'new_item'              => __( 'New testimonial', 'startup' ),
		'edit_item'             => __( 'Edit testimonial', 'startup' ),
		'view_item'             => __( 'View testimonial', 'startup' ),
		'all_items'             => __( 'All testimonial', 'startup' ),
		'search_items'          => __( 'Search testimonial', 'startup' ),
		'parent_item_colon'     => __( 'Parent testimonial:', 'startup' ),
		'not_found'             => __( 'No testimonial found.', 'startup' ),
		'not_found_in_trash'    => __( 'No testimonial found in Trash.', 'startup' ),
		'featured_image'        => _x( 'testimonial Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'startup' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'startup' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'startup' )
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'book' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail' ),
	);
	register_post_type( 'testimonial', $args );

	//Team member post type
	$labels = array(
		'name'                  => _x( 'Team ', 'Team', 'startup' ),
		'singular_name'         => _x( 'Team', 'Team', 'startup' ),
		'menu_name'             => _x( 'Team', 'Team', 'startup' ),
		'name_admin_bar'        => _x( 'Team', 'Add New on Team', 'startup' ),
		'add_new'               => __( 'Add New Team', 'startup' ),
		'add_new_item'          => __( 'Add New Team', 'startup' ),
		'new_item'              => __( 'New Team', 'startup' ),
		'edit_item'             => __( 'Edit Team', 'startup' ),
		'view_item'             => __( 'View Team', 'startup' ),
		'all_items'             => __( 'All Team', 'startup' ),
		'search_items'          => __( 'Search Team', 'startup' ),
		'parent_item_colon'     => __( 'Parent Team:', 'startup' ),
		'not_found'             => __( 'No Team found.', 'startup' ),
		'not_found_in_trash'    => __( 'No Team found in Trash.', 'startup' ),
		'featured_image'        => _x( 'team Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'startup' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'startup' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'startup' )
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'book' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail' ),
	);
	register_post_type( 'team', $args );
}

add_action('init', 'startup_customize_post_sliders');
