<?php

function type_post_porsonalizados() {
//Dados
   $dados = new Odin_Post_Type(
      'Dados',
      'dados'
   );
   $dados->set_labels(
      array( 'menu_name' => __( 'Dados', 'odin' ))
   );
   $dados->set_arguments(
      array(
         'public' => true,
         'supports' => array('title','editor','author','revisions'),
         'has_archive' => true,
         'menu_icon' => 'dashicons-id',
         'show_in_nav_menus'   => true,
            'show_in_rest' => true
      )
   );
//Banner
   $banner = new Odin_Post_Type(
      'Banner',
      'banner'
   );
   $banner->set_labels(
      array( 'menu_name' => __( 'Banners', 'odin' ))
   );
   $banner->set_arguments(
      array(
         'public' => true,
         'supports' => array('title','thumbnail','author','revisions', 'editor'),
         'has_archive' => true,
         'menu_icon' => 'dashicons-images-alt',
         'show_in_rest' => true
      )
   );
}


add_action('init', 'type_post_porsonalizados', 1);

