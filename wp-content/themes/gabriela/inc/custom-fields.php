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
            'id'          => 'whatsapp', // Obrigatório
            'label'       => __( 'Whatsapp:', 'odin' ), // Obrigatório
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
//Banner
   $post_metabox = new Odin_Metabox(
      'conteudo-banner', // Slug/ID of the Metabox (Required)
      'Informações banner', // Metabox name (Required)
      'banner', // Slug of Post Type (Optional)
      'normal', // Context (options: normal, advanced, or side) (Optional)
      'high' // Priority (options: high, core, default or low) (Optional)
   );
   $post_metabox->set_fields(
      array(   
         array(
            'id'          => 'nome-btn', // Obrigatório
            'label'       => __( 'Nome do botão:', 'odin' ), // Obrigatório
            'type'        => 'text', // Obrigatório
         ),
         array(
            'id'          => 'url-btn', // Required
            'label'       => __( 'Direcionamento do botão:', 'odin' ), // Required
            'type'        => 'input', // Required
            'attributes'  => array( // Optional (html input elements)
               'type' => 'url'
            )
         ),
      )
   );
//Index
   $post_metabox = new Odin_Metabox(
      'pagina-inicial', // Slug/ID of the Metabox (Required)
      'Informações da página inicial', // Metabox name (Required)
      'page', // Slug of Post Type (Optional)
      'normal', // Context (options: normal, advanced, or side) (Optional)
      'high', // Priority (options: high, core, default or low) (Optional)
    );
    $post_metabox->set_fields(
      array(        
         array(
            'id'          => 'galeria-sobre', // Obrigatório
            'label'       => __( 'Galeria da seção sobre', 'odin' ), // Obrigatório
            'type'        => 'image_plupload', // Obrigatório
         )
      )
   );
//Servicos
   $post_metabox = new Odin_Metabox(
      'servico-field', // Slug/ID of the Metabox (Required)
      'Serviço', // Metabox name (Required)
      'servico', // Slug of Post Type (Optional)
      'normal', // Context (options: normal, advanced, or side) (Optional)
      'high' // Priority (options: high, core, default or low) (Optional)
   );
   $post_metabox->set_fields(
      array(
         array(
            'id'          => 'subtitulo', // Required
            'label'       => __( 'Subtítulo:', 'odin' ), // Required
            'type'        => 'text', // Required
         ),
         array(
            'id'          => 'topico1', // Required
            'label'       => __( 'Texto tópico 1:', 'odin' ), // Required
            'type'        => 'text', // Required
         ),
         array(
            'id'          => 'topico2', // Required
            'label'       => __( 'Texto tópico 2:', 'odin' ), // Required
            'type'        => 'text', // Required
         ),
         array(
            'id'          => 'topico3', // Required
            'label'       => __( 'Texto tópico 3:', 'odin' ), // Required
            'type'        => 'text', // Required
         ),
         array(
            'id'          => 'topico4', // Required
            'label'       => __( 'Texto tópico 4:', 'odin' ), // Required
            'type'        => 'text', // Required
         ),
         array(
            'id'          => 'topico5', // Required
            'label'       => __( 'Texto tópico 5:', 'odin' ), // Required
            'type'        => 'text', // Required
         ),
         array(
            'id'          => 'topico6', // Required
            'label'       => __( 'Texto tópico 6:', 'odin' ), // Required
            'type'        => 'text', // Required
         ),
         array(
            'id'          => 'topico7', // Required
            'label'       => __( 'Texto tópico 7:', 'odin' ), // Required
            'type'        => 'text', // Required
         ),
         array(
            'id'          => 'topico8', // Required
            'label'       => __( 'Texto tópico 8:', 'odin' ), // Required
            'type'        => 'text', // Required
         ),
      )
   );
}

add_action( 'init', 'custom_metabox', 1 );
