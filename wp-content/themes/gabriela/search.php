<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>
	<main id="search-page" class="search-page" tabindex="-1" role="main">
		<?php if ( have_posts() ) : ?>
			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'odin' ), get_search_query() ); ?></h1>
			</header><!-- .page-header -->
				<?php
					// Start the Loop.
					while ( have_posts() ) : the_post();

						/*
							* Include the post format-specific template for the content. If you want to
							* use this in a child theme, then include a file called called content-___.php
							* (where ___ is the post format) and that will be used instead.
							*/
						get_template_part( 'content', get_post_type() );

					endwhile;

					// Post navigation.
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
				else :
					// If no content, include the "No posts found" template.
					get_template_part( 'content', 'none' );

			endif;
		?>
	</main>
<?php
get_footer();
