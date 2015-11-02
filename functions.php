<?php
define('TM_DIR', get_template_directory(__FILE__)); 
define('TM_URL', get_template_directory_uri(__FILE__)); 

require_once TM_DIR . '/lib/Parser.php';

 function add_style_wt(){ 
wp_enqueue_style( 'my-styles', get_template_directory_uri() . '/css/styles.css', array(), '1'); 
wp_enqueue_style( 'fotorama', 'http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css', array(), '1');
wp_enqueue_style( 'jq-ui', '//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css', array(), '1');

} 

function add_script_wt(){ 
wp_enqueue_script( 'jq', '//code.jquery.com/jquery-1.11.3.min.js', array(), '1');
wp_enqueue_script( 'jq-ui', '//code.jquery.com/ui/1.11.4/jquery-ui.js', array(), '1');
wp_enqueue_script( 'bPopup',  get_template_directory_uri() . '/js/jquery.bpopup.min.js', array(), '1'); 
wp_enqueue_script( 'my-jquery', get_template_directory_uri() . '/js/jq.js', array('jq'), '1'); 
wp_enqueue_script( 'cookies', get_template_directory_uri() . '/js/jquery.cookie.js', array('jq'), '1'); 
wp_enqueue_script( 'ya_map', 'https://api-maps.yandex.ru/2.1/?lang=ru_RU', array(), '1'); 
wp_enqueue_script( 'init', get_template_directory_uri() . '/js/init.js', array('ya_map'), '1'); 
wp_enqueue_script( 'fotorama', 'http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js', array('jq'), '1');

} 

function add_admin_script(){ 
	wp_enqueue_script( 'jq', '//code.jquery.com/jquery-1.11.3.min.js', array(), '1');
	wp_enqueue_script('admin',get_template_directory_uri() . '/js/admin.js', array('jq'), '1'); 
// wp_enqueue_style( 'my-bootstrap-extension-admin', get_template_directory_uri() . '/css/bootstrap.css', array(), '1'); 
//wp_enqueue_style( 'my-style-admin', get_template_directory_uri() . '/css/admin.css', array(), '1'); 

} 

add_action('admin_enqueue_scripts', 'add_admin_script'); 



add_action( 'wp_enqueue_scripts', 'add_style_wt' ); 
add_action( 'wp_enqueue_scripts', 'add_script_wt' );


//add page-shortcodes
//contacts
add_shortcode('contacts', 'contacts_fn');
function contacts_fn(){
	$parser = new Parser();
	$parser->render(TM_DIR.'/views/contacts.php', array(), true);
}
//slider
add_shortcode('slider', 'slider_views_fn');
function slider_views_fn(){
	$parser = new Parser();
	$parser->render(TM_DIR.'/views/slider-views.php', array(), true);
}
//specialization-front
add_shortcode('specialization_front', 'specialization_front_views_fn');
function specialization_front_views_fn(){
	$parser = new Parser();
	$parser->render(TM_DIR.'/views/specialization-front-views.php', array(), true);
}
//specialization-header-menu
add_shortcode('specialization_header_menu', 'specialization_header_menu_views_fn');
function specialization_header_menu_views_fn(){
	$parser = new Parser();
	$parser->render(TM_DIR.'/views/specialization-header-menu-views.php', array(), true);
}
add_shortcode('select-form', 'c7_form_fn');
function c7_form_fn(){
	$parser = new Parser();
	return $parser->render(TM_DIR.'/views/c7-form-views.php', array(), false);
}
//add_menu_page(page_title, menu_title, access_level/capability, file, [function]);

register_nav_menus(array( 
'header_menu' => 'Меню в шапке', 
));



// Custom page types
add_action('init', 'my_custom_init'); 

function my_custom_init() 
{ 

//specialization
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

//staff
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

//slider
$labels = array( 
	'name' => 'Слайдер', // Основное название типа записи 
	'singular_name' => 'Слайдер', // отдельное название записи типа Book 
	'add_new' => 'Добавить слайдер', 
	'add_new_item' => 'Добавить новый слайдер', 
	'edit_item' => 'Редактировать слайдер', 
	'new_item' => 'Новый слайдер', 
	'view_item' => 'Посмотреть слайдер', 
	'search_items' => 'Найти слайдер', 
	'not_found' => 'Слайдер не найдено', 
	'menu_name' => 'Слайдер' 
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
	'supports' => array('title', 'thumbnail') 
); 

register_post_type('slider', $args); 
} 

// подключаем функцию активации мета блока в слайдере(my_extra_fields)
add_action('add_meta_boxes', 'my_extra_fields', 1);

function my_extra_fields() {
	add_meta_box( 'extra_fields', 'Дополнительные поля', 'extra_fields_box_func', 'slider', 'normal', 'high'  );
}

// код блока
function extra_fields_box_func( $post ){
	?>
	<p>Дата</p><input type="text" name="extra[date]" value="<?php echo get_post_meta($post->ID, 'date', 1); ?>" style="width:50%" />

	<input type="hidden" name="extra_fields_nonce" value="<?php echo wp_create_nonce(__FILE__); ?>" />
	<?php
}

// включаем обновление полей при сохранении
add_action('save_post', 'my_extra_fields_update', 0);

/* Сохраняем данные, при сохранении поста */
function my_extra_fields_update( $post_id ){
	if ( !wp_verify_nonce($_POST['extra_fields_nonce'], __FILE__) ) return false; // проверка
	if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE  ) return false; // если это автосохранение
	if ( !current_user_can('edit_post', $post_id) ) return false; // если юзер не имеет право редактировать запись

	if( !isset($_POST['extra']) ) return false;	

	// Все ОК! Теперь, нужно сохранить/удалить данные
	$_POST['extra'] = array_map('trim', $_POST['extra']);
	foreach( $_POST['extra'] as $key=>$value ){
		if( empty($value) ){
			delete_post_meta($post_id, $key); // удаляем поле если значение пустое
			continue;
		}

		update_post_meta($post_id, $key, $value); // add_post_meta() работает автоматически
	}
	return $post_id;
}


// подключаем функцию активации мета блока в специадбности(specialization_extra_fields)
add_action('add_meta_boxes', 'specialization_extra_fields', 1);

function specialization_extra_fields() {
	add_meta_box( 'extra_fields', 'Дополнительные поля', 'specialization_extra_fields_box_func', 'specialization', 'normal', 'high'  );
}

// код блока
function specialization_extra_fields_box_func( $post ){
if (function_exists('wp_enqueue_media')) { 
wp_enqueue_media(); 
} else { 
wp_enqueue_style('thickbox'); 
wp_enqueue_script('media-upload'); 
wp_enqueue_script('thickbox'); 
}
	?>

	<p>Количество часов</p>
	<input type="text" name="extra[hours]" value="<?php echo get_post_meta($post->ID, 'hours', 1); ?>" style="width:50%" />

	<p>Цена</p>
	<input type="text" name="extra[cost]" value="<?php echo get_post_meta($post->ID, 'cost', 1); ?>" style="width:50%" />

	<p>Заголовок на главной</p>
	<input type="text" name="extra[front-title]" value="<?php echo get_post_meta($post->ID, 'front-title', 1); ?>" style="width:50%" />

	<p>Категория</p>
	<select name="extra[category]">
		<option value="1" <?php if((get_post_meta($post->ID, 'category', 1)==1)){ echo "selected";} ?>>Факультет менеджмента</option>
		<option value="2" <?php if((get_post_meta($post->ID, 'category', 1)==2)){ echo "selected";} ?>>Факультет дизайна</option>
		<option value="3" <?php if((get_post_meta($post->ID, 'category', 1)==3)){ echo "selected";} ?>>Заочное обучение</option>
	</select>

	<p>Форма обучения</p>
	<select name="extra[form]">
		<option value="1"<?php if((get_post_meta($post->ID, 'form', 1)==1)){ echo "selected";} ?>>Очное отделение</option>
		<option value="2"<?php if((get_post_meta($post->ID, 'form', 1)==2)){ echo "selected";} ?>>Заочное отделение</option>
	</select>
	
	<p>Картинка на главной</p>
	<div class="col-lg-6"> 
		<img src="<?php echo get_post_meta($post->ID, 'image', 1); ?>" alt="" class=" media"> 
		<button class="btn btn-info media-upload"><span class="glyphicon glyphicon-picture"> Выбрать изображение</span></button> 
		<input type="hidden" class="media-img" name="extra[image]" value="<?php echo get_post_meta($post->ID, 'image', 1); ?>"> 
	</div>

	<p>Картинка на главной-hover</p>
	<div class="col-lg-6"> 
		<img src="<?php echo get_post_meta($post->ID, 'image-hover', 1); ?>" alt="" class=" media"> 
		<button class="btn btn-info media-upload"><span class="glyphicon glyphicon-picture"> Выбрать изображение</span></button> 
		<input type="hidden" class="media-img" name="extra[image-hover]" value="<?php echo get_post_meta($post->ID, 'image-hover', 1); ?>"> 
	</div>


	<input type="hidden" name="extra_fields_nonce" value="<?php echo wp_create_nonce(__FILE__); ?>" />
	<?php
}

// включаем обновление полей при сохранении
add_action('save_post', 'specialization_extra_fields_update', 0);

/* Сохраняем данные, при сохранении поста */
function specialization_extra_fields_update( $post_id ){
	if ( !wp_verify_nonce($_POST['extra_fields_nonce'], __FILE__) ) return false; // проверка
	if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE  ) return false; // если это автосохранение
	if ( !current_user_can('edit_post', $post_id) ) return false; // если юзер не имеет право редактировать запись

	if( !isset($_POST['extra']) ) return false;	

	// Все ОК! Теперь, нужно сохранить/удалить данные
	$_POST['extra'] = array_map('trim', $_POST['extra']);
	foreach( $_POST['extra'] as $key=>$value ){
		if( empty($value) ){
			delete_post_meta($post_id, $key); // удаляем поле если значение пустое
			continue;
		}

		update_post_meta($post_id, $key, $value); // add_post_meta() работает автоматически
	}
	return $post_id;
}
//contact 7 shortcodes
function shortcodes_in_cf7( $form ) {
	$form = do_shortcode( $form );
	return $form;
}
add_filter( 'wpcf7_form_elements', 'shortcodes_in_cf7' );


//Search-form
do_action( 'pre_get_search_form' );
$format = apply_filters( 'search_form_format', $format );
$result = apply_filters( 'get_search_form', $form );

	
if (function_exists('add_theme_support')) 
add_theme_support('post-thumbnails');
?>