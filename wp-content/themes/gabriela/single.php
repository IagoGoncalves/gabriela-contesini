<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>
	<main id="single-blog" class="interna-blog" tabindex="-1" role="main">
		<article>
			<h1><?php the_title()?></h1>
			<div class="social">
				<p class="data align">
					<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M22.2 22.8H7.8C6.78 22.8 6 22.02 6 21V7.8C6 6.78 6.66 6 7.5 6H8.4V7.2H7.5C7.38 7.2 7.2 7.44 7.2 7.8V21C7.2 21.36 7.44 21.6 7.8 21.6H22.2C22.56 21.6 22.8 21.36 22.8 21V7.8C22.8 7.44 22.62 7.2 22.5 7.2H21.6V6H22.5C23.34 6 24 6.78 24 7.8V21C24 22.02 23.22 22.8 22.2 22.8Z" fill="#A9A9A9"/>
						<path d="M10.2002 8.4C9.8402 8.4 9.6002 8.16 9.6002 7.8V5.4C9.6002 5.04 9.8402 4.8 10.2002 4.8C10.5602 4.8 10.8002 5.04 10.8002 5.4V7.8C10.8002 8.16 10.5602 8.4 10.2002 8.4ZM19.8002 8.4C19.4402 8.4 19.2002 8.16 19.2002 7.8V5.4C19.2002 5.04 19.4402 4.8 19.8002 4.8C20.1602 4.8 20.4002 5.04 20.4002 5.4V7.8C20.4002 8.16 20.1602 8.4 19.8002 8.4ZM12.0002 6H18.0002V7.2H12.0002V6ZM7.2002 9.6H22.8002V10.8H7.2002V9.6ZM20.4002 12H21.6002V13.2H20.4002V12ZM18.0002 12H19.2002V13.2H18.0002V12ZM15.6002 12H16.8002V13.2H15.6002V12ZM13.2002 12H14.4002V13.2H13.2002V12ZM10.8002 12H12.0002V13.2H10.8002V12ZM20.4002 14.4H21.6002V15.6H20.4002V14.4ZM18.0002 14.4H19.2002V15.6H18.0002V14.4ZM15.6002 14.4H16.8002V15.6H15.6002V14.4ZM13.2002 14.4H14.4002V15.6H13.2002V14.4ZM10.8002 14.4H12.0002V15.6H10.8002V14.4ZM8.4002 14.4H9.6002V15.6H8.4002V14.4ZM20.4002 16.8H21.6002V18H20.4002V16.8ZM18.0002 16.8H19.2002V18H18.0002V16.8ZM15.6002 16.8H16.8002V18H15.6002V16.8ZM13.2002 16.8H14.4002V18H13.2002V16.8ZM10.8002 16.8H12.0002V18H10.8002V16.8ZM8.4002 16.8H9.6002V18H8.4002V16.8ZM18.0002 19.2H19.2002V20.4H18.0002V19.2ZM15.6002 19.2H16.8002V20.4H15.6002V19.2ZM13.2002 19.2H14.4002V20.4H13.2002V19.2ZM10.8002 19.2H12.0002V20.4H10.8002V19.2ZM8.4002 19.2H9.6002V20.4H8.4002V19.2Z" fill="#A9A9A9"/>
					</svg>
					<?php the_time('d \d\e F \d\e Y') ?>
				</p>
				<p class="align">
					<svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M15 20C14.1667 20 13.4583 19.7083 12.875 19.125C12.2917 18.5417 12 17.8333 12 17C12 16.8833 12.0083 16.7623 12.025 16.637C12.0417 16.5123 12.0667 16.4 12.1 16.3L5.05 12.2C4.76667 12.45 4.45 12.6457 4.1 12.787C3.75 12.929 3.38333 13 3 13C2.16667 13 1.45833 12.7083 0.875 12.125C0.291667 11.5417 0 10.8333 0 10C0 9.16667 0.291667 8.45833 0.875 7.875C1.45833 7.29167 2.16667 7 3 7C3.38333 7 3.75 7.07067 4.1 7.212C4.45 7.354 4.76667 7.55 5.05 7.8L12.1 3.7C12.0667 3.6 12.0417 3.48767 12.025 3.363C12.0083 3.23767 12 3.11667 12 3C12 2.16667 12.2917 1.45833 12.875 0.875C13.4583 0.291667 14.1667 0 15 0C15.8333 0 16.5417 0.291667 17.125 0.875C17.7083 1.45833 18 2.16667 18 3C18 3.83333 17.7083 4.54167 17.125 5.125C16.5417 5.70833 15.8333 6 15 6C14.6167 6 14.25 5.929 13.9 5.787C13.55 5.64567 13.2333 5.45 12.95 5.2L5.9 9.3C5.93333 9.4 5.95833 9.51233 5.975 9.637C5.99167 9.76233 6 9.88333 6 10C6 10.1167 5.99167 10.2373 5.975 10.362C5.95833 10.4873 5.93333 10.6 5.9 10.7L12.95 14.8C13.2333 14.55 13.55 14.354 13.9 14.212C14.25 14.0707 14.6167 14 15 14C15.8333 14 16.5417 14.2917 17.125 14.875C17.7083 15.4583 18 16.1667 18 17C18 17.8333 17.7083 18.5417 17.125 19.125C16.5417 19.7083 15.8333 20 15 20Z" fill="#A9A9A9"/>
					</svg>
					Compartilhar
				</p>
			</div>
			<?php 
				$video = get_post_meta( $post->ID,'video', true );
				if ($video == "") {
					echo odin_thumbnail(1100, 550, get_the_title(), true, false);
				}else{?>
					<video width="994" height="600" controls>
						<source src="<?php echo $video?>" type="video/mp4">
					</video>
				<?php }
			?>
			<div class="conteudo"><?php the_content()?></div>
			<a href="#" onclick='history.go(-1)' class="botao"><p>Voltar</p></a>
		</article>
		<aside>
			<form method="get" class="navbar-form navbar-right" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
				<h4>Procurar</h4>
				<div class="form-group">
					<input type="search" value="<?php echo get_search_query(); ?>" class="form-control" name="s" id="navbar-search" placeholder="Pesquisar no site"/>
				</div>
				<button type="submit" class="btn btn-default"><?php _e( 'Search', 'odin' ); ?></button>
			</form>
			<div class="post-recentes">
				<h4>Posts Recentes</h4>
				<?php $args = array('post_type' => 'blog','posts_per_page' => 3);
					$var = new WP_Query($args);
					if($var->have_posts()):
						while($var->have_posts()):
							$var->the_post();?>	
								<div>		
									<a href="<?php the_permalink()?>" class="box">
										<h5><?php the_title()?></h5>
										<p class="data"><?php the_time('d \d\e F \d\e Y') ?></p>
									</a>
								</div>
							<?php
						endwhile;
					endif;
				wp_reset_postdata(); ?>
			</div>
			<div class="tags">
				<h4>Tags</h4>
				<?php the_tags('', '')?>
			</div>
		</aside>
	</main>
<?php
get_footer();
