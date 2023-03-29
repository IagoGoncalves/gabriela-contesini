<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till #main div
 *
 * @package Odin
 * @since 2.2.0
 */
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="O amor pela psicologia foi transformado em uma missão de vida: levar saúde mental para o maior número de pessoas e fazê-las se sentirem acolhidas e respeitadas. Convido você para, através da psicoterapia, se apropriar da sua saúde mental e do seu bem-estar, afinal todo mundo merece ficar bem!"/>
    <meta name="abstract" content="O amor pela psicologia foi transformado em uma missão de vida: levar saúde mental para o maior número de pessoas e fazê-las se sentirem acolhidas e respeitadas. Convido você para, através da psicoterapia, se apropriar da sua saúde mental e do seu bem-estar, afinal todo mundo merece ficar bem!">
    <!-- Tags da empresa -->
    <meta name="keywords" content="psicologia clínica, psicoterapia, saúde mental, ansiedade, depressão, estresse, terapia cognitivo-comportamental, terapia de casal, psicologia infantil, desenvolvimento humano, psicologia organizaciona, resiliência, psicologia positiva, psicanálise, transtornos alimentares">
    <meta name="robots" content="index, follow"/>
    <meta name="rating" content="general">
	<meta name="distribution" content="global">
	<meta name="language" content="PT">
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php if ( ! get_option( 'site_icon' ) ) : ?>
		<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon" />
	<?php endif; ?>
	<?php wp_head(); ?>
	
	<script src = 'https://www.google.com/recaptcha/api.js?'></script>
</head>

<body <?php body_class(); ?>>
	<header id="header" class="header" role="banner">
		<div class="align agrupador">
			<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" alt="Gabriela Contesini" title="Gabriela Contesini">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg"/>
			</a>
			<ul class="menu">
				<li class="li-home"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
				<li class="li-sobre"><a href="<?php echo esc_url( home_url( 'sobre' ) ); ?>">Sobre</a></li>
				<li class="li-cafe"><a href="<?php echo esc_url( home_url( 'blog' ) ); ?>">Café com a PSI</a></li>
				<li class="li-contato"><a href="<?php echo esc_url( home_url( 'contato' ) ); ?>">Contato</a></li>
			</ul>
			<div class="navigation">
				<input type="checkbox" class="navigation__checkbox" id="nav-toggle">
				<label for="nav-toggle" class="navigation__button">
					<span class="navigation__icon" aria-label="toggle navigation menu"></span>
				</label>
				<div class="navigation__background"></div>

				<nav class="navigation__nav" role="navigation">
					<ul class="navigation__list">
						<li class="navigation__item">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navigation__link">Home</a>
						</li>
						<li class="navigation__item">
							<a href="<?php echo esc_url( home_url( 'sobre' ) ); ?>" class="navigation__link">Sobre</a>
						</li>
						<li class="navigation__item">
							<a href="<?php echo esc_url( home_url( 'blog' ) ); ?>" class="navigation__link">Café com a PSI</a>
						</li>
						<li class="navigation__item">
							<a href="<?php echo esc_url( home_url( 'contato' ) ); ?>" class="navigation__link">Contato</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
		<?php $var = new WP_Query(array('post_type' => 'dados','posts_per_page')); $var->the_post(); 
			$whatsapp =  get_post_meta( $post->ID,'whatsapp', true );
		wp_reset_postdata(); ?>
		<a class="contato" href="https://api.whatsapp.com/send?phone=55<?php echo $whatsapp ?>&text=Olá! Bem-vindo(a) ao meu WhatsApp. Sinta-se à vontade para enviar uma mensagem e agendar sua consulta. Vamos trabalhar juntos(as) em sua jornada de autoconhecimento e bem-estar emocional." alt="<?php echo $whatsapp ?>" title="<?php echo $whatsapp ?>" target="_blank">
			Entrar em contato
		</a>
	</header>