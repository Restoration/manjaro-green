<?php
/**
 * The template for displaying Archive pages
 *
 *
 * @package WordPress
 * @subpackage ManjaroGreen
 * @since ManjaroGreen 1.0
 */
get_header(); ?>

	<div id="main">

	<h1 id="resultTitle">
		<?php if ( have_posts() ) : ?>
			<?php $format = get_option('date_format');?>
			<?php if ( is_day() ) : ?>
			Daily Archives&nbsp;:&nbsp;<?php the_time($format);?>
			<?php elseif ( is_month() ) :?>
			Monthly Archives&nbsp;:&nbsp;<?php the_time($format); ?>
			<?php elseif ( is_year() ) : ?>
			Yearly Archives&nbsp;:&nbsp;<?php the_time($format); ?>
			<?php else : ?>
			Archives&nbsp;:&nbsp;<?php the_time($format); ?>
			<?php endif;?>
	</h1>

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'post'); ?>
			<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

	</div><!-- #main -->

<?php get_footer(); ?>