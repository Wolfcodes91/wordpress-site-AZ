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
$fields = get_fields();
$header_text = $fields['header_text'];
?>

<body>
	<?php wp_body_open(); ?>
	<?php wp_head(); ?>
	<?php if (twentyseventeen_is_frontpage()) : ?>
		<div class="hero">
			<div class="hero_top_section">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-5 order-lg-1 order-md-1 order-2">
							<div class="hero_img"><img src="/wp-content/themes/twentyseventeen/assets/images/book_transparent.png" alt="Journey: A Novel by Andrew Zimmerman" /></div>
						</div>
						<div class="col-lg-6 offset-lg-1 col-md-6 offset-md-1 order-lg-2 order-md-2 order-1">
							<div class="hero_content">
							<?= $header_text ?>
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
                            <div id="mc_embed_signup" class='email'>
							<?= do_shortcode('[contact-form-7 id="44" title="Contact form 1"]'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        	</div>
        </div>

    </div>
	<?php endif; ?>
    <!-- Hero area End -->

	<?php

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */

	?>
