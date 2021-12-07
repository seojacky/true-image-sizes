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

require_once TITS_DIR . '/functions.php';
require_once TITS_DIR . '/setting-page.php';
