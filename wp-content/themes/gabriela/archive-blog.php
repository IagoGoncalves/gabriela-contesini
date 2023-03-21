<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Thirteen
 * already has tag.php for Tag archives, category.php for Category archives,
 * and author.php for Author archives.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>
	<main id="blog" class="blog" tabindex="-1" role="main">
		<h1>Blog</h1>
		<section>
			<?php $args = array('post_type' => 'cafe','posts_per_page' => -1);
				$var = new WP_Query($args);
				if($var->have_posts()):
					while($var->have_posts()):
						$var->the_post();?>	
							<div class="card">		
								<p class="data">Postado em <?php the_time('d\/m\/Y') ?></p>
								<?php echo odin_thumbnail(460, 370, get_the_title(), true, false);?>
								<h5><?php the_title()?></h5>
								<a href="" class="botao"><p>Ler mais</p></a>
							</div>
						<?php
					endwhile;
				endif;
			wp_reset_postdata(); ?>
		</section>
	</main>
<?php
get_footer();
