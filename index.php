<?php	
add_filter( 'comment_form_default_fields', function ($fields) {
	if ( isset( $fields['url'] ) ) {
		unset( $fields['url'] );
	}
	if ( isset( $fields['cookies'] ) ) {
		// Remove the website mention from the cookies checkbox label.
		$fields['cookies'] = str_replace('name, email, and website', 'name and email', $fields['cookies']);
	}
	return $fields;
}, 150 );
