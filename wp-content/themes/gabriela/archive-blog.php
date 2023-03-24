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
		<div class="titulo-pagina align">
			<h1>Blog</h1>
			<span>Café com a Psi</span>
		</div>	
		<section>
			<?php $args = array('post_type' => 'blog', 'posts_per_page' => get_option('posts_per_page'), 'paged' => get_query_var('paged', 6));
				$var = new WP_Query($args);
				if($var->have_posts()):
					while($var->have_posts()):
						$var->the_post();?>	
							<a href="<?php the_permalink()?>" class="card" rel="direciona para a página de conteúdo do item">		
								<div class="foto"><?php echo odin_thumbnail(460, 370, get_the_title(), true, false);?></div>
								<div class="box">
									<p class="data">Postado em <?php the_time('d\/m\/Y') ?></p>
									<h6><?php the_title()?></h6>
									<span class="botao"><p>Ler mais</p></span>
								</div>
							</a>
						<?php
					endwhile;
				endif;
			wp_reset_postdata(); 
			the_posts_pagination( 
				array(
					'mid_size'  => 5,
					'prev_text' => __( 
						'<svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.64995 10L6.82495 8.825L3.00829 5L6.82495 1.175L5.64995 -1.02722e-07L0.649951 5L5.64995 10Z" fill="#dcb4a0" fill-opacity="0.5"/></svg>'
					),
					'next_text' => __( 
						'<svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.35005 0L0.175049 1.175L3.99172 5L0.175049 8.825L1.35005 10L6.35005 5L1.35005 0Z" fill="#dcb4a0"/></svg>' 
					),
				) 
			); 
		?>
		</section>
	</main>
<?php get_footer();
