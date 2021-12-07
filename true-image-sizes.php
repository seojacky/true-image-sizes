<?php
/*
 * Plugin name: True Image & True Sizes
 * Description: Плагин для генерации набора изображений в соотношениях сторон 1:1, 4:3, 16:9.
 * Version: 0.3
 * Author: @big_jacky 
 * Author URI: https://t.me/big_jacky
 * Plugin URI: https://github.com/seojacky/true-image-sizes
 * GitHub Plugin URI: https://github.com/seojacky/true-image-sizes
 * Domain Path: /languages
*/
/* Exit if accessed directly */
if ( ! defined( 'ABSPATH' ) ) {	return;}

// ВАЖНЫЕ ПЕРЕМЕННЫЕ!
define('TITS__PLUGIN_URL', trailingslashit(plugin_dir_url(__FILE__))); // Урл папки плагина. Для подключения картинок и скриптов из внутренних папок (со слешем в конце)
define('TITS__PLUGIN_DIR', trailingslashit(plugin_dir_path(__FILE__))); // Системный путь до папки плагина, нужен для include_once
define('TITS_FILE', __FILE__); // Путь до главного (то есть до этого) файла плагина

define('TITS_SLUG', 'true-image-sizes');
define('TITS_DIR',  __DIR__);

require_once DBSC_DIR . '/functions.php';

add_image_size( '4x3_640x480', '640', '480', true );
add_image_size( '4x3_920x690', '920', '690', true );
add_image_size( '4x3_1280x960', '1280', '960', true );
add_image_size( '16x9_640x360', '640', '360', true );
add_image_size( '16x9_920x518', '920', '518', true );
add_image_size( '16x9_1280x720', '1280', '720', true );
add_image_size( '1x1_640x640', '640', '640', true );
add_image_size( '1x1_920x920', '920', '920', true );
add_image_size( '1x1_1280x1280', '1280', '1280', true );

add_filter( 'image_size_names_choose', function ( $sizes ) {
	return array_merge( $sizes, array(
		'4x3_640x480' => 'Размер 4x3_640x480',
		'4x3_920x690' => 'Размер 4x3_920x690',
		'4x3_1280x960' => 'Размер 4x3_1280x960',
		'16x9_640x360' => 'Размер 16x9_640x360',
		'16x9_920x518' => 'Размер 16x9_920x518',
		'16x9_1280x720' => 'Размер 16x9_1280x720',
		'1x1_640x640' => 'Размер 1x1_640x640',
		'1x1_920x920' => 'Размер 1x1_920x920',
		'1x1_1280x1280' => 'Размер 1x1_1280x1280',
	) );
});
