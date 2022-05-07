<?php
// Acionar Menu
add_theme_support( 'menu' );

function adicionarMenu(){
	register_nav_menu( 'menu-principal', __( ' Menu Principal' ) );
}
add_action( 'init', 'adicionarMenu' );

function my_custom_sizes() {
	// Nome da resolução, width, height, crop
	add_image_size( 'thumbnail-clinico', 210, 210,true);
	add_image_size( 'thumbnail-curso', 600, 400, true);
	add_image_size( 'convenios', 225,225, true);
  }
  add_action( 'after_setup_theme', 'my_custom_sizes' );

/*function remove_links_menu() {
//remove_menu_page('index.php'); // Painel
remove_menu_page('edit.php'); // Posts
remove_menu_page('upload.php'); // Media
remove_menu_page('link-manager.php'); // Links
remove_menu_page('edit.php?post_type=page'); // Paginas
remove_menu_page('edit-comments.php'); // Comentários
remove_menu_page('themes.php'); // Aparência
remove_menu_page('plugins.php'); // Plugins
remove_menu_page('users.php'); // Usuários
remove_menu_page('tools.php'); // Ferramentas
remove_menu_page('options-general.php'); // Configurações
}
add_action( 'admin_menu', 'remove_links_menu' );
*/


function tamanhos_personalizados(){
    add_image_size('medium', 255, 255, true);
}
add_action( 'after_setup_theme','tamanhos_personalizados');


// Custom Post Type

function custom_post_type_clinicos() {
	register_post_type('Clinicos', array(
		'label' => 'Clinicos',
		'description' => 'clinicos',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'corpo-clinico', 'with_front' => true),
		'query_var' => true,
		'supports' => array('title', 'page-attributes','post-formats'),

		'labels' => array (
			'name' => 'Clinicos',
			'singular_name' => 'Clinico',
			'menu_name' => 'Clinicos',
			'add_new' => 'Adicionar Novo',
			'add_new_item' => 'Adicionar Novo Clinico',
			'edit' => 'Editar',
			'edit_item' => 'Editar Clinico',
			'new_item' => 'Novo Clinico',
			'view' => 'Ver Clinico',
			'view_item' => 'Ver Clinico',
			'search_items' => 'Procurar clinicos',
			'not_found' => 'Nenhum Clinico Encontrado',
			'not_found_in_trash' => 'Nenhum Clinico Encontrado no Lixo',
		)
	));
}
add_action('init', 'custom_post_type_clinicos');

function custom_post_type_convenios() {
	register_post_type('Convenios', array(
		'label' => 'Convenios',
		'description' => 'convenios',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'corpo-clinico', 'with_front' => true),
		'query_var' => true,
		'supports' => array('title', 'page-attributes','post-formats'),

		'labels' => array (
			'name' => 'Convênios',
			'singular_name' => 'Convênio',
			'menu_name' => 'Convênios',
			'add_new' => 'Adicionar Novo',
			'add_new_item' => 'Adicionar Novo Convênio',
			'edit' => 'Editar',
			'edit_item' => 'Editar Convênio',
			'new_item' => 'Novo Convênio',
			'view' => 'Ver Convênio',
			'view_item' => 'Ver Convênio',
			'search_items' => 'Procurar Convênios',
			'not_found' => 'Nenhum Convênio Encontrado',
			'not_found_in_trash' => 'Nenhum Convênio Encontrado no Lixo',
		)
	));
}
add_action('init', 'custom_post_type_convenios');

function custom_post_type_cursos() {
	register_post_type('Cursos', array(
		'label' => 'Cursos',
		'description' => 'cursos',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'cursos', 'with_front' => true),
		'query_var' => true,
		'supports' => array('title', 'editor', 'page-attributes','post-formats'),

		'labels' => array (
			'name' => 'Cursos',
			'singular_name' => 'Curso',
			'menu_name' => 'Cursos',
			'add_new' => 'Adicionar Novo',
			'add_new_item' => 'Adicionar Novo Curso',
			'edit' => 'Editar',
			'edit_item' => 'Editar Curso',
			'new_item' => 'Novo Curso',
			'view' => 'Ver Curso',
			'view_item' => 'Ver Curso',
			'search_items' => 'Procurar Cursos',
			'not_found' => 'Nenhum Curso Encontrado',
			'not_found_in_trash' => 'Nenhum Curso Encontrado no Lixo',
		)
	));
}
add_action('init', 'custom_post_type_cursos');

function custom_post_type_unidades() {
	register_post_type('Unidades', array(
		'label' => 'Unidades',
		'description' => 'unidades',
		'public' => false,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		//'rewrite' => array('slug' => 'cursos', 'with_front' => true),
		'query_var' => true,
		'supports' => array('title', 'page-attributes','post-formats'),

		'labels' => array (
			'name' => 'Unidades',
			'singular_name' => 'Unidade',
			'menu_name' => 'Unidades',
			'add_new' => 'Adicionar Novo',
			'add_new_item' => 'Adicionar Nova Unidade',
			'edit' => 'Editar',
			'edit_item' => 'Editar Unidade',
			'new_item' => 'Nova Unidade',
			'view' => 'Ver Unidade',
			'view_item' => 'Ver Unidade',
			'search_items' => 'Procurar Unidades',
			'not_found' => 'Nenhuma Unidade Encontrada',
			'not_found_in_trash' => 'Nenhuma Unidade Encontrada no Lixo',
		)
	));
}
add_action('init', 'custom_post_type_unidades');
?>