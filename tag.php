<?php
/**
 * The template for displaying Tag pages
 *
 *
 * @package WordPress
 * @subpackage ManjaroGreen
 * @since ManjaroGreen 1.0
 */
get_header(); ?>

	<div id="main">

		<?php if ( have_posts() ) : ?>
			<?php
				$term = get_queried_object();
				echo '<input type="hidden" value="'. $term->count . '" id="postMaxCnt" />';
			?>
			<h1 id="tagTitle">Tag&nbsp;:&nbsp;<?php  single_cat_title(); ?></h1>
			<div class="postWrap-1">
				<div class="mainInner">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content','post' ); ?>
				<?php endwhile; ?>
				</div><!-- /.mainInner -->
			</div><!-- /.postWrap-1 -->
		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

	</div><!-- #main -->

	<?php if( $term->count > 9) :?>
		<div id="readMore"><span>Read&nbsp;More</span></div>
	<?php endif;?>

<?php get_footer(); ?>