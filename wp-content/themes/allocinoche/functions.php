<?php

add_action( 'wp_enqueue_scripts', 'ajout_scripts');

function ajout_scripts() {

// enregistrement d'un nouveau script {Bootstrap.js}
wp_register_script('bootstrap_script', get_template_directory_uri() . '/assets/scripts/bootstrap.min.js', array('jquery'),'1.1', true);
// appel du script dans la page
wp_enqueue_script('bootstrap_script');

// enregistrement d'un nouveau script {Main.js}
wp_register_script('main_js', get_template_directory_uri() . '/assets/scripts/main.js', array('jquery'),'1.1', true);
// appel du script dans la page
wp_enqueue_script('main_js');


// enregistrement d'un nouveau style {Bootstrap.css}
wp_register_style( 'bootstrap_style', get_template_directory_uri() . '/assets/styles/bootstrap.min.css' );
// appel du style dans la page
wp_enqueue_style( 'bootstrap_style' );

// enregistrement d'un nouveau style {Google font}
wp_register_style( 'google_font', get_template_directory_uri() . 'https://fonts.googleapis.com/css?family=Roboto:400,700|Slabo+27px' );
// appel du style dans la page
wp_enqueue_style( 'google_font' );

// enregistrement d'un nouveau style {Main.css}
wp_register_style( 'main_style', get_template_directory_uri() . '/assets/styles/main.css' );
// appel du style dans la page
wp_enqueue_style( 'main_style' );

}

add_action( 'wp_enqueue_scripts', 'ajout_scripts' );

?>
