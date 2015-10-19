<?php
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
// wp_enqueue_script( 'my-bootstrap-extension', get_template_directory_uri() . '/js/bootstrap.js', array(), '1'); 
// wp_enqueue_script( 'my-script', get_template_directory_uri() . '/js/script.js', array(), '1'); 
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
?>