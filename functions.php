<?php
define('TM_DIR', get_template_directory(__FILE__)); 
define('TM_URL', get_template_directory_uri(__FILE__)); 

require_once TM_DIR . '/lib/Parser.php';

 function add_style_wt(){ 
// wp_enqueue_style( 'my-bootstrap-extension', get_template_directory_uri() . '/css/bootstrap.css', array(), '1'); 
// wp_enqueue_style( 'my-styles', get_template_directory_uri() . '/css/style.css', array(), '1'); 
// wp_enqueue_style( 'my-sass', get_template_directory_uri() . '/sass/style.css', array('my-styles'), '1'); 
// wp_enqueue_style( 'fotorama', get_template_directory_uri() . '/css/fotorama.css', array('my-styles'), '1'); 
// wp_enqueue_style( 'fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/cs..', array('my-styles'), '1'); 
wp_enqueue_style( 'my-styles', get_template_directory_uri() . '/css/styles.css', array(), '1'); 
wp_enqueue_style( 'fotorama', 'http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css', array(), '1');
} 

function add_script_wt(){ 
wp_enqueue_script( 'jq', '//code.jquery.com/jquery-1.11.3.min.js', array(), '1');
wp_enqueue_script( 'fotorama', 'http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js', array(), '1'); 
wp_enqueue_script( 'my-jquery', get_template_directory_uri() . '/js/jq.js', array('jq'), '1'); 
wp_enqueue_script( 'ya_map', 'https://api-maps.yandex.ru/2.1/?lang=ru_RU', array(), '1'); 
wp_enqueue_script( 'init', get_template_directory_uri() . '/js/init.js', array('ya_map'), '1'); 
// wp_enqueue_script( 'fotorama-js', get_template_directory_uri() . '/js/fotorama.js', array(), '1'); 

} 

// function add_admin_script(){ 
// //wp_enqueue_script('admin',get_template_directory_uri() . '/js/admin.js', array(), '1'); 
// wp_enqueue_style( 'my-bootstrap-extension-admin', get_template_directory_uri() . '/css/bootstrap.css', array(), '1'); 
// //wp_enqueue_style( 'my-style-admin', get_template_directory_uri() . '/css/admin.css', array(), '1'); 

// } 

//add_action('admin_enqueue_scripts', 'add_admin_script'); 

add_action( 'wp_enqueue_scripts', 'add_style_wt' ); 
add_action( 'wp_enqueue_scripts', 'add_script_wt' );

add_shortcode('contacts', 'contacts_fn');
//add_menu_page(page_title, menu_title, access_level/capability, file, [function]);

register_nav_menus(array( 
'header_menu' => 'Меню в шапке', 
));
function contacts_fn(){
	$parser = new Parser();
	$parser->render(TM_DIR.'/views/contacts.php', array(), true);
}


// Преподы
add_action('init', 'my_custom_init'); 

function my_custom_init() 
{ 
$labels = array( 
	'name' => 'Специальности', // Основное название типа записи 
	'singular_name' => 'Специальность', // отдельное название записи типа Book 
	'add_new' => 'Добавить специальность', 
	'add_new_item' => 'Добавить нового специальность', 
	'edit_item' => 'Редактировать специальность', 
	'new_item' => 'Новая специальность', 
	'view_item' => 'Посмотреть специальность', 
	'search_items' => 'Найти специальность', 
	'not_found' => 'Специальностей не найдено', 
	'menu_name' => 'Специальности' 
); 
$args = array( 
	'labels' => $labels, 
	'public' => true, 
	'publicly_queryable' => true, 
	'show_ui' => true, 
	'show_in_menu' => true, 
	'query_var' => true, 
	'rewrite' => true, 
	'capability_type' => 'post', 
	'has_archive' => true, 
	'hierarchical' => false, 
	'menu_position' => null, 
	'supports' => array('title', 'editor', 'thumbnail') 
); 
register_post_type('specialization', $args); 

$labels = array( 
	'name' => 'Преподователи', // Основное название типа записи 
	'singular_name' => 'Преподователь', // отдельное название записи типа Book 
	'add_new' => 'Добавить Преподователя', 
	'add_new_item' => 'Добавить нового Преподователя', 
	'edit_item' => 'Редактировать Преподователя', 
	'new_item' => 'Новый Преподователь', 
	'view_item' => 'Посмотреть Преподователя', 
	'search_items' => 'Найти Преподователя', 
	'not_found' => 'Преподователей не найдено', 
	'menu_name' => 'Преподователи' 
); 
$args = array( 
	'labels' => $labels, 
	'public' => true, 
	'publicly_queryable' => true, 
	'show_ui' => true, 
	'show_in_menu' => true, 
	'query_var' => true, 
	'rewrite' => true, 
	'capability_type' => 'post', 
	'has_archive' => true, 
	'hierarchical' => false, 
	'menu_position' => null, 
	'supports' => array('title', 'editor', 'thumbnail') 
); 
register_post_type('staff', $args); 
} 

do_action( 'pre_get_search_form' );
$format = apply_filters( 'search_form_format', $format );
$result = apply_filters( 'get_search_form', $form );

	
if (function_exists('add_theme_support')) 
add_theme_support('post-thumbnails');
?>