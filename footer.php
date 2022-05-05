<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.2
 */
$shops = get_field('shops', 'option');
?>
	<!-- Footer section starts -->
	<div id="preorder_wrap" class="footer_section">
			<div class="container">
				<?php 
				if ( 
					!empty($shops)
				): 
				echo '<div class="row">					
						<div class="col-md-12">
							<div class="section_title">
								<h2>Order today</h2>
							</div>
						</div>
					</div>';
				endif;
				?>
				<div class="row" id="shops-wrap">
					<?php 
					foreach ($shops as $shop): 
					?>
					<div class="col-md-3 col-6">
						<div class="partner-img">
						<a 
								href="<?= $shop['store_link']?>" 
								target="_blank" 
								rel="noopener">
								<img src="<?= $shop['store_image']['url']?>" alt="Image">
							</a>
						</div>
						
					</div>
					<?php endforeach; ?>
				</div>

					<!-- <div class="col-md-3 col-6">
						<div class="partner-img">
					
						</div>
					</div>
					<div class="col-md-3 col-6">
						<div class="partner-img">
						</div>
					</div>
					<div class="col-md-3 col-6">
						<div class="partner-img">
						</div>
					</div>
					<div class="col-md-3 col-6">
						<div class="partner-img">
						</div>
					</div>
					<div class="col-md-3 col-6">
						<div class="partner-img">
				
						</div>
					</div>
				</div> -->
				<div class="row">
					<div class="col-md-10 offset-md-1">
						<div id="mc_embed_signup" class="newsletter_wrap">
							<h4>Receive Updates</h4>
							<?= do_shortcode('[contact-form-7 id="44" title="Contact form 1"]'); ?>
							<!-- <form 
								id="mc-embedded-subscribe-form" 
								class="validate" action="https://gmail.us4.list-manage.com/subscribe/post?u=17a02fcd3a63863c32df848ef&amp;id=da20ae30f5" 
								method="post" 
								name="mc-embedded-subscribe-form" 
								novalidate="" target="_blank">
								<div id="mc_embed_signup_scroll" 
								class="newsletter_form">
									<p>
									<input 
										id="mce-EMAIL" 
										class="email" 
										name="EMAIL" 
										required="" 
										type="email" 
										value="" 
										placeholder="email address" 
									/>
									<input 
										id="mc-embedded-subscribe" 
										class="button" 	
										name="subscribe" 
										type="submit" 
										value="Enter" 
									/>
									real people should not fill this in and expect good things - do not remove this or risk form bot signups
									</p>
									<div 
									style="position: absolute; left: -5000px;" aria-hidden="true">
									<input tabindex="-1" name="b_17a02fcd3a63863c32df848ef_da20ae30f5" type="text" value="" />
									</div>
								</div>
							</form> -->
						</div>
						<!--End mc_embed_signup-->
					</div>
				</div>
			</div>
	<div class="container-fluid">
		<div class="row align-items-center">
			<div class="col-md-6 xs-center order-last order-md-first">
				<div class="copyright_text">
				<?= the_field('footer', 'option'); ?>
				<?php wp_nav_menu( array( 
                'theme-location' => 'footer', 
                'container_class' => 'copyright_text',
                ) ); ?>

					<!-- <p>© 2020 Andrew Zimmerman</p> -->
				</div>
			</div>
			<!-- <div class="col-md-6 xs-center">
				<div class="footer_menu">
					<ul>
						<li><a href="#">Terms of Service </a></li>
							<li><a href="#"> Privacy Policy</a></li>
							<li><a href="#">Contact Us</a></li>
					</ul>
				</div>
			</div> -->
        </div>

    </div>
</div>
    <!-- Footer section ends -->
				<?php
				get_template_part( 'template-parts/footer/footer', 'widgets' );

				if ( has_nav_menu( 'social' ) ) :
					?>
					<nav class="social-navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentyseventeen' ); ?>">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'social',
									'menu_class'     => 'social-links-menu',
									'depth'          => 1,
									'link_before'    => '<span class="screen-reader-text">',
									'link_after'     => '</span>' . twentyseventeen_get_svg( array( 'icon' => 'chain' ) ),
								)
							);
						?>
					</nav>
					<?php
				endif;

				get_template_part( 'template-parts/footer/site', 'info' );
				?>



