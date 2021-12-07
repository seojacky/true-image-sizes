<?php
/*
 *****************************************************************
  Создаем страницу настроек плагина
****************************************************************
*/
/* Добавляем  с проверкой типовой пункт меню  WP Booster */
add_action('admin_menu', 'tits_creat_admin_page', 8, 0);

function tits_creat_admin_page(){	
	global $admin_page_hooks;	
	if (isset($admin_page_hooks['wp-booster'])  ) {
		return;
	}
	
add_menu_page(
        esc_html__('WP Booster', TITS_SLUG),
        esc_html_x('WP Booster', 'Menu item', TITS_SLUG),
		'manage_options',
		'wp-booster',
		'options_page_tits_output',
		'dashicons-backup',
		92.3 
            );
}	

add_action('admin_head', function(){
  	echo '<style>
    .toplevel_page_wp-booster li.wp-first-item {
    display: none;}
  </style>';
});

	add_action('admin_menu', function(){
	$submenu = add_submenu_page(
	'wp-booster',
	'Настройки плагина True Image & True Sizes',
	'<span class="dashicons dashicons-images-alt"></span>True Image & True Sizes',
	'manage_options',
	'tits_slug',
	'options_page_tits_output'
	);

}, 99 );
