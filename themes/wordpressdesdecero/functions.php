<?php 
// agregar un nuevo menú
function agregar_menu(){
register_nav_menu('principal',__('principal'));
}
// enganchamos el menú a wordpress
add_action('init','agregar_menu');
// función para mostrar menú
function mostrar_menu(){
wp_nav_menu([
    'principal'=>'principal',
    'li'=> 'navbar-nav',
    'a'=> 'nav-link'
    ]);
}
// función para controlar en excerpt
function excerpt_personalizado($length){
    return 20;
}
add_action('excerpt_length','excerpt_personalizado');
// añadir soporte thumbnails
add_theme_support('post-thumbnails');

// shortcode

function firma_guay(){
    return 'Soy José Ramón';
}
add_shortcode('firma', 'firma_guay');

?>