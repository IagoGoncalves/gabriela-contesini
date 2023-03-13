<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>
	<main id="home" class="home" tabindex="-1" role="main">
	<?php for ($i=0; $i < 70; $i++) { 
		echo'<h1>teste</h1>';
	}?>	
	</main>
<?php
get_footer();
