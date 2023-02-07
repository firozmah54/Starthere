<?php 


function startup_move_comment_field( $fields ) {
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    $fields['comment'] = $comment_field;
    return $fields;
}
add_filter( 'comment_form_fields', 'startup_move_comment_field' );



/**
 * Comment Form Fields Placeholder
 *
 */
function be_comment_form_fields( $fields ) {
	foreach( $fields as &$field ) {
		$field = str_replace( 'id="author"', 'id="author" placeholder="Your name"', $field );
		$field = str_replace( 'id="email"', 'id="email" placeholder="Your email"', $field );
		$field = str_replace( 'id="url"', 'id="url" placeholder="Website"', $field );
	}
	return $fields;
}
add_filter( 'comment_form_default_fields', 'be_comment_form_fields' );


/**
 * Change comment form textarea to use placeholder
 *
 * @since  1.0.0
 * @param  array $args
 * @return array
 */
function Startup_comment_textarea_placeholder( $args ) {
	$args['comment_field']        = str_replace( 'textarea', 'textarea placeholder="Comment"', $args['comment_field'] );
	return $args;
}
add_filter( 'comment_form_defaults', 'Startup_comment_textarea_placeholder' );



// change submit button text in wordpress comment form
function wcs_change_submit_button_text( $defaults ) {
    $defaults['label_submit'] = 'Leave a comment';
    return $defaults;
}
add_filter( 'comment_form_defaults', 'wcs_change_submit_button_text' );