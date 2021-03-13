<?php
	add_action("wp_enqueue_scripts", "childhood_styles");
	add_action("wp_enqueue_scripts", "childhood_scripts");


	function childhood_styles(){
		//Подключение стилей
		wp_enqueue_style("childhood-style", get_stylesheet_uri());
	}
	function childhood_scripts(){
		//Подключение скриптов
		wp_enqueue_script( 'childhood-scripts', get_template_directory_uri() . "/assets/js/main.min.js", array(), null, true);

		//Отключение старой версии JQuery
		wp_deregister_script("jquery");
		//Подключение новой версии JQuery
		wp_register_script("jquery", "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js");
		wp_enqueue_script("jquery");

	}

	//Кастомный логотип
	add_theme_support( 'custom-logo' );
	//Превью для постов
	add_theme_support( 'post-thumbnails' );

	//Подключение Google API
	function my_acf_google_map_api( $api ){

	$api['key'] = 'AIzaSyDVD3Je6TPxAi_sdOWK2AycQUc4FG1p1zA'; // Ваш ключ Google API

	return $api;

	}

	add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

?>