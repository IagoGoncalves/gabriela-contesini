<?php

function custom_metabox() {
   global $post;
//Dados
   $post_metabox = new Odin_Metabox(
      'conteudo-dados', // Slug/ID of the Metabox (Required)
      'Contato', // Metabox name (Required)
      'dados', // Slug of Post Type (Optional)
      'normal', // Context (options: normal, advanced, or side) (Optional)
      'high' // Priority (options: high, core, default or low) (Optional)
   );
   $post_metabox->set_fields(
      array(   
      //contato  
         array(
            'id'          => 'telefone', // Obrigatório
            'label'       => __( 'Telefone:', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório
            'description' => __( 'Digite o numero com DDD ex.:(xx) xxxx-xxxx', 'odin' ),
            'attributes'  => array( // Optional (html input elements)
               'type' => 'tel'
            )
         ),
         array(
            'id'          => 'telefone1', // Obrigatório
            'label'       => __( 'Telefone :', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório
            'description' => __( 'Digite o numero com DDD ex.:(xx) xxxx-xxxx', 'odin' ),
            'attributes'  => array( // Optional (html input elements)
               'type' => 'tel'
            )
         ),
         array(
            'id'          => 'email', // Required
            'label'       => __( 'E-mail', 'odin' ), // Required
            'type'        => 'input', // Required
            'description' => __( 'Insira o e-mail', 'odin' ), // Optional
            'attributes'  => array( // Optional (html input elements)
               'type' => 'email'
            )
         ),
         array(
            'id'   => 'separator1', // Obrigatório
            'type' => 'separator' // Obrigatório
         ),
      //Rede Social
         array(
            'id'   => 'rede-social', // Required
            'label'=> __( 'Rede Social', 'odin' ), // Required
            'type' => 'title', // Required
         ),
         array(
            'id'          => 'instagram', // Obrigatório
            'label'       => __( 'Link do instagram:', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório         
         ),
         array(
            'id'          => 'facebook', // Obrigatório
            'label'       => __( 'Link do facebook:', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório         
         ),
         array(
            'id'          => 'linkedin', // Obrigatório
            'label'       => __( 'Link do linkedin:', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório         
         ),
      )
   );
//Empresa
   $post_metabox = new Odin_Metabox(
      'principios', // Slug/ID of the Metabox (Required)
      'Principios da empresa', // Metabox name (Required)
      'page', // Slug of Post Type (Optional)
      'normal', // Context (options: normal, advanced, or side) (Optional)
      'high', // Priority (options: high, core, default or low) (Optional)
      'page-empresa.php'
    );
    $post_metabox->set_fields(
      array(        
         array(
            'id'          => 'missao', // Obrigatório
            'label'       => __( 'Missão:', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório
         ),
         array(
            'id'          => 'visao', // Obrigatório
            'label'       => __( 'Visão:', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório
         ),
         array(
            'id'          => 'valores', // Obrigatório
            'label'       => __( 'Valores:', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório
         ),
      )
   );

}

add_action( 'init', 'custom_metabox', 1 );
