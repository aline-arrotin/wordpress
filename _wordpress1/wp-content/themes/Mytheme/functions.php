<?php
/****Activation des modules ****/
//Ajouter une image à la une.
add_theme_support('post-thumbnails');
add_theme_support('more-tag');
add_theme_support('post-formats', array('aside', 'image', 'video', 'quote', 'audio','link','chat', 'state'));


//Déclarer un menu.

register_nav_menus( array(
	'primary' => 'menu principal',
	'second' => 'menu secondaire'
	));

//Filtres

function my_get_search_form() {
	$form = '<form action"'.get_bloginfo("url").'>';
	$form.= '<input name="s" type="search" value="'.get_search_query().'" placeholder="Vos mots clés">';
	$form.= '<input type="submit" value ="Rechercher">';
	$form.= '</form>';
	return $form;
}

add_filter('get_search_form', 'my_get_search_form');

//Modification de la longeur de l'excerpt.

function new_excerpt_length($length) {
    return 9;
}
add_filter('excerpt_length', 'new_excerpt_length');

/****End filters****/

/****Chargements des scripts****/

function my_register_scripts(){
	if(!is_admin()) :
	wp_deregister_script('jquery');
	wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js', false, '1.11.2', true);
	wp_enqueue_script("jquery");
	endif;
	wp_register_scritp('myScript', bloginfo('template_url').'js/main.js', array('jquery'), '1.0', true);
	wp_enqueue_script("myScript");

	add_action('init', 'register_jquery');
}

/****End of scripts****/

//Mes fonctions.
//Pour savoir sur quel page(template) nous sommes.
function affTemplate($template) {
	echo '<div id="affTemplate">'.$template.'</div>';
}

function myPrint_r($variable){
	echo "<pre>";
	print_r($variable);
	echo "</pre>";
}