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
//Serviços
   $servico = new Odin_Post_Type(
      'Serviço',
      'servico'
   );
   $servico->set_labels(
      array( 'menu_name' => __( 'Serviços', 'odin' ))
   );
   $servico->set_arguments(
      array(
         'public' => true,
         'supports' => array('title','thumbnail','author','revisions' , 'editor'),
         'has_archive' => true,
         'show_in_nav_menus'   => true,
         'menu_icon' => 'dashicons-media-text',
         'show_in_rest' => true
      )
   );
//Terapia online
   $terapiaOnline = new Odin_Post_Type(
      'Terapia Online',
      'terapia-online'
   );
   $terapiaOnline->set_labels(
      array( 'menu_name' => __( 'Terapia Online', 'odin' ))
   );
   $terapiaOnline->set_arguments(
      array(
         'public' => true,
         'supports' => array('title', 'author','revisions', 'editor'),
         'has_archive' => true,
         'show_in_nav_menus'   => true,
         'menu_icon' => 'dashicons-nametag',
         'show_in_rest' => true
      )
   );
//Café
   $cafe = new Odin_Post_Type(
      'Café',
      'cafe'
   );
   $cafe->set_labels(
      array( 'menu_name' => __( 'Café com a PSI', 'odin' ))
   );
   $cafe->set_arguments(
      array(
         'public' => true,
         'supports' => array('title','thumbnail','author','revisions' , 'editor'),
         'has_archive' => true,
         'show_in_nav_menus'   => true,
         'menu_icon' => 'dashicons-coffee',
         'show_in_rest' => true,
         'taxonomies' => array('post_tag')
      )
   );
}


add_action('init', 'type_post_porsonalizados', 1);

