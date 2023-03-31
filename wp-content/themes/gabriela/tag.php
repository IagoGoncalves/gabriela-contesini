<?php
/**
 * The template for displaying Tag pages.
 *
 * Used to display archive-type pages for posts in a tag.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>
	<main id="search-tag" class="search-tag" tabindex="-1" role="main">
		<h1>Tag: <?php single_tag_title(); ?></h1>
		<?php
      		$current_tag = get_queried_object();
			$args = array(
				'post_type' => 'blog',
				'post_status' => 'publish',
				'orderby' => 'date',
				'order' => 'DESC',
				'tax_query' => array(
					array(
						'taxonomy' => 'post_tag',
						'field' => 'slug',
						'terms' => $current_tag->slug
					)
				)
			);
			$query = new WP_Query($args);
			if ($query->have_posts()) :
				while ($query->have_posts()) :
					$query->the_post(); ?>
						<div class="card mb-3">
							<div class="card-body">
								<h2 class="card-title"><?php the_title(); ?></h2>
								<p class="card-text"><?php the_excerpt(); ?></p>
								<a href="<?php the_permalink(); ?>" class="btn btn-primary">Ler mais</a>
							</div>
						</div>
					<?php
        		endwhile;
      		else :?>
        		<p>Nenhum post encontrado.</p>
			<?php endif;
      	wp_reset_postdata();?>
	</main>
<?php get_footer();
