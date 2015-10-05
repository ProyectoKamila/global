<?php
include('library/main.php');
include('library/limited-caracter.php');

show_admin_bar( false );

function theme_custom_types() {
    add_custom_post_type(array(
        'type' => 'Aliados',
        'plural' => 'aliados'
    ));
    add_custom_post_type(array(
        'type' => 'directivos',
        'plural' => 'Talentos'
    ));
    add_custom_post_type(array(
        'type' => 'programacion',
        'plural' => 'programacion'
    ));
    
     /*
     add_custom_post_type(array(
        'type' => 'nosotros',
        'plural' => 'Nosotros'
    ));
    add_custom_taxonomy(array(
        'name' => 'categoria-nosotros',
        'singular' => 'Categoria',
        'genero' => 'f',
        'post_type' => 'nosotros',
        'hierarchical' => true
    ));
    */
}
if(function_exists('acf_add_options_page')){
    //acf_add_options_page('Opciones del tema');
    //acf_add_options_page();
    $page = array(
			'page_title' 	=> __('Personalizar Tema','acf'),
			'menu_title'	=> __('Personalizar Tema','acf'),
			'menu_slug' 	=> 'acf-options',
		);
		acf_add_options_page($page);
    acf_add_options_sub_page('Portada');
    acf_add_options_sub_page('Destacado');
    //acf_add_options_sub_page('Emisoras Aliadas');
    acf_add_options_sub_page('Aliados');
    acf_add_options_sub_page('Talentos');
    acf_add_options_sub_page('Programacion');
    acf_add_options_sub_page('Contacto');
}
