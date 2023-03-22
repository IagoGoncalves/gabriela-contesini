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
            'description' => __( 'Exemplo: gabrielacontesini.com.br/sobre', 'odin' ), // Opcional
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
//Terapia online
   $post_metabox = new Odin_Metabox(
      'terapia-online-field', // Slug/ID of the Metabox (Required)
      'Terapia Online', // Metabox name (Required)
      'terapia-online', // Slug of Post Type (Optional)
      'normal', // Context (options: normal, advanced, or side) (Optional)
      'high' // Priority (options: high, core, default or low) (Optional)
   );
   $post_metabox->set_fields(
      array(
         array(
            'id'          => 'image1', // Required
            'label'       => __( 'Imagem 1:', 'odin' ), // Required
            'type'        => 'image', // Required
         ),
         array(
            'id'          => 'titulo1', // Required
            'label'       => __( 'Título 1:', 'odin' ), // Required
            'type'        => 'text', // Required
         ),
         array(
            'id'          => 'subtitulo1', // Required
            'label'       => __( 'Subtítulo 1:', 'odin' ), // Required
            'type'        => 'text', // Required
         ),
         array(
            'id'   => 'separator', // Obrigatório
            'type' => 'separator' // Obrigatório
         ),
         array(
            'id'          => 'image2', // Required
            'label'       => __( 'Imagem 2:', 'odin' ), // Required
            'type'        => 'image', // Required
         ),
         array(
            'id'          => 'titulo2', // Required
            'label'       => __( 'Título 2:', 'odin' ), // Required
            'type'        => 'text', // Required
         ),
         array(
            'id'          => 'subtitulo2', // Required
            'label'       => __( 'Subtítulo 2:', 'odin' ), // Required
            'type'        => 'text', // Required
         ),
         array(
            'id'   => 'separator1', // Obrigatório
            'type' => 'separator' // Obrigatório
         ),
         array(
            'id'          => 'image3', // Required
            'label'       => __( 'Imagem 3:', 'odin' ), // Required
            'type'        => 'image', // Required
         ),
         array(
            'id'          => 'titulo3', // Required
            'label'       => __( 'Título 3:', 'odin' ), // Required
            'type'        => 'text', // Required
         ),
         array(
            'id'          => 'subtitulo3', // Required
            'label'       => __( 'Subtítulo 3:', 'odin' ), // Required
            'type'        => 'text', // Required
         ),
         array(
            'id'   => 'separator1', // Obrigatório
            'type' => 'separator' // Obrigatório
         ),
         array(
            'id'          => 'beneficio1', // Required
            'label'       => __( 'Beneficio tópico 1:', 'odin' ), // Required
            'type'        => 'text', // Required
         ),
         array(
            'id'          => 'beneficio2', // Required
            'label'       => __( 'Beneficio tópico 2:', 'odin' ), // Required
            'type'        => 'text', // Required
         ),
         array(
            'id'          => 'beneficio3', // Required
            'label'       => __( 'Beneficio tópico 3:', 'odin' ), // Required
            'type'        => 'text', // Required
         ),
         array(
            'id'          => 'beneficio4', // Required
            'label'       => __( 'Beneficio tópico 4:', 'odin' ), // Required
            'type'        => 'text', // Required
         ),
      )
   );
//Sobre
   $post_metabox = new Odin_Metabox(
      'informativo', // Slug/ID of the Metabox (Required)
      'Descritivos', // Metabox name (Required)
      'page', // Slug of Post Type (Optional)
      'normal', // Context (options: normal, advanced, or side) (Optional)
      'high', // Priority (options: high, core, default or low) (Optional)
      'page-sobre.php'
   );
   $post_metabox->set_fields(
      array(        
         array(
            'id'          => 'bloco1', // Obrigatório
            'label'       => __( 'Bloco de texto 1:', 'odin' ), // Obrigatório
            'type'        => 'textarea', // Obrigatório
         ),
         array(
            'id'          => 'bloco2', // Obrigatório
            'label'       => __( 'Bloco de texto 2:', 'odin' ), // Obrigatório
            'type'        => 'textarea', // Obrigatório
         ),
         array(
            'id'          => 'bloco3', // Obrigatório
            'label'       => __( 'Bloco de texto 3:', 'odin' ), // Obrigatório
            'type'        => 'textarea', // Obrigatório
         ),
      )
   );
//Café com a PSI
   $post_metabox = new Odin_Metabox(
      'blog-field', // Slug/ID of the Metabox (Required)
      'field-blog', // Metabox name (Required)
      'blog', // Slug of Post Type (Optional)
      'normal', // Context (options: normal, advanced, or side) (Optional)
      'high' // Priority (options: high, core, default or low) (Optional)
   );
   $post_metabox->set_fields(
      array(
         array(
            'id'          => 'video', // Required
            'label'       => __( 'Vídeo:', 'odin' ), // Required
            'type'        => 'editor', // Required
         ),
      )
   );
}

add_action( 'init', 'custom_metabox', 1 );
