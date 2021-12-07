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

function options_page_tits_output(){

	?>
<style>
	.setting, .setting .maintext {
    padding: 5px;
}
	.maintext {
    background: #eae99f;
}
	ul {
    list-style: disc inside;
	}
	p {    
    text-indent: 10px;
	}
</style>
	<div class="setting">
		<h1><?php echo get_admin_page_title() ?></h1>
		<h2><a href="https://github.com/seojacky/true-image-sizes" target="_blank">FAQ по плагину</a>			
		</h2>
		
		
				<form action="options.php" method="POST">
			<?php
				settings_fields( 'tits_option_group' );     // скрытые защитные поля
				do_settings_sections( 'tits_page' ); // секции с настройками (опциями). У нас она всего одна 'section_id'
				submit_button();
			?>	
		</form>
	<?php
}

/**
 * Регистрируем настройки.
 * Настройки будут храниться в массиве, а не одна настройка = одна опция.
 */
add_action('admin_init', 'tits_plugin_settings');
function tits_plugin_settings(){
	// параметры: $option_group, $ytsp_option, $sanitize_callback
	register_setting( 'tits_option_group', 'tits_option', 'tits_sanitize_callback' );

	// параметры: $id, $title, $callback, $page
	add_settings_section( 'section_id', 'Основные настройки', '', 'tits_page' ); 

	// параметры: $id, $title, $callback, $page, $section, $args
	add_settings_field('tits_field_checkbox_1x1', 'Добавить размер 1:1', 'fill_tits_field_checkbox_1x1', 'tits_page', 'section_id' );
	
	// параметры: $id, $title, $callback, $page, $section, $args
	add_settings_field('tits_field_checkbox_4x3', 'Добавить размер 4:3', 'fill_tits_field_checkbox_4x3', 'tits_page', 'section_id' );
	
		// параметры: $id, $title, $callback, $page, $section, $args
	add_settings_field('tits_field_checkbox_16x9', 'Добавить размер 16:9', 'fill_tits_field_checkbox_16x9', 'tits_page', 'section_id' );


}
/*data-tt="<?php echo $val['checkbox_1x1']; ?>" */
## Заполняем опции
function fill_tits_field_checkbox_1x1(){
	$val = get_option('tits_option');	
	$val = isset($val['checkbox_1x1']) ? $val['checkbox_1x1'] : null;
	?>
	<p><label><input type="checkbox" name="tits_option[checkbox_1x1]" value="1" <?php checked( 1, $val ); ?> /></label>
	</p>
		<p>Размеры: 640x640, 920x920, 1280x1280</p>
	<?php
}

function fill_tits_field_checkbox_4x3(){
	$val = get_option('tits_option');
	$val = isset($val['checkbox_4x3']) ? $val['checkbox_4x3'] : null;
	?>
	<p><label><input type="checkbox" name="tits_option[checkbox_4x3]" value="1" <?php checked( 1, $val ); ?> /></label></p>
		<p>Размеры: 640x480, 920x690, 1280x960</p>
	<?php
}


function fill_tits_field_checkbox_16x9(){
	$val = get_option('tits_option');
	$val = isset($val['checkbox_16x9']) ? $val['checkbox_16x9'] : null;
	?>
	<p><label><input type="checkbox" name="tits_option[checkbox_16x9]" value="1" <?php checked( 1, $val ); ?> /></label></p>
		<p>Размеры: 640x360, 920x518, 1280x720</p>
	<?php
}


## Очистка данных
function tits_sanitize_callback( $options ){
	
	if(!isset($options)) return ;
	// очищаем
	foreach( $options as $name => & $val ){

		if( $name == 'checkbox_1x1' )
			$val = intval( $val );
		
		if( $name == 'checkbox_4x3' )
			$val = intval( $val );
		
		if( $name == 'checkbox_16x9' )
			$val = intval( $val );		

	}

	
	return $options;
}

## default options
function tits_plugin_default_values(){
	$defaults = array(
		'tits_option' => array(
			'checkbox_1x1' => 0,
			'checkbox_4x3' => 0,
			'checkbox_16x9' => 0,
		),		
	);
	
	foreach ( $defaults as $section => $fields ) {
		add_option( $section, $fields,'', false );
	}
}
register_activation_hook( TITS_FILE, 'tits_plugin_default_values' );
