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

  <!-- Preloader Start -->
  <div class="proloader" style="display: none;">
        <div class="loader_34">
            <!-- Preloader Elements -->
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <!-- Preloader Container Left Begin -->
                        <div class="ytp-spinner-left">
                            <!-- Preloader Body Left -->
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <!-- Preloader Container Left End -->
                        <!-- Preloader Container Right Begin -->
                        <div class="ytp-spinner-right">
                            <!-- Preloader Body Right -->
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <!-- Preloader Container Right End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader End -->

<div class="page_wrapper">

		<?php get_header(); ?>

		    <!-- About Starts -->
		<div id="about-wrap" class="about_section">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<div class="about_text">
							<h3>ABOUT THE BOOK</h3>
							<p>
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
							</p>
							<div id="collapseExample" class="collapse show">
								<p>
									When he returns to New York, his wife, Mary, is skeptical. Is Paul having a spiritual
									awakening or is he falling in love with an attractive charlatan? His journey both scares
									and intrigues her as she watches him struggle to navigate between the business and
									spiritual worlds. A series of synchronistic events draws Paul closer to Glastonbury and
									Christine, compelling him and a reluctant Mary to return, unaware that their lives will
									never be the same.
								</p>
							</div>
							<a href="#" class="read_more" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">+read more</a>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="about_img"><img src="wp-content/themes/twentyseventeen/assets/images/book_2.png" alt="Image" /></div>
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
							<p>ANDY ZIMMERMAN is the president of frog, a global leader in design and strategy. The first in a trilogy, Journey is Zimmerman’s first novel.</p>
							<p>He has been a senior executive in the technology industry, always on the leading edge of innovation.</p>
							<div id="collapseBio" class="collapse">
								<p>Business career highlights include the following:</p>
								<ul>
									<li>
										<p>• Part of the team that launched one of the first home video businesses in the 1980s.</p>
									</li>
									<li>
										<p>• While a consulting partner at PWC, 
											he launched a worldwide knowledge network with email and information services, a precursor to the internet. 
											Featured in the press at the time, Tom Peters, management guru, 
											featured Andy’s work in his books and newsletter, calling it "the most important story I’ve ever written."</p>
									</li>
									<li>
										<p>• Andy was a managing director at one of the first and most successful incubator/venture firms in history—idealab, 
											creator of over 100 companies with more than 10 IPOs</p>
									</li>
									<li>
										<p>• As a senior managing director at the largest tech services company in the world—Accenture—Andy launched Accenture Digital 
											which eventually grew to represent half of its revenue.</p>
									</li>
									<li>
										<p>• Andy is the 3rd CEO of frog in its history. 
											Frog is a 50 year old iconic design firm famous for its work for Apple, Disney, Sony and other leading brands. 
											While managing one of the largest design and innovation firms in the world, 
											Andy began to write JOURNEY, drawing upon his recent personal life experience.</p>
									</li>
								</ul>
								<p>Andy was an English major at Haverford College and was one of the youngest recipients of a post-grad Thomas Watson Fellowship, 
									during which he travelled with circuses in Europe, writing about the experience.</p>
								<p>He also received a master’s degree from New York University Business School.</p>
							</div>
							<a class="read_more" href="#" data-toggle="collapse" data-target="#collapseBio" aria-expanded="false" aria-controls="collapseBio">+read more</a>
						</div>
					</div>
				</div>
			</div>
		</div>
			<!-- Author Ends -->
			<!-- Magazine starts -->
		<!-- <div id="press_wrap" class="magazine_section">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-4">
						<div class="magazine_item">
							<img src="wp-content/themes/twentyseventeen/assets/images/myt.png" alt="Image">
							<p>“Lorem ipsum this is a quote from the press about the book Andrew Zimmerman wrote”
							</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="magazine_item">
							<img src="wp-content/themes/twentyseventeen/assets/images/gq.png" alt="Image">
							<p>“Lorem ipsum this is a quote from the press about the book Andrew Zimmerman wrote”
							</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="magazine_item">
							<img src="wp-content/themes/twentyseventeen/assets/images/forbes.png" alt="Image">
							<p>“Lorem ipsum this is a quote from the press about the book Andrew Zimmerman wrote”
							</p>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<!-- Magazine ends -->
		<!-- Instagram starts -->

		<div class="instagram_section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section_title">
							<h4>Instagram</h4>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-10 offset-lg-1 insta_box">
						<div id="instgram_container" class="row">

							<!-- <div class="col-md-4 col-6">
								<div class="instagram_img mb-30">
									<a href="#"><img src="assets/img/img_1.png" alt="Image"></a>
								</div>
							</div>
							<div class="col-md-4 col-6">
								<div class="instagram_img mb-30">
									<a href="#"><img src="assets/img/img_2.png" alt="Image"></a>
								</div>
							</div>
							<div class="col-md-4 col-6">
								<div class="instagram_img mb-30">
									<a href="#"><img src="assets/img/img_3.png" alt="Image"></a>
								</div>
							</div>
							<div class="col-md-4 col-6">
								<div class="instagram_img mb-30">
									<a href="#"><img src="assets/img/img_4.png" alt="Image"></a>
								</div>
							</div>
							<div class="col-md-4 col-6">
								<div class="instagram_img mb-30">
									<a href="#"><img src="assets/img/img_5.png" alt="Image"></a>
								</div>
							</div>
							<div class="col-md-4 col-6">

								<div class="instagram_img mb-30">
									<a href="#"><img src="assets/img/img_6.png" alt="Image"></a>
								</div>
							</div>
							<div class="col-md-4 col-6 ">
								<div class="instagram_img  xs-30">
									<a href="#"><img src="assets/img/img_7.png" alt="Image"></a>
								</div>
							</div>
							<div class="col-md-4 col-6">
								<div class="instagram_img">
									<a href="#"><img src="assets/img/img_8.png" alt="Image"></a>
								</div>
							</div>
							<div class="col-md-4 col-6">
								<div class="instagram_img">
									<a href="#"><img src="assets/img/img_9.png" alt="Image"></a>
								</div>
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</div>
			<!-- Instagram ends -->
		
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




