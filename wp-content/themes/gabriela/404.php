<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>

	<main id="erro404" class="page-erro404" tabindex="-1" role="main">
		<h2>Página não encontrada</h2>
		<p class="desc">Não encontramos a página que você tentou acessar.</p>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="botao" rel="direicona para a página de início"><p>Acessar a home</p></a>
	</main>
<?php
get_footer();
