<?php


	$all_options = get_option('tits_option');

/* Add sizes 1:1 */	
if( isset($all_options['checkbox_1x1']) && $all_options['checkbox_1x1'] == '1')
	{
		add_image_size( '1x1_640x640', '640', '640', true );
		add_image_size( '1x1_920x920', '920', '920', true );
		add_image_size( '1x1_1280x1280', '1280', '1280', true );
		
		add_filter( 'image_size_names_choose', function ( $sizes ) {
	return array_merge( $sizes, array(
		'1x1_640x640' => 'Размер 1x1_640x640',
		'1x1_920x920' => 'Размер 1x1_920x920',
		'1x1_1280x1280' => 'Размер 1x1_1280x1280',
	) );
});
	}

/* Add sizes 4:3 */	
if( isset($all_options['checkbox_4x3']) && $all_options['checkbox_4x3'] == '1')
	{
	add_image_size( '4x3_640x480', '640', '480', true );
	add_image_size( '4x3_920x690', '920', '690', true );
	add_image_size( '4x3_1280x960', '1280', '960', true );
		
		add_filter( 'image_size_names_choose', function ( $sizes ) {
	return array_merge( $sizes, array(
		'4x3_640x480' => 'Размер 4x3_640x480',
		'4x3_920x690' => 'Размер 4x3_920x690',
		'4x3_1280x960' => 'Размер 4x3_1280x960',
	) );
});
	}

/* Add sizes 16:9 */	
if( isset($all_options['checkbox_16x9']) && $all_options['checkbox_16x9'] == '1')
	{
	add_image_size( '16x9_640x360', '640', '360', true );
	add_image_size( '16x9_920x518', '920', '518', true );
	add_image_size( '16x9_1280x720', '1280', '720', true );
		
		add_filter( 'image_size_names_choose', function ( $sizes ) {
	return array_merge( $sizes, array(
		'16x9_640x360' => 'Размер 16x9_640x360',
		'16x9_920x518' => 'Размер 16x9_920x518',
		'16x9_1280x720' => 'Размер 16x9_1280x720',
	) );
});
	}