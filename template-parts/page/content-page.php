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
$dropdown = $fields['dropdown'];
get_template_part('index', 'top');
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div id="about-wrap" class="about_section">
		<header class="entry-header">
		
		<?php twentyseventeen_edit_link( get_the_ID() ); ?>
	</header><!-- .entry-header -->
	<div class="entry-content">
	
			<!-- About 1 -->
			<div class="container">
				<div class="row <?= has_post_thumbnail() ? 'about_text' : 'about_text_centered'?>">
					<div class="col-lg-6 col-md-6">	
					<!-- <div > -->
					<?php the_title( '<h3 class="about_text">', '</h3>' ); ?>
					<?= the_content(); ?>
					<?php if (!empty($dropdown)) : ?>	
					<div id="collapseExample" class="collapse">			
							<?= $dropdown ?>
					<!-- </div> -->
					<a href="#" class="read_more" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">+read more</a>
					<?php endif; ?>
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="about_img">
					<?php the_post_thumbnail(); ?>
				</div>
			</div>
		</div>
	</div>
</div>		
</div><!-- .entry-content -->
<!-- <div id="banner_block">
</div> -->
</article><!-- #post-<?php the_ID(); ?> -->


