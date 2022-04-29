<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

?>

<body>
	<?php wp_body_open(); ?>
	<?php wp_head(); ?>
		<div class="hero">
			<div class="hero_top_section">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-5 order-lg-1 order-md-1 order-2">
							<div class="hero_img"><img src="wp-content/themes/twentyseventeen/assets/images/book_transparent.png" alt="Journey: A Novel by Andrew Zimmerman" /></div>
						</div>
						<div class="col-lg-6 offset-lg-1 col-md-6 offset-md-1 order-lg-2 order-md-2 order-1">
							<div class="hero_content">
								<h1>Journey: A Novel</h1>
								<p>Inspired by real events.</p>
								<p>This genre-bending,</p>
								<p>consciousness expanding</p>
								<p>debut novel by Andrew Zimmerman.</p>
								<div class="purchase_btn">
									<p>Available Now.</p>
									<a class="js-scroll-trigger" href="#preorder_wrap"> Order</a><!-- <a href="#">Pre-order</a> -->	
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="hero_bottom_section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-6">
                        <div class="newsletter_wrap v2">
                            <h4>Receive Updates</h4>
                            <div id="mc_embed_signup" >
							<?= do_shortcode('[contact-form-7 id="44" title="Contact form 1"]'); ?>
                                <!-- <form action="https://gmail.us4.list-manage.com/subscribe/post?u=17a02fcd3a63863c32df848ef&amp;id=da20ae30f5" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="">
                                    <div id="mc_embed_signup_scroll" class="newsletter_form">
                                        <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required="">
                                        <input type="submit" value="Enter" name="subscribe" id="mc-embedded-subscribe" class="button">
                                        real people should not fill this in and expect good things - do not remove this or risk form bot signups
                                        <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                            <input type="text" name="b_17a02fcd3a63863c32df848ef_da20ae30f5" tabindex="-1" value="">
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </form> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        	</div>
        </div>

    </div>
    <!-- Hero area End -->

	<?php

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	if ((is_single() || (is_page() && !twentyseventeen_is_frontpage())) && has_post_thumbnail(get_queried_object_id())) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail(get_queried_object_id(), 'twentyseventeen-featured-image');
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>
