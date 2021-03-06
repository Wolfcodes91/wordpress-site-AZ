<?php

/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */
?>
<div class="page_wrapper">
<?php




get_template_part('index', 'top');
get_template_part('template-parts/navigation/nav', 'top');
get_header();
$fields = get_fields();
$about_the_book = $fields['about_the_book'];
$about_the_book_dropdown = $fields['about_the_book_dropdown'];
$about_the_author = $fields['about_the_author'];
$about_the_author_dropdown = $fields['about_the_author_dropdown'];
?>
		
		    <!-- About Starts -->
		<div id="about-wrap" class="about_section">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<div class="about_text">
							<h3>ABOUT THE BOOK</h3>
							<?= $about_the_book ?>
							<!-- <p>
								Paul is a top business executive hoping to be the next CEO of Ascendant―a New York-based tech
								giant. He neglects everything―his family and himself―in the race to the top. His fast-paced
								life is interrupted when he travels to Glastonbury, England, to visit friends in a village
								rich in history and mysticism.</p>
								<p>Glastonbury represents a complete counterpoint to Paul’s elite corporate day job. It compares
								to an amusement park, with shops and venues catering to spiritual seekers ranging from
								would-be witches, goddesses and druids, and burned-out hippies. Like many seekers before
								him, he is attracted to the energy of a nearby hill―Tor―said to be the mythical Isle of
								Avalon. Paul meets a beautiful soul reader, Christine, who reads his soul and plants the
								seeds that turn his life upside down.
							</p> -->
							<div id="collapseExample" class="collapse">
							<?= $about_the_book_dropdown ?>
								<!-- <p>
									When he returns to New York, his wife, Mary, is skeptical. Is Paul having a spiritual
									awakening or is he falling in love with an attractive charlatan? His journey both scares
									and intrigues her as she watches him struggle to navigate between the business and
									spiritual worlds. A series of synchronistic events draws Paul closer to Glastonbury and
									Christine, compelling him and a reluctant Mary to return, unaware that their lives will
									never be the same.
								</p> -->
							</div>
							<a href="#" class="read_more" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">+read more</a>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="about_img"><img src="/wp-content/themes/twentyseventeen/assets/images/book_2.png" alt="Image" /></div>
					</div>
				</div>
			</div>
		</div>
		<!-- About ends -->
		<!-- Author Starts -->
		<div class="author_section">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-5">
						<div class="author_img"><img src="wp-content/themes/twentyseventeen/assets/images/author.png" alt="Image" /></div>
					</div>
					<div class="col-lg-6 offset-lg-1 col-md-7">
						<div class="author_bio">
							<h3>About The author</h3>
							<?= $about_the_author ?>
							<!-- <p>ANDY ZIMMERMAN is the president of frog, a global leader in design and strategy. The first in a trilogy, Journey is Zimmerman’s first novel.</p>
							<p>He has been a senior executive in the technology industry, always on the leading edge of innovation.</p> -->
							<div id="collapseBio" class="collapse">
							<?= $about_the_author_dropdown ?>
							
							</div>
							<a class="read_more" href="#" data-toggle="collapse" data-target="#collapseBio" aria-expanded="false" aria-controls="collapseBio">+read more</a>
						</div>
					</div>
				</div>
			</div>
		</div>
			<?php get_footer(); ?>

		<?php
		// Show the selected front page content.
		// if (have_posts()) :
		// 	while (have_posts()) :
		// 		the_post();
		// 		get_template_part('template-parts/page/content', 'front-page');
		// 	endwhile;
		// else :
		// 	get_template_part('template-parts/post/content', 'none');
		// endif;
		?>

		<?php
		// // Get each of our panels and show the post data.
		// if (0 !== twentyseventeen_panel_count() || is_customize_preview()) : // If we have pages to show.

		// 	/**
		// 	 * Filters the number of front page sections in Twenty Seventeen.
		// 	 *
		// 	 * @since Twenty Seventeen 1.0
		// 	 *
		// 	 * @param int $num_sections Number of front page sections.
		// 	 */
		// 	$num_sections = apply_filters('twentyseventeen_front_page_sections', 4);
		// 	global $twentyseventeencounter;

		// 	// Create a setting and control for each of the sections available in the theme.
		// 	for ($i = 1; $i < (1 + $num_sections); $i++) {
		// 		$twentyseventeencounter = $i;
		// 		twentyseventeen_front_page_section(null, $i);
		// 	}

		// endif; // The if ( 0 !== twentyseventeen_panel_count() ) ends here.
		?>




