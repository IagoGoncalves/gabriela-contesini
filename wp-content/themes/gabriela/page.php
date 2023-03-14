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
		<section class="banner">
			<div class="swiper-container swiper-banner">
				<div class="swiper-wrapper">
					<?php
						$args = array('post_type' => 'banner','posts_per_page' => 3);
							$var = new WP_Query($args);
							if($var->have_posts()):
								while($var->have_posts()):
									$var->the_post();?>																	
										<div class="swiper-slide">
											<div class="box-descritivo" data-swiper-parallax="-1600">
												<h2><?php the_title(); ?></h2>
												<h5><?php the_content(); ?></h5>	
											</div>	
											<div class="foto-banner" data-swiper-parallax="0">
												<?php echo odin_thumbnail(1920, 900, get_the_title(), false, true);?>
											</div>		
										</div>	
									<?php
								endwhile;
							endif;
						wp_reset_postdata(); 
					?>
				</div> 
				<div class="swiper-pagination"></div>
			</div>
		</section>
	</main>
<?php
get_footer();
