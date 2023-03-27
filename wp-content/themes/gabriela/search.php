<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>

	<main id="content" class="<?php echo odin_classes_page_sidebar(); ?>" tabindex="-1" role="main">
	<?php if ( have_posts() ) : ?>
    <h1>Search Results for: <?php echo get_search_query(); ?></h1>
    <ul>
    <?php while ( have_posts() ) : the_post(); ?>
        <li>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <?php the_excerpt(); ?>
        </li>
    <?php endwhile; ?>
    </ul>
<?php else : ?>
    <h1>No results found for: <?php echo get_search_query(); ?></h1>
<?php endif; ?>


	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
