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
	<?php if (is_front_page()): ?>
	<div class="row" id="updates_footer">
		<div class="col-md-10 offset-md-1">
			<div id="mc_embed_signup" class="newsletter_wrap">
				<h4>Receive Updates</h4>
				<?= do_shortcode('[contact-form-7 id="44" title="Contact form 1"]'); ?>
			</div>
			<!--End mc_embed_signup-->
		</div>
	</div>	
	<?php endif; ?>	
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
		</div>
	</div>
	<div class="container-fluid" id="copyright_text">
		<div class="row align-items-center">
			<div class="col-md-6 xs-center order-last order-md-first">
				<div id="copyright_text">
				<?= the_field('footer', 'option'); ?>
				</div>
			</div>
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



