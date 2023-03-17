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
		<?php $var = new WP_Query(array('post_type' => 'dados','posts_per_page')); $var->the_post(); 
			$instagram =  get_post_meta( $post->ID,'instagram', true );
			$whatsapp =  get_post_meta( $post->ID,'whatsapp', true );
		 wp_reset_postdata(); ?>
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
											<div class="box-descritivo">
												<h2><?php the_title(); ?></h2>
												<h5><?php the_content(); ?></h5>	
												<a class="botao" href="<?php echo get_post_meta( $post->ID,'url-btn', true )?>" target="_blank">
													<p><?php echo get_post_meta( $post->ID,'nome-btn', true )?></p>
												</a>
											</div>	
											<div class="foto-banner">
												<?php echo odin_thumbnail(1920, 900, get_the_title(), true, false);?>
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
		<section class="sobre-desktop">
			<div class="imagem">
				<div class="swiper-container swiper-banner">
					<div class="swiper-wrapper">
						<?php 
							$galeria = get_post_meta( $post->ID,'galeria-sobre', true );					
							$galeria = explode(",", $galeria);
							foreach ( $galeria as $foto ) { ?>					
							<div class="swiper-slide">
								<img src="<?php echo odin_get_image_url( $foto, 580, 670, true,true);?>" alt="<?php echo get_the_title($foto); ?>">
							</div>	
						<?php }?>
					</div> 
					<div class="swiper-pagination"></div>
				</div>
			</div>
			<aside>
				<h2>Gabriela Domingues Contesini</h2>
				<h5>CRP 06/152232</h5>
				<?php the_content()?>
				<div>
					<a href="<?php echo $instagram ?>" class="instagram" alt="Instagram" title="Instagram" target="_blank">
						<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M9.34999 0.166626H22.65C27.7167 0.166626 31.8333 4.28329 31.8333 9.34996V22.65C31.8333 25.0855 30.8658 27.4213 29.1436 29.1436C27.4214 30.8658 25.0856 31.8333 22.65 31.8333H9.34999C4.28332 31.8333 0.166656 27.7166 0.166656 22.65V9.34996C0.166656 6.91439 1.13418 4.57857 2.85639 2.85636C4.5786 1.13415 6.91442 0.166626 9.34999 0.166626ZM9.03332 3.33329C7.52159 3.33329 6.07177 3.93383 5.00281 5.00278C3.93386 6.07174 3.33332 7.52156 3.33332 9.03329V22.9666C3.33332 26.1175 5.88249 28.6666 9.03332 28.6666H22.9667C24.4784 28.6666 25.9282 28.0661 26.9972 26.9971C28.0661 25.9282 28.6667 24.4784 28.6667 22.9666V9.03329C28.6667 5.88246 26.1175 3.33329 22.9667 3.33329H9.03332ZM24.3125 5.70829C24.8374 5.70829 25.3408 5.91681 25.712 6.28798C26.0831 6.65914 26.2917 7.16255 26.2917 7.68746C26.2917 8.21237 26.0831 8.71578 25.712 9.08694C25.3408 9.45811 24.8374 9.66663 24.3125 9.66663C23.7876 9.66663 23.2842 9.45811 22.913 9.08694C22.5418 8.71578 22.3333 8.21237 22.3333 7.68746C22.3333 7.16255 22.5418 6.65914 22.913 6.28798C23.2842 5.91681 23.7876 5.70829 24.3125 5.70829ZM16 8.08329C18.0996 8.08329 20.1133 8.91737 21.5979 10.402C23.0826 11.8867 23.9167 13.9003 23.9167 16C23.9167 18.0996 23.0826 20.1132 21.5979 21.5979C20.1133 23.0826 18.0996 23.9166 16 23.9166C13.9004 23.9166 11.8867 23.0826 10.4021 21.5979C8.9174 20.1132 8.08332 18.0996 8.08332 16C8.08332 13.9003 8.9174 11.8867 10.4021 10.402C11.8867 8.91737 13.9004 8.08329 16 8.08329ZM16 11.25C14.7402 11.25 13.532 11.7504 12.6412 12.6412C11.7504 13.532 11.25 14.7402 11.25 16C11.25 17.2597 11.7504 18.4679 12.6412 19.3587C13.532 20.2495 14.7402 20.75 16 20.75C17.2598 20.75 18.4679 20.2495 19.3587 19.3587C20.2495 18.4679 20.75 17.2597 20.75 16C20.75 14.7402 20.2495 13.532 19.3587 12.6412C18.4679 11.7504 17.2598 11.25 16 11.25Z" fill="#A9A9A9"/>
						</svg>
					</a>
					<a class="whatsapp" href="https://api.whatsapp.com/send?phone=55<?php echo $whatsapp ?>&text=Olá, vim pelo site Gabriela Contesini" alt="<?php echo $whatsapp ?>" title="<?php echo $whatsapp ?>" target="_blank">
						<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M27.1625 4.77422C25.7109 3.30794 23.9819 2.14536 22.0762 1.3543C20.1706 0.563241 18.1266 0.159532 16.0633 0.16672C7.41832 0.16672 0.372486 7.21255 0.372486 15.8576C0.372486 18.6284 1.10082 21.3201 2.46249 23.6951L0.245819 31.8334L8.55832 29.6484C10.8542 30.8992 13.435 31.5642 16.0633 31.5642C24.7083 31.5642 31.7542 24.5184 31.7542 15.8734C31.7542 11.6776 30.1233 7.73505 27.1625 4.77422ZM16.0633 28.9042C13.72 28.9042 11.4242 28.2709 9.41332 27.0834L8.93832 26.7984L3.99832 28.0967L5.31249 23.2834L4.99582 22.7926C3.69392 20.7136 3.00262 18.3105 3.00082 15.8576C3.00082 8.66922 8.85915 2.81089 16.0475 2.81089C19.5308 2.81089 22.8083 4.17255 25.2625 6.64255C26.4777 7.85216 27.4407 9.29093 28.0957 10.8755C28.7507 12.46 29.0847 14.1588 29.0783 15.8734C29.11 23.0617 23.2517 28.9042 16.0633 28.9042ZM23.22 19.1509C22.8242 18.9609 20.8925 18.0109 20.5442 17.8684C20.18 17.7417 19.9267 17.6784 19.6575 18.0584C19.3883 18.4542 18.6442 19.3409 18.4225 19.5942C18.2008 19.8634 17.9633 19.8951 17.5675 19.6892C17.1717 19.4992 15.905 19.0717 14.4167 17.7417C13.245 16.6967 12.4692 15.4142 12.2317 15.0184C12.01 14.6226 12.2 14.4167 12.4058 14.2109C12.58 14.0367 12.8017 13.7517 12.9917 13.5301C13.1817 13.3084 13.2608 13.1342 13.3875 12.8809C13.5142 12.6117 13.4508 12.3901 13.3558 12.2001C13.2608 12.0101 12.4692 10.0784 12.1525 9.28672C11.8358 8.52672 11.5033 8.62172 11.2658 8.60589H10.5058C10.2367 8.60589 9.82499 8.70089 9.46082 9.09672C9.11249 9.49255 8.09915 10.4426 8.09915 12.3742C8.09915 14.3059 9.50832 16.1742 9.69832 16.4276C9.88832 16.6967 12.4692 20.6551 16.3958 22.3492C17.33 22.7609 18.0583 22.9984 18.6283 23.1726C19.5625 23.4734 20.4175 23.4259 21.0983 23.3309C21.8583 23.2201 23.4258 22.3809 23.7425 21.4626C24.075 20.5442 24.075 19.7684 23.9642 19.5942C23.8533 19.4201 23.6158 19.3409 23.22 19.1509Z" fill="#A9A9A9"/>
						</svg>
					</a>
				</div>
				<a href="" class="botao"><p>Saiba Mais</p></a>
			</aside>
		</section>
		<section class="sobre-mobile">
			<h2>Gabriela Domingues Contesini</h2>
			<h5>CRP 06/152232</h5>
			<div class="imagem">
				<div class="swiper-container swiper-banner">
					<div class="swiper-wrapper">
						<?php 
							$galeria = get_post_meta( $post->ID,'galeria-sobre', true );					
							$galeria = explode(",", $galeria);
							foreach ( $galeria as $foto ) { ?>					
							<div class="swiper-slide">
								<img src="<?php echo odin_get_image_url( $foto, 420, 510, true,true);?>" alt="<?php echo get_the_title($foto); ?>">
							</div>	
						<?php }?>
					</div> 
					<div class="swiper-pagination"></div>
				</div>
			</div>
			<aside>
				<?php the_content()?>
				<div>
					<a href="<?php echo $instagram ?>" class="instagram" alt="Instagram" title="Instagram" target="_blank">
						<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M9.34999 0.166626H22.65C27.7167 0.166626 31.8333 4.28329 31.8333 9.34996V22.65C31.8333 25.0855 30.8658 27.4213 29.1436 29.1436C27.4214 30.8658 25.0856 31.8333 22.65 31.8333H9.34999C4.28332 31.8333 0.166656 27.7166 0.166656 22.65V9.34996C0.166656 6.91439 1.13418 4.57857 2.85639 2.85636C4.5786 1.13415 6.91442 0.166626 9.34999 0.166626ZM9.03332 3.33329C7.52159 3.33329 6.07177 3.93383 5.00281 5.00278C3.93386 6.07174 3.33332 7.52156 3.33332 9.03329V22.9666C3.33332 26.1175 5.88249 28.6666 9.03332 28.6666H22.9667C24.4784 28.6666 25.9282 28.0661 26.9972 26.9971C28.0661 25.9282 28.6667 24.4784 28.6667 22.9666V9.03329C28.6667 5.88246 26.1175 3.33329 22.9667 3.33329H9.03332ZM24.3125 5.70829C24.8374 5.70829 25.3408 5.91681 25.712 6.28798C26.0831 6.65914 26.2917 7.16255 26.2917 7.68746C26.2917 8.21237 26.0831 8.71578 25.712 9.08694C25.3408 9.45811 24.8374 9.66663 24.3125 9.66663C23.7876 9.66663 23.2842 9.45811 22.913 9.08694C22.5418 8.71578 22.3333 8.21237 22.3333 7.68746C22.3333 7.16255 22.5418 6.65914 22.913 6.28798C23.2842 5.91681 23.7876 5.70829 24.3125 5.70829ZM16 8.08329C18.0996 8.08329 20.1133 8.91737 21.5979 10.402C23.0826 11.8867 23.9167 13.9003 23.9167 16C23.9167 18.0996 23.0826 20.1132 21.5979 21.5979C20.1133 23.0826 18.0996 23.9166 16 23.9166C13.9004 23.9166 11.8867 23.0826 10.4021 21.5979C8.9174 20.1132 8.08332 18.0996 8.08332 16C8.08332 13.9003 8.9174 11.8867 10.4021 10.402C11.8867 8.91737 13.9004 8.08329 16 8.08329ZM16 11.25C14.7402 11.25 13.532 11.7504 12.6412 12.6412C11.7504 13.532 11.25 14.7402 11.25 16C11.25 17.2597 11.7504 18.4679 12.6412 19.3587C13.532 20.2495 14.7402 20.75 16 20.75C17.2598 20.75 18.4679 20.2495 19.3587 19.3587C20.2495 18.4679 20.75 17.2597 20.75 16C20.75 14.7402 20.2495 13.532 19.3587 12.6412C18.4679 11.7504 17.2598 11.25 16 11.25Z" fill="#A9A9A9"/>
						</svg>
					</a>
					<a class="whatsapp" href="https://api.whatsapp.com/send?phone=55<?php echo $whatsapp ?>&text=Olá, vim pelo site Gabriela Contesini" alt="<?php echo $whatsapp ?>" title="<?php echo $whatsapp ?>" target="_blank">
						<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M27.1625 4.77422C25.7109 3.30794 23.9819 2.14536 22.0762 1.3543C20.1706 0.563241 18.1266 0.159532 16.0633 0.16672C7.41832 0.16672 0.372486 7.21255 0.372486 15.8576C0.372486 18.6284 1.10082 21.3201 2.46249 23.6951L0.245819 31.8334L8.55832 29.6484C10.8542 30.8992 13.435 31.5642 16.0633 31.5642C24.7083 31.5642 31.7542 24.5184 31.7542 15.8734C31.7542 11.6776 30.1233 7.73505 27.1625 4.77422ZM16.0633 28.9042C13.72 28.9042 11.4242 28.2709 9.41332 27.0834L8.93832 26.7984L3.99832 28.0967L5.31249 23.2834L4.99582 22.7926C3.69392 20.7136 3.00262 18.3105 3.00082 15.8576C3.00082 8.66922 8.85915 2.81089 16.0475 2.81089C19.5308 2.81089 22.8083 4.17255 25.2625 6.64255C26.4777 7.85216 27.4407 9.29093 28.0957 10.8755C28.7507 12.46 29.0847 14.1588 29.0783 15.8734C29.11 23.0617 23.2517 28.9042 16.0633 28.9042ZM23.22 19.1509C22.8242 18.9609 20.8925 18.0109 20.5442 17.8684C20.18 17.7417 19.9267 17.6784 19.6575 18.0584C19.3883 18.4542 18.6442 19.3409 18.4225 19.5942C18.2008 19.8634 17.9633 19.8951 17.5675 19.6892C17.1717 19.4992 15.905 19.0717 14.4167 17.7417C13.245 16.6967 12.4692 15.4142 12.2317 15.0184C12.01 14.6226 12.2 14.4167 12.4058 14.2109C12.58 14.0367 12.8017 13.7517 12.9917 13.5301C13.1817 13.3084 13.2608 13.1342 13.3875 12.8809C13.5142 12.6117 13.4508 12.3901 13.3558 12.2001C13.2608 12.0101 12.4692 10.0784 12.1525 9.28672C11.8358 8.52672 11.5033 8.62172 11.2658 8.60589H10.5058C10.2367 8.60589 9.82499 8.70089 9.46082 9.09672C9.11249 9.49255 8.09915 10.4426 8.09915 12.3742C8.09915 14.3059 9.50832 16.1742 9.69832 16.4276C9.88832 16.6967 12.4692 20.6551 16.3958 22.3492C17.33 22.7609 18.0583 22.9984 18.6283 23.1726C19.5625 23.4734 20.4175 23.4259 21.0983 23.3309C21.8583 23.2201 23.4258 22.3809 23.7425 21.4626C24.075 20.5442 24.075 19.7684 23.9642 19.5942C23.8533 19.4201 23.6158 19.3409 23.22 19.1509Z" fill="#A9A9A9"/>
						</svg>
					</a>
				</div>
				<a href="" class="botao"><p>Saiba Mais</p></a>
			</aside>
		</section>
		<section class="servico">
			<?php $args = array('post_type' => 'servico','posts_per_page' => 3);
				$var = new WP_Query($args);
				if($var->have_posts()):
					while($var->have_posts()):
						$var->the_post();?>			
							<div class="agrupador">
								<div class="box-descritivo">
									<?php $subtitulo = get_post_meta( $post->ID,'subtitulo', true )?>
									<?php $topico1 = get_post_meta( $post->ID,'topico1', true )?>
									<?php $topico2 = get_post_meta( $post->ID,'topico2', true )?>
									<?php $topico3 = get_post_meta( $post->ID,'topico3', true )?>
									<?php $topico4 = get_post_meta( $post->ID,'topico4', true )?>
									<?php $topico5 = get_post_meta( $post->ID,'topico5', true )?>
									<?php $topico6 = get_post_meta( $post->ID,'topico6', true )?>
									<?php $topico7 = get_post_meta( $post->ID,'topico7', true )?>
									<?php $topico8 = get_post_meta( $post->ID,'topico8', true )?>
									<h5><?php echo $subtitulo?></h5>
									<h3><?php the_title(); ?></h3>
									<?php the_content(); ?>
									<article class="topicos">
										<div class="primeira-coluna">
											<?php if ($topico1 != "") {?>	 
												<p class="topico-lista"><img src='<?php echo get_template_directory_uri(); ?>/assets/images/verificado.svg'/> <?php echo $topico1 ?></p>
											<?php }	
											if ($topico2 != "") {?>	 
												<p class="topico-lista"><img src='<?php echo get_template_directory_uri(); ?>/assets/images/verificado.svg'/> <?php echo $topico2 ?></p>
											<?php }
											if ($topico3 != "") {?>	 
												<p class="topico-lista"><img src='<?php echo get_template_directory_uri(); ?>/assets/images/verificado.svg'/> <?php echo $topico3 ?></p>
											<?php }	
											if ($topico4 != "") {?>	 
												<p class="topico-lista"><img src='<?php echo get_template_directory_uri(); ?>/assets/images/verificado.svg'/> <?php echo $topico4 ?></p>
											<?php }?>	
										</div>
										<div class="segunda-coluna">
											<?php if ($topico5 != "") {?>	 
												<p class="topico-lista"><img src='<?php echo get_template_directory_uri(); ?>/assets/images/verificado.svg'/> <?php echo $topico5 ?></p>
											<?php }	
											if ($topico6 != "") {?>	 
												<p class="topico-lista"><img src='<?php echo get_template_directory_uri(); ?>/assets/images/verificado.svg'/> <?php echo $topico6 ?></p>
											<?php }
											if ($topico7 != "") {?>	 
												<p class="topico-lista"><img src='<?php echo get_template_directory_uri(); ?>/assets/images/verificado.svg'/> <?php echo $topico7 ?></p>
											<?php }	
											if ($topico8 != "") {?>	 
												<p class="topico-lista"><img src='<?php echo get_template_directory_uri(); ?>/assets/images/verificado.svg'/> <?php echo $topico8 ?></p>
											<?php }?>
										</div>
									</article>
									<a class="botao" href="https://api.whatsapp.com/send?phone=55<?php echo $whatsapp ?>&text=Olá, vim pelo site Gabriela Contesini" alt="<?php echo $whatsapp ?>" title="<?php echo $whatsapp ?>" target="_blank">
										<p>Agende uma consulta!</p>
									</a>
								</div>	
								<div class="foto">
									<?php echo odin_thumbnail(760, 674, get_the_title(), true, false);?>
								</div>	
							</div>
						<?php
					endwhile;
				endif;
			wp_reset_postdata(); ?>
		</section>
		<section class="terapia-online">
			<?php $var = new WP_Query(array('post_type' => 'terapia-online','posts_per_page')); $var->the_post(); 
				$titulo1 = get_post_meta( $post->ID,'titulo1', true );
				$subtitulo1 = get_post_meta( $post->ID,'subtitulo1', true );
				$titulo2 = get_post_meta( $post->ID,'titulo2', true );
				$subtitulo2 = get_post_meta( $post->ID,'subtitulo2', true );
				$titulo3 = get_post_meta( $post->ID,'titulo3', true );
				$subtitulo3 = get_post_meta( $post->ID,'subtitulo3', true );
				$beneficio1 = get_post_meta( $post->ID,'beneficio1', true );
				$beneficio2 = get_post_meta( $post->ID,'beneficio2', true );
				$beneficio3 = get_post_meta( $post->ID,'beneficio3', true );
				$beneficio4 = get_post_meta( $post->ID,'beneficio4', true );
				?>
				<div class="agrupador align">
					<div class="topicos">
						<div class="box box1">
							<?php $foto = get_post_meta( $post->ID,'image1', true );?>				
							<img src="<?php echo odin_get_image_url( $foto, 120, 120, false, true);?>" >
							<span>
								<h5><?php echo $titulo1?></h5>
								<h6><?php echo $subtitulo1?></h6>
							</span>
						</div>
						<div class="box box2">
							<?php $foto = get_post_meta( $post->ID,'image2', true );?>				
							<img src="<?php echo odin_get_image_url( $foto, 120, 120, false, true);?>" >
							<span>
								<h5><?php echo $titulo2?></h5>
								<h6><?php echo $subtitulo2?></h6>
							</span>
						</div>
						<div class="box box3">
							<?php $foto = get_post_meta( $post->ID,'image3', true );?>				
							<img src="<?php echo odin_get_image_url( $foto, 120, 120, false, true);?>" >
							<span>
								<h5><?php echo $titulo3?></h5>
								<h6><?php echo $subtitulo3?></h6>
							</span>
						</div>
					</div>
					<div class="box-descritivo">
						<h2><?php the_title()?></h2>
						<?php the_content()?>
						<div class="beneficios">
							<?php if ($beneficio1 != "") {?>	 
								<p class="topico-lista"><img src='<?php echo get_template_directory_uri(); ?>/assets/images/verificado.svg'/> <?php echo $beneficio1 ?></p>
							<?php }	
							if ($beneficio2 != "") {?>	 
								<p class="topico-lista"><img src='<?php echo get_template_directory_uri(); ?>/assets/images/verificado.svg'/> <?php echo $beneficio2 ?></p>
							<?php }
							if ($beneficio3 != "") {?>	 
								<p class="topico-lista"><img src='<?php echo get_template_directory_uri(); ?>/assets/images/verificado.svg'/> <?php echo $beneficio3 ?></p>
							<?php }	
							if ($beneficio4 != "") {?>	 
								<p class="topico-lista"><img src='<?php echo get_template_directory_uri(); ?>/assets/images/verificado.svg'/> <?php echo $beneficio4 ?></p>
							<?php }?>	
						</div>
					</div>
				</div>
			<?php wp_reset_postdata(); ?>
		</section>
		<section class="cafe">
			<h2 class="align">Café com a Psi</h2>
			<article>
				<?php $args = array('post_type' => 'servico','posts_per_page' => 3);
					$var = new WP_Query($args);
					if($var->have_posts()):
						while($var->have_posts()):
							$var->the_post();?>			
								<a class="box">
									<div class='foto'><?php echo odin_thumbnail(510, 362, get_the_title(), true, false);?></div>
									<div class="agrupador">
										<p class="data">Postado em <?php the_time('d\/m\/Y') ?></p>
										<h5><?php the_title()?></h5>
										<p><?php echo excerpt(18); ?></p>
										<span href="#" class="botao" target="_blank"><p>Saiba mais</p></span>
									</div>
								</a>
							<?php
						endwhile;
					endif;
				wp_reset_postdata(); ?>
			</article>
		</section>
	</main>
<?php
get_footer();
