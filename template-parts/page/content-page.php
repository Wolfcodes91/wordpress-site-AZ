<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */
$fields = get_fields();
$about_the_book = $fields['about_the_book'];
$about_the_book_dropdown = $fields['about_the_book_dropdown'];
$about_the_author = $fields['about_the_author'];
$about_the_author_dropdown = $fields['about_the_author_dropdown'];
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div id="about-wrap" class="about_section">
		<header class="entry-header">
		
		<?php twentyseventeen_edit_link( get_the_ID() ); ?>
	</header><!-- .entry-header -->
	<div class="entry-content">
	
			<!-- About 1 -->
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6">
					<?php the_title( '<h3 class="about_text">', '</h3>' ); ?>
					<div class="about_text">
					<?= the_content(); ?>
						
					<div id="collapseExample" class="collapse">
						<?= $about_the_book_dropdown ?>
					</div>
					<a href="#" class="read_more" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">+read more</a>
				</div>
			</div>
			<?php the_post_thumbnail(); ?>
				</div>
			</div>
		</div>
		
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
