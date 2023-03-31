<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main div element.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<footer id="footer" role="contentinfo">
	<?php $var = new WP_Query(array('post_type' => 'dados','posts_per_page')); $var->the_post(); 
		$facebook =  get_post_meta( $post->ID,'facebook', true );
		$instagram =  get_post_meta( $post->ID,'instagram', true );
		$linkedin =  get_post_meta( $post->ID,'linkedin', true );
		$telefone =  get_post_meta( $post->ID,'telefone', true );
		$whatsapp =  get_post_meta( $post->ID,'whatsapp', true );
		$email =  get_post_meta( $post->ID,'email', true );?>
	<?php wp_reset_postdata(); ?>
	<section class="conteudo">
		<a class="logo" rel="direicona para a pagina inicial do site" href="<?php echo esc_url( home_url( '/' ) ); ?>" alt="Gabriela Contesini" title="Gabriela Contesini"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-footer.svg"/></a>
		<article class="desktop">
			<div class="contato">
				<h4>Entre em contato</h4>
				<?php if ($telefone != '') { ?> 
					<a href="tel:<?php echo $telefone ?>" alt="<?php echo $telefone ?>" rel="direicona para o telefone" title="<?php echo $telefone ?>" target="_blank">    
						<p><?php echo $telefone?></p>
					</a>
				<?php }?>
				<?php if ($whatsapp != '') { ?> 
					<a class="whatsapp" href="https://api.whatsapp.com/send?phone=55<?php echo $whatsapp ?>&text=Olá! Bem-vindo(a) ao meu WhatsApp. Sinta-se à vontade para enviar uma mensagem e agendar sua consulta. Vamos trabalhar juntos(as) em sua jornada de autoconhecimento e bem-estar emocional." alt="<?php echo $whatsapp ?>" rel="direicona para o whatsapp" title="<?php echo $whatsapp ?>" target="_blank">
						<p><?php echo $whatsapp?></p>
					</a>
				<?php }?>
				<?php if ($email != '') { ?> 
					<a href="mailto:<?php echo $email ?>" alt="<?php echo $email ?>" target="_blank">
						<p><?php echo $email?></p>
					</a>
				<?php }?>
			</div>
			<div class="info">
				<h4>Gabriela Domingues Contesini</h4>
				<p class="crp">CRP 06/152232</p>
				<p class="texto">O amor pela psicologia transformado em uma missão de vida: levar saúde mental para o maior número de pessoas e fazê-las se sentirem acolhidas e respeitadas. </p>
			</div>
			<div class="sigame">
				<h4>Siga-me</h4>
				<a href="<?php echo $instagram ?>" class="instagram" alt="Instagram" title="Instagram" target="_blank">
					<svg width="31" height="32" viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M15.6779 8.8125C14.2563 8.8125 12.8667 9.23404 11.6847 10.0238C10.5027 10.8136 9.58148 11.9361 9.03747 13.2495C8.49347 14.5628 8.35113 16.008 8.62846 17.4022C8.90579 18.7964 9.59034 20.0771 10.5955 21.0823C11.6007 22.0875 12.8814 22.7721 14.2756 23.0494C15.6699 23.3267 17.115 23.1844 18.4284 22.6404C19.7417 22.0964 20.8643 21.1751 21.654 19.9932C22.4438 18.8112 22.8654 17.4216 22.8654 16C22.8654 14.0938 22.1081 12.2656 20.7602 10.9177C19.4123 9.56975 17.5841 8.8125 15.6779 8.8125ZM15.6779 21.3125C14.6271 21.3125 13.6 21.0009 12.7264 20.4172C11.8528 19.8334 11.1718 19.0037 10.7697 18.033C10.3677 17.0623 10.2625 15.9941 10.4674 14.9636C10.6724 13.9331 11.1784 12.9865 11.9214 12.2435C12.6643 11.5005 13.6109 10.9946 14.6414 10.7896C15.672 10.5846 16.7401 10.6898 17.7109 11.0919C18.6816 11.494 19.5113 12.1749 20.095 13.0485C20.6788 13.9222 20.9904 14.9493 20.9904 16C20.9862 17.4077 20.4252 18.7566 19.4298 19.7519C18.4344 20.7473 17.0856 21.3084 15.6779 21.3125ZM22.5529 0.6875H8.80286C6.56509 0.6875 4.41898 1.57645 2.83664 3.15879C1.2543 4.74113 0.365356 6.88724 0.365356 9.125V22.875C0.365356 25.1128 1.2543 27.2589 2.83664 28.8412C4.41898 30.4236 6.56509 31.3125 8.80286 31.3125H22.5529C24.7906 31.3125 26.9367 30.4236 28.5191 28.8412C30.1014 27.2589 30.9904 25.1128 30.9904 22.875V9.125C30.9904 6.88724 30.1014 4.74113 28.5191 3.15879C26.9367 1.57645 24.7906 0.6875 22.5529 0.6875ZM29.1154 22.875C29.1154 24.6155 28.424 26.2847 27.1932 27.5154C25.9625 28.7461 24.2933 29.4375 22.5529 29.4375H8.80286C7.06237 29.4375 5.39318 28.7461 4.16247 27.5154C2.93176 26.2847 2.24036 24.6155 2.24036 22.875V9.125C2.24036 7.38452 2.93176 5.71532 4.16247 4.48461C5.39318 3.2539 7.06237 2.5625 8.80286 2.5625H22.5529C24.2933 2.5625 25.9625 3.2539 27.1932 4.48461C28.424 5.71532 29.1154 7.38452 29.1154 9.125V22.875ZM25.3654 7.875C25.3654 8.18403 25.2737 8.48613 25.102 8.74308C24.9303 9.00003 24.6863 9.2003 24.4008 9.31856C24.1153 9.43682 23.8011 9.46777 23.498 9.40748C23.1949 9.34719 22.9165 9.19837 22.698 8.97985C22.4795 8.76133 22.3307 8.48292 22.2704 8.17983C22.2101 7.87673 22.241 7.56257 22.3593 7.27706C22.4776 6.99155 22.6778 6.74752 22.9348 6.57583C23.1917 6.40414 23.4938 6.3125 23.8029 6.3125C24.2173 6.3125 24.6147 6.47712 24.9077 6.77015C25.2007 7.06317 25.3654 7.4606 25.3654 7.875Z" fill="#A9A9A9"/>
					</svg>
				</a>
				<a href="<?php echo $linkedin ?>" class="linkedin" alt="Linkedin" title="Linkedin" target="_blank">
					<svg width="31" height="32" viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M10.3654 13.5V23.5C10.3654 23.7486 10.2666 23.9871 10.0908 24.1629C9.91495 24.3387 9.6765 24.4375 9.42786 24.4375C9.17922 24.4375 8.94076 24.3387 8.76494 24.1629C8.58913 23.9871 8.49036 23.7486 8.49036 23.5V13.5C8.49036 13.2514 8.58913 13.0129 8.76494 12.8371C8.94076 12.6613 9.17922 12.5625 9.42786 12.5625C9.6765 12.5625 9.91495 12.6613 10.0908 12.8371C10.2666 13.0129 10.3654 13.2514 10.3654 13.5ZM9.42786 6.9375C9.11882 6.9375 8.81673 7.02914 8.55978 7.20083C8.30283 7.37252 8.10256 7.61655 7.98429 7.90206C7.86603 8.18757 7.83509 8.50173 7.89538 8.80483C7.95567 9.10792 8.10448 9.38633 8.323 9.60485C8.54152 9.82337 8.81993 9.97219 9.12303 10.0325C9.42612 10.0928 9.74029 10.0618 10.0258 9.94356C10.3113 9.8253 10.5553 9.62503 10.727 9.36808C10.8987 9.11113 10.9904 8.80903 10.9904 8.5C10.9904 8.0856 10.8257 7.68817 10.5327 7.39515C10.2397 7.10212 9.84226 6.9375 9.42786 6.9375ZM30.9904 2.875V29.125C30.9904 29.7052 30.7599 30.2616 30.3497 30.6718C29.9394 31.082 29.383 31.3125 28.8029 31.3125H2.55286C1.9727 31.3125 1.4163 31.082 1.00606 30.6718C0.595825 30.2616 0.365356 29.7052 0.365356 29.125V2.875C0.365356 2.29484 0.595825 1.73844 1.00606 1.3282C1.4163 0.917968 1.9727 0.6875 2.55286 0.6875H28.8029C29.383 0.6875 29.9394 0.917968 30.3497 1.3282C30.7599 1.73844 30.9904 2.29484 30.9904 2.875ZM29.1154 2.875C29.1154 2.79212 29.0824 2.71263 29.0238 2.65403C28.9652 2.59542 28.8857 2.5625 28.8029 2.5625H2.55286C2.46998 2.5625 2.39049 2.59542 2.33189 2.65403C2.27328 2.71263 2.24036 2.79212 2.24036 2.875V29.125C2.24036 29.2079 2.27328 29.2874 2.33189 29.346C2.39049 29.4046 2.46998 29.4375 2.55286 29.4375H28.8029C28.8857 29.4375 28.9652 29.4046 29.0238 29.346C29.0824 29.2874 29.1154 29.2079 29.1154 29.125V2.875ZM18.8029 12.5625C17.5432 12.5635 16.3249 13.0121 15.3654 13.8281V13.5C15.3654 13.2514 15.2666 13.0129 15.0908 12.8371C14.915 12.6613 14.6765 12.5625 14.4279 12.5625C14.1792 12.5625 13.9408 12.6613 13.7649 12.8371C13.5891 13.0129 13.4904 13.2514 13.4904 13.5V23.5C13.4904 23.7486 13.5891 23.9871 13.7649 24.1629C13.9408 24.3387 14.1792 24.4375 14.4279 24.4375C14.6765 24.4375 14.915 24.3387 15.0908 24.1629C15.2666 23.9871 15.3654 23.7486 15.3654 23.5V17.875C15.3654 16.9633 15.7275 16.089 16.3722 15.4443C17.0168 14.7997 17.8912 14.4375 18.8029 14.4375C19.7145 14.4375 20.5889 14.7997 21.2335 15.4443C21.8782 16.089 22.2404 16.9633 22.2404 17.875V23.5C22.2404 23.7486 22.3391 23.9871 22.5149 24.1629C22.6908 24.3387 22.9292 24.4375 23.1779 24.4375C23.4265 24.4375 23.665 24.3387 23.8408 24.1629C24.0166 23.9871 24.1154 23.7486 24.1154 23.5V17.875C24.1112 16.4673 23.5502 15.1184 22.5548 14.123C21.5594 13.1277 20.2106 12.5666 18.8029 12.5625Z" fill="#A9A9A9"/>
					</svg>
				</a>
				<a href="<?php echo $facebook ?>" class="facebook" alt="Facebook" title="Facebook" target="_blank">
					<svg width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M31.6779 9.33333V22.6667C31.6779 24.8768 30.7999 26.9964 29.2371 28.5592C27.6743 30.122 25.5547 31 23.3445 31H10.0112C7.80105 31 5.68144 30.122 4.11863 28.5592C2.55583 26.9964 1.67786 24.8768 1.67786 22.6667V9.33333C1.67786 7.1232 2.55583 5.00358 4.11863 3.44078C5.68144 1.87797 7.80105 1 10.0112 1H23.3445C25.5547 1 27.6743 1.87797 29.2371 3.44078C30.7999 5.00358 31.6779 7.1232 31.6779 9.33333Z" stroke="#A9A9A9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M15.0112 31.0002V16.0002C15.0112 12.3535 15.8445 9.3335 21.6779 9.3335M11.6779 17.6668H21.6779" stroke="#A9A9A9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
				</a>
			</div>
		</article>
		<article class="mobile">
			<div class="info">
				<h4>Gabriela Domingues Contesini</h4>
				<p class="crp">CRP 06/152232</p>
				<p>Lorem ipsum dolor sit amet, consecting elit, sed d magna aliquam erat wisi enim adLorem ipsum dolor sit amet, consecting elit, sed d</p>
			</div>
			<div class="contato">
				<h4>Entre em contato</h4>
				<a href="tel:<?php echo $telefone ?>" alt="telefone da psicologa" rel="direicona para o telefone" title="<?php echo $telefone ?>" target="_blank">    
					<p><?php echo $telefone?></p>
				</a>
				<a href="mailto:<?php echo $email ?>" alt="<?php echo $email ?>" rel="direicona para o email" target="_blank">
					<p><?php echo $email?></p>
				</a>
			</div>
			<div class="sigame">
				<h4>Siga-me</h4>
				<a href="<?php echo $instagram ?>" class="instagram" rel="direicona para o instagram" alt="Instagram" title="Instagram" target="_blank">
					<svg width="31" height="32" viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M15.6779 8.8125C14.2563 8.8125 12.8667 9.23404 11.6847 10.0238C10.5027 10.8136 9.58148 11.9361 9.03747 13.2495C8.49347 14.5628 8.35113 16.008 8.62846 17.4022C8.90579 18.7964 9.59034 20.0771 10.5955 21.0823C11.6007 22.0875 12.8814 22.7721 14.2756 23.0494C15.6699 23.3267 17.115 23.1844 18.4284 22.6404C19.7417 22.0964 20.8643 21.1751 21.654 19.9932C22.4438 18.8112 22.8654 17.4216 22.8654 16C22.8654 14.0938 22.1081 12.2656 20.7602 10.9177C19.4123 9.56975 17.5841 8.8125 15.6779 8.8125ZM15.6779 21.3125C14.6271 21.3125 13.6 21.0009 12.7264 20.4172C11.8528 19.8334 11.1718 19.0037 10.7697 18.033C10.3677 17.0623 10.2625 15.9941 10.4674 14.9636C10.6724 13.9331 11.1784 12.9865 11.9214 12.2435C12.6643 11.5005 13.6109 10.9946 14.6414 10.7896C15.672 10.5846 16.7401 10.6898 17.7109 11.0919C18.6816 11.494 19.5113 12.1749 20.095 13.0485C20.6788 13.9222 20.9904 14.9493 20.9904 16C20.9862 17.4077 20.4252 18.7566 19.4298 19.7519C18.4344 20.7473 17.0856 21.3084 15.6779 21.3125ZM22.5529 0.6875H8.80286C6.56509 0.6875 4.41898 1.57645 2.83664 3.15879C1.2543 4.74113 0.365356 6.88724 0.365356 9.125V22.875C0.365356 25.1128 1.2543 27.2589 2.83664 28.8412C4.41898 30.4236 6.56509 31.3125 8.80286 31.3125H22.5529C24.7906 31.3125 26.9367 30.4236 28.5191 28.8412C30.1014 27.2589 30.9904 25.1128 30.9904 22.875V9.125C30.9904 6.88724 30.1014 4.74113 28.5191 3.15879C26.9367 1.57645 24.7906 0.6875 22.5529 0.6875ZM29.1154 22.875C29.1154 24.6155 28.424 26.2847 27.1932 27.5154C25.9625 28.7461 24.2933 29.4375 22.5529 29.4375H8.80286C7.06237 29.4375 5.39318 28.7461 4.16247 27.5154C2.93176 26.2847 2.24036 24.6155 2.24036 22.875V9.125C2.24036 7.38452 2.93176 5.71532 4.16247 4.48461C5.39318 3.2539 7.06237 2.5625 8.80286 2.5625H22.5529C24.2933 2.5625 25.9625 3.2539 27.1932 4.48461C28.424 5.71532 29.1154 7.38452 29.1154 9.125V22.875ZM25.3654 7.875C25.3654 8.18403 25.2737 8.48613 25.102 8.74308C24.9303 9.00003 24.6863 9.2003 24.4008 9.31856C24.1153 9.43682 23.8011 9.46777 23.498 9.40748C23.1949 9.34719 22.9165 9.19837 22.698 8.97985C22.4795 8.76133 22.3307 8.48292 22.2704 8.17983C22.2101 7.87673 22.241 7.56257 22.3593 7.27706C22.4776 6.99155 22.6778 6.74752 22.9348 6.57583C23.1917 6.40414 23.4938 6.3125 23.8029 6.3125C24.2173 6.3125 24.6147 6.47712 24.9077 6.77015C25.2007 7.06317 25.3654 7.4606 25.3654 7.875Z" fill="#A9A9A9"/>
					</svg>
				</a>
				<a href="<?php echo $linkedin ?>" class="linkedin" alt="Linkedin" rel="direicona para o linkedin" title="Linkedin" target="_blank">
					<svg width="31" height="32" viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M10.3654 13.5V23.5C10.3654 23.7486 10.2666 23.9871 10.0908 24.1629C9.91495 24.3387 9.6765 24.4375 9.42786 24.4375C9.17922 24.4375 8.94076 24.3387 8.76494 24.1629C8.58913 23.9871 8.49036 23.7486 8.49036 23.5V13.5C8.49036 13.2514 8.58913 13.0129 8.76494 12.8371C8.94076 12.6613 9.17922 12.5625 9.42786 12.5625C9.6765 12.5625 9.91495 12.6613 10.0908 12.8371C10.2666 13.0129 10.3654 13.2514 10.3654 13.5ZM9.42786 6.9375C9.11882 6.9375 8.81673 7.02914 8.55978 7.20083C8.30283 7.37252 8.10256 7.61655 7.98429 7.90206C7.86603 8.18757 7.83509 8.50173 7.89538 8.80483C7.95567 9.10792 8.10448 9.38633 8.323 9.60485C8.54152 9.82337 8.81993 9.97219 9.12303 10.0325C9.42612 10.0928 9.74029 10.0618 10.0258 9.94356C10.3113 9.8253 10.5553 9.62503 10.727 9.36808C10.8987 9.11113 10.9904 8.80903 10.9904 8.5C10.9904 8.0856 10.8257 7.68817 10.5327 7.39515C10.2397 7.10212 9.84226 6.9375 9.42786 6.9375ZM30.9904 2.875V29.125C30.9904 29.7052 30.7599 30.2616 30.3497 30.6718C29.9394 31.082 29.383 31.3125 28.8029 31.3125H2.55286C1.9727 31.3125 1.4163 31.082 1.00606 30.6718C0.595825 30.2616 0.365356 29.7052 0.365356 29.125V2.875C0.365356 2.29484 0.595825 1.73844 1.00606 1.3282C1.4163 0.917968 1.9727 0.6875 2.55286 0.6875H28.8029C29.383 0.6875 29.9394 0.917968 30.3497 1.3282C30.7599 1.73844 30.9904 2.29484 30.9904 2.875ZM29.1154 2.875C29.1154 2.79212 29.0824 2.71263 29.0238 2.65403C28.9652 2.59542 28.8857 2.5625 28.8029 2.5625H2.55286C2.46998 2.5625 2.39049 2.59542 2.33189 2.65403C2.27328 2.71263 2.24036 2.79212 2.24036 2.875V29.125C2.24036 29.2079 2.27328 29.2874 2.33189 29.346C2.39049 29.4046 2.46998 29.4375 2.55286 29.4375H28.8029C28.8857 29.4375 28.9652 29.4046 29.0238 29.346C29.0824 29.2874 29.1154 29.2079 29.1154 29.125V2.875ZM18.8029 12.5625C17.5432 12.5635 16.3249 13.0121 15.3654 13.8281V13.5C15.3654 13.2514 15.2666 13.0129 15.0908 12.8371C14.915 12.6613 14.6765 12.5625 14.4279 12.5625C14.1792 12.5625 13.9408 12.6613 13.7649 12.8371C13.5891 13.0129 13.4904 13.2514 13.4904 13.5V23.5C13.4904 23.7486 13.5891 23.9871 13.7649 24.1629C13.9408 24.3387 14.1792 24.4375 14.4279 24.4375C14.6765 24.4375 14.915 24.3387 15.0908 24.1629C15.2666 23.9871 15.3654 23.7486 15.3654 23.5V17.875C15.3654 16.9633 15.7275 16.089 16.3722 15.4443C17.0168 14.7997 17.8912 14.4375 18.8029 14.4375C19.7145 14.4375 20.5889 14.7997 21.2335 15.4443C21.8782 16.089 22.2404 16.9633 22.2404 17.875V23.5C22.2404 23.7486 22.3391 23.9871 22.5149 24.1629C22.6908 24.3387 22.9292 24.4375 23.1779 24.4375C23.4265 24.4375 23.665 24.3387 23.8408 24.1629C24.0166 23.9871 24.1154 23.7486 24.1154 23.5V17.875C24.1112 16.4673 23.5502 15.1184 22.5548 14.123C21.5594 13.1277 20.2106 12.5666 18.8029 12.5625Z" fill="#A9A9A9"/>
					</svg>
				</a>
				<a href="<?php echo $facebook ?>" class="facebook" alt="Facebook" rel="direicona para o facebook" title="Facebook" target="_blank">
					<svg width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M31.6779 9.33333V22.6667C31.6779 24.8768 30.7999 26.9964 29.2371 28.5592C27.6743 30.122 25.5547 31 23.3445 31H10.0112C7.80105 31 5.68144 30.122 4.11863 28.5592C2.55583 26.9964 1.67786 24.8768 1.67786 22.6667V9.33333C1.67786 7.1232 2.55583 5.00358 4.11863 3.44078C5.68144 1.87797 7.80105 1 10.0112 1H23.3445C25.5547 1 27.6743 1.87797 29.2371 3.44078C30.7999 5.00358 31.6779 7.1232 31.6779 9.33333Z" stroke="#A9A9A9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M15.0112 31.0002V16.0002C15.0112 12.3535 15.8445 9.3335 21.6779 9.3335M11.6779 17.6668H21.6779" stroke="#A9A9A9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
				</a>
			</div>
		</article>
	</section>     
	<section class="copyright">
		<p>Copyright 2022© Todos os direitos reservados.</p>
		<a href="https://ideapublicidade.com.br" rel="direicona para a pagina inicial do site da Idea Publicidade" target="_black">
			<svg width="43" height="20" viewBox="0 0 43 20" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M36.7499 5.9751C37.8499 5.9751 38.7653 6.10231 39.5 6.35276C40.2347 6.60718 40.824 6.96894 41.264 7.43803C41.708 7.91109 42.0184 8.48752 42.203 9.15936C42.3838 9.83517 42.478 10.5865 42.478 11.4134V19.2607C41.9398 19.376 41.2012 19.5191 40.2504 19.6781C39.3036 19.8372 38.1525 19.9206 36.797 19.9206C35.9484 19.9206 35.1784 19.8411 34.483 19.6901C33.7915 19.543 33.1982 19.2886 32.6914 18.9467C32.1925 18.6008 31.8114 18.1437 31.5442 17.5911C31.2731 17.0306 31.1435 16.3468 31.1435 15.5398C31.1435 14.7606 31.2928 14.1007 31.6071 13.564C31.9135 13.0194 32.3261 12.5941 32.8407 12.2721C33.3633 11.9501 33.9486 11.7195 34.6165 11.5764C35.2844 11.4333 35.9759 11.3617 36.6949 11.3617C37.1781 11.3617 37.6063 11.3816 37.9796 11.4253C38.3607 11.469 38.6632 11.5207 38.895 11.5883V11.2345C38.895 10.5905 38.7025 10.0816 38.3175 9.69205C37.9364 9.30247 37.2724 9.11165 36.3177 9.11165C35.6812 9.11165 35.0566 9.15538 34.4437 9.24681C33.8229 9.34222 33.2925 9.46943 32.8407 9.6364L32.3653 6.59923C32.5854 6.53165 32.8564 6.45612 33.1786 6.38456C33.5086 6.30903 33.8622 6.24145 34.2394 6.18579C34.6244 6.12219 35.033 6.07448 35.4534 6.03473C35.8855 5.99895 36.3138 5.9751 36.7499 5.9751ZM37.0485 17.0107C37.4178 17.0107 37.7674 17.0067 38.1014 16.9829C38.4353 16.9669 38.6986 16.9391 38.9029 16.9073V14.0451C38.7536 14.0133 38.5296 13.9775 38.2271 13.9457C37.9246 13.9139 37.6535 13.894 37.406 13.894C37.0524 13.894 36.7224 13.9139 36.4159 13.9576C36.1095 14.0013 35.8384 14.0848 35.6027 14.2001C35.3669 14.3154 35.1862 14.4784 35.0487 14.6811C34.9151 14.8878 34.8523 15.1383 34.8523 15.4404C34.8523 16.0288 35.0448 16.4422 35.4416 16.6688C35.8266 16.8994 36.3649 17.0107 37.0485 17.0107Z" fill="#A9A9A9"/>
				<path d="M27.1125 11.6479C27.0968 11.3259 27.0457 11.0158 26.9515 10.7097C26.8572 10.4036 26.7157 10.1373 26.5232 9.89877C26.3346 9.6682 26.091 9.47341 25.8003 9.31837C25.5096 9.16731 25.1442 9.09177 24.712 9.09177C24.2956 9.09177 23.9341 9.15936 23.6395 9.30644C23.337 9.44956 23.0855 9.64037 22.8852 9.87492C22.6887 10.1055 22.5316 10.3798 22.4255 10.6978C22.3155 11.0079 22.2369 11.3259 22.1858 11.6479H27.1125ZM18.3592 13.091C18.3592 11.9063 18.536 10.8727 18.8974 9.98623C19.255 9.09973 19.7264 8.36428 20.3157 7.77196C20.8972 7.1836 21.569 6.73439 22.3273 6.42829C23.0895 6.12616 23.8674 5.9751 24.6649 5.9751C26.535 5.9751 28.0122 6.54755 29.0966 7.70835C30.1809 8.8612 30.7231 10.5666 30.7231 12.8087C30.7231 13.0234 30.7113 13.2659 30.6956 13.5322C30.6799 13.7906 30.6642 14.0212 30.6484 14.2279H22.1858C22.2683 15.0031 22.6298 15.6193 23.2623 16.0725C23.8909 16.5297 24.7395 16.7563 25.8082 16.7563C26.4957 16.7563 27.1675 16.6926 27.8236 16.5654C28.4837 16.4382 29.0219 16.2872 29.4384 16.0963L29.9373 19.1653C29.7409 19.2647 29.4698 19.3641 29.1359 19.4674C28.8019 19.5668 28.4326 19.6583 28.0279 19.7378C27.6154 19.8133 27.1793 19.8729 26.7118 19.9286C26.2482 19.9763 25.7807 20.0041 25.3092 20.0041C24.1267 20.0041 23.0973 19.8252 22.2212 19.4714C21.3451 19.1176 20.6222 18.6326 20.0446 18.0164C19.471 17.4003 19.0428 16.6728 18.7678 15.826C18.4928 14.9793 18.3592 14.0649 18.3592 13.091Z" fill="#A9A9A9"/>
				<path d="M17.5656 19.2129C17.2316 19.3123 16.8505 19.4116 16.4144 19.5031C15.9823 19.5985 15.5305 19.678 15.0511 19.7456C14.5758 19.8132 14.0925 19.8648 13.6014 19.9086C13.1064 19.9523 12.6389 19.9722 12.1831 19.9722C11.0988 19.9722 10.1362 19.8132 9.28368 19.4912C8.43506 19.1692 7.7161 18.712 7.13071 18.1117C6.54925 17.5154 6.10136 16.7879 5.79099 15.9332C5.48454 15.0785 5.32739 14.1244 5.32739 13.063C5.32739 11.9817 5.46097 11.0078 5.72813 10.1371C5.99529 9.26655 6.38031 8.53111 6.87926 7.92288C7.37822 7.31067 7.99504 6.84953 8.71794 6.52753C9.44083 6.2095 10.2737 6.04651 11.2088 6.04651C11.7235 6.04651 12.1871 6.09819 12.5996 6.19758C13.0042 6.29696 13.4168 6.44007 13.8411 6.63089V2.89406C13.8411 1.55039 14.784 0.461141 16.0923 0.242497L17.5656 0V19.2129ZM9.13439 12.8841C9.13439 14.0489 9.39369 14.9871 9.91229 15.6947C10.4348 16.4063 11.197 16.7601 12.2146 16.7601C12.5485 16.7601 12.8589 16.7482 13.1417 16.7243C13.4246 16.6965 13.6564 16.6726 13.845 16.6329V9.77142C13.6093 9.62433 13.3028 9.49712 12.9296 9.39376C12.5564 9.29437 12.1753 9.2427 11.7942 9.2427C10.0223 9.23872 9.13439 10.4552 9.13439 12.8841Z" fill="#A9A9A9"/>
				<path d="M4.54556 19.646H0.817139V8.94435C0.817139 7.5967 1.76005 6.51938 3.07226 6.29279L4.54556 6.05029V19.646Z" fill="#A9A9A9"/>
				<path fill-rule="evenodd" clip-rule="evenodd" d="M4.52594 4.21008C3.79126 5.24367 2.36904 5.47425 1.35541 4.73085C0.333929 3.98746 0.10606 2.54839 0.840743 1.52274C1.5715 0.489152 2.99372 0.258582 4.01127 1.00197C5.03276 1.74536 5.26063 3.17649 4.52594 4.21008Z" fill="#A9A9A9"/>
			</svg>
		</a>
	</section> 
	<a class="botao-whatsapp" href="https://api.whatsapp.com/send?phone=55<?php echo $whatsapp ?>&text=Olá! Bem-vindo(a) ao meu WhatsApp. Sinta-se à vontade para enviar uma mensagem e agendar sua consulta. Vamos trabalhar juntos(as) em sua jornada de autoconhecimento e bem-estar emocional." alt="<?php echo $whatsapp ?>" title="<?php echo $whatsapp ?>" target="_blank">
		<svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none" viewBox="0 0 48 48" id="whatsapp"><rect width="48" height="48" fill="#0DC143" rx="24"></rect><path fill="#fff" d="M34.7507 13.2115C32.1777 10.5628 28.621 9.125 24.9885 9.125C17.2696 9.125 11.0642 15.4061 11.1399 23.0493C11.1399 25.4709 11.821 27.8169 12.9561 29.9358L10.9885 37.125L18.3291 35.2331C20.3723 36.3682 22.6426 36.898 24.9128 36.898C32.5561 36.898 38.7615 30.6169 38.7615 22.9736C38.7615 19.2655 37.3237 15.7845 34.7507 13.2115ZM24.9885 34.552C22.9453 34.552 20.902 34.0223 19.1615 32.9628L18.7074 32.7358L14.3183 33.8709L15.4534 29.5574L15.1507 29.1034C11.821 23.7304 13.4101 16.6169 18.8588 13.2872C24.3074 9.95743 31.3453 11.5466 34.675 16.9953C38.0047 22.4439 36.4156 29.4818 30.9669 32.8115C29.2264 33.9466 27.1074 34.552 24.9885 34.552ZM31.648 26.152L30.8156 25.7736C30.8156 25.7736 29.6047 25.2439 28.848 24.8655C28.7723 24.8655 28.6966 24.7899 28.621 24.7899C28.3939 24.7899 28.2426 24.8655 28.0912 24.9412C28.0912 24.9412 28.0156 25.0169 26.9561 26.2277C26.8804 26.3791 26.7291 26.4547 26.5777 26.4547H26.502C26.4264 26.4547 26.275 26.3791 26.1993 26.3034L25.821 26.152C24.9885 25.7736 24.2318 25.3196 23.6264 24.7142C23.475 24.5628 23.248 24.4115 23.0966 24.2601C22.5669 23.7304 22.0372 23.125 21.6588 22.4439L21.5831 22.2926C21.5074 22.2169 21.5074 22.1412 21.4318 21.9899C21.4318 21.8385 21.4318 21.6872 21.5074 21.6115C21.5074 21.6115 21.8101 21.2331 22.0372 21.0061C22.1885 20.8547 22.2642 20.6277 22.4156 20.4764C22.5669 20.2493 22.6426 19.9466 22.5669 19.7196C22.4912 19.3412 21.5831 17.298 21.3561 16.8439C21.2047 16.6169 21.0534 16.5412 20.8264 16.4655H20.5993C20.448 16.4655 20.221 16.4655 19.9939 16.4655C19.8426 16.4655 19.6912 16.5412 19.5399 16.5412L19.4642 16.6169C19.3128 16.6926 19.1615 16.8439 19.0101 16.9196C18.8588 17.0709 18.7831 17.2223 18.6318 17.3736C18.102 18.0547 17.7993 18.8872 17.7993 19.7196C17.7993 20.325 17.9507 20.9304 18.1777 21.4601L18.2534 21.6872C18.9345 23.125 19.8426 24.4115 21.0534 25.5466L21.3561 25.8493C21.5831 26.0764 21.8101 26.2277 21.9615 26.4547C23.5507 27.8169 25.3669 28.8007 27.4101 29.3304C27.6372 29.4061 27.9399 29.4061 28.1669 29.4818C28.3939 29.4818 28.6966 29.4818 28.9237 29.4818C29.302 29.4818 29.7561 29.3304 30.0588 29.1791C30.2858 29.0277 30.4372 29.0277 30.5885 28.8764L30.7399 28.725C30.8912 28.5736 31.0426 28.498 31.1939 28.3466C31.3453 28.1953 31.4966 28.0439 31.5723 27.8926C31.7237 27.5899 31.7993 27.2115 31.875 26.8331C31.875 26.6818 31.875 26.4547 31.875 26.3034C31.875 26.3034 31.7993 26.2277 31.648 26.152Z"></path></svg>
	</a>  
</footer>
	<?php wp_footer(); ?>
</body>
</html>