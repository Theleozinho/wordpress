<?php
//ativiando o suporte para imagem destacada 
add_theme_support('post-thumbnails');

//Ativiando menu dinamico 
function registra_menu() {
    register_nav_menus(
        array(
            'header-menu' => __('Menu principal'),
        )
    );
}
add_action('init', 'registra_menu');


//meus post types


function meus_posts_type(){
    //sobre
    register_post_type(
        'sobre',
        array(
            'labels' => array(
                'name'    => __('Sobre')
            ),
            'public'     => true,
            'has_archive' => true,
            'menu_icon'   => 'dashicons-bank',
            'supports'    =>  array(
                            'title',
                            'editor',
                            'thumbnail', 
                            'page-attributes'
            ),
        )
    );


     //sobre
     register_post_type(
       'Contato',
        array('labels' => array('name'    => __('Contato')),
            'public'     => true,
            'has_archive' => true,
            'menu_icon'   => 'dashicons-email',
            'supports'    =>  array(
                            'title',
                            'thumbnail', 
                            'page-attributes'
            ),
        )
    );
}



add_action('init', 'meus_posts_type');