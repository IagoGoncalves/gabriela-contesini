<?php
/**
 * Template Name: Contato
 *
 * The template for displaying pages with sidebar.
 *
 * @package Odin
 * @since 2.2.0
 */
get_header();
?>
	<main id="contato" class="contato" tabindex="-1" role="main">
		<div class="titulo-pagina align">
			<h1><?php the_title()?></h1>
			<span>Contate-me</span>
		</div>	
		<?php $var = new WP_Query(array('post_type' => 'dados','posts_per_page')); $var->the_post(); 
			$whatsapp =  get_post_meta( $post->ID,'whatsapp', true );
			$telefone =  get_post_meta( $post->ID,'telefone', true );
			$email =  get_post_meta( $post->ID,'email', true );
		wp_reset_postdata(); ?>
		<section>
			<div class="info">
				<h2>Meus Contatos</h2>
				<?php if ($whatsapp != '') { ?> 
					<a class="whatsapp" href="https://api.whatsapp.com/send?phone=55<?php echo $whatsapp ?>&text=Olá! Bem-vindo(a) ao meu WhatsApp. Sinta-se à vontade para enviar uma mensagem e agendar sua consulta. Vamos trabalhar juntos(as) em sua jornada de autoconhecimento e bem-estar emocional." alt="<?php echo $whatsapp ?>" title="<?php echo $whatsapp ?>" target="_blank">
						<p><?php echo $whatsapp?></p>
					</a>
				<?php }?>
				<?php if ($telefone != '') { ?> 
					<a href="tel:<?php echo $telefone ?>" alt="<?php echo $telefone ?>" title="<?php echo $telefone ?>" target="_blank">    
						<p class="telefone"><?php echo $telefone?></p>
					</a>
				<?php }?>
				<?php if ($email != '') { ?> 
					<a href="mailto:<?php echo $email ?>" target="_blank">
						<p><?php echo $email?></p>
					</a>
				<?php }?>
			</div>
			<form class="contact2-form" id="contato" name="enviar-email" method="post">
				<input class="tipo-email" type="hidden" name="tipo-email" value="contato">

				<div class="campos">
					<input class="input2" type="text" name="name" required>
					<span class="focus-input2" data-placeholder="Nome Completo"></span>
				</div>

				<div class="group">
					<div class="campos">
						<input class="input2" type="email" name="email" required>
						<span class="focus-input2" data-placeholder="Seu e-mail"></span>					
					</div>

					<div class="campos">
						<input class="input2" type="text" name="telefone" required>
						<span class="focus-input2" data-placeholder="Telefone"></span>
					</div>
				</div>

				<div class="campos">
					<input class="input2" type="text" name="assunto" required>
					<span class="focus-input2" data-placeholder="Assunto"></span>
				</div>

				<div class="campos">
					<textarea class="input2 area" name="message" required></textarea>
					<span class="focus-input2" data-placeholder="Mensagem"></span>
				</div>
				
				<div class="agrupador">
					<div class="g-recaptcha_align campo4">
						<div class="g-recaptcha" data-sitekey="6LdbvDclAAAAAKiJJZAv52gR0LL4T0IQURZ5QXhi"></div>
					</div>	
					<script>
						window.onload = function() {
						var recaptcha = document.forms["contato"]["g-recaptcha-response"];
						recaptcha.required = true;
						recaptcha.oninvalid = function(e) {
							// fazer algo, no caso to dando um alert
							alert("Por favor, valide o formulario para continuar.");
							}
						}
					</script>		
					<div class="valida-envio"></div>
					<svg class="load" width="50" height="50" viewBox="0 0 135 135" xmlns="http://www.w3.org/2000/svg" fill="#dcb4a0">
						<path d="M67.447 58c5.523 0 10-4.477 10-10s-4.477-10-10-10-10 4.477-10 10 4.477 10 10 10zm9.448 9.447c0 5.523 4.477 10 10 10 5.522 0 10-4.477 10-10s-4.478-10-10-10c-5.523 0-10 4.477-10 10zm-9.448 9.448c-5.523 0-10 4.477-10 10 0 5.522 4.477 10 10 10s10-4.478 10-10c0-5.523-4.477-10-10-10zM58 67.447c0-5.523-4.477-10-10-10s-10 4.477-10 10 4.477 10 10 10 10-4.477 10-10z">
							<animateTransform
								attributeName="transform"
								type="rotate"
								from="0 67 67"
								to="-360 67 67"
								dur="2.5s"
								repeatCount="indefinite"/>
						</path>
						<path d="M28.19 40.31c6.627 0 12-5.374 12-12 0-6.628-5.373-12-12-12-6.628 0-12 5.372-12 12 0 6.626 5.372 12 12 12zm30.72-19.825c4.686 4.687 12.284 4.687 16.97 0 4.686-4.686 4.686-12.284 0-16.97-4.686-4.687-12.284-4.687-16.97 0-4.687 4.686-4.687 12.284 0 16.97zm35.74 7.705c0 6.627 5.37 12 12 12 6.626 0 12-5.373 12-12 0-6.628-5.374-12-12-12-6.63 0-12 5.372-12 12zm19.822 30.72c-4.686 4.686-4.686 12.284 0 16.97 4.687 4.686 12.285 4.686 16.97 0 4.687-4.686 4.687-12.284 0-16.97-4.685-4.687-12.283-4.687-16.97 0zm-7.704 35.74c-6.627 0-12 5.37-12 12 0 6.626 5.373 12 12 12s12-5.374 12-12c0-6.63-5.373-12-12-12zm-30.72 19.822c-4.686-4.686-12.284-4.686-16.97 0-4.686 4.687-4.686 12.285 0 16.97 4.686 4.687 12.284 4.687 16.97 0 4.687-4.685 4.687-12.283 0-16.97zm-35.74-7.704c0-6.627-5.372-12-12-12-6.626 0-12 5.373-12 12s5.374 12 12 12c6.628 0 12-5.373 12-12zm-19.823-30.72c4.687-4.686 4.687-12.284 0-16.97-4.686-4.686-12.284-4.686-16.97 0-4.687 4.686-4.687 12.284 0 16.97 4.686 4.687 12.284 4.687 16.97 0z">
							<animateTransform
								attributeName="transform"
								type="rotate"
								from="0 67 67"
								to="360 67 67"
								dur="8s"
								repeatCount="indefinite"/>
						</path>
					</svg>

					<div class="botao-enviar">
						<button class="botao" value="submit"><p>Enviar</p></button>
					</div>
				</div>
			</form>
		</section>
	</main>
<?php
get_footer();
