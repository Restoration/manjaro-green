<?php
/**
 * The template for displaying Search Results pages
 *
 *
 * @package WordPress
 * @subpackage ManjaroGreen
 * @since ManjaroGreen 1.0
 */
get_header(); ?>

	<div id="main">

		<?php if ( have_posts() ) : ?>

			<h1 id="resultTitle">Search&nbsp;:&nbsp;<?php echo $s; ?></h1>

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content','post' ); ?>
			<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

	</div><!-- #main -->

<?php get_footer(); ?>