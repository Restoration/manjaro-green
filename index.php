<?php
/**
 * The template for displaying  Index pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage ManjaroGreen
 * @since ManjaroGreen 1.0
 */
get_header(); ?>

	<div id="main">
		<?php
			global $wp_query;
			echo '<input type="hidden" value="'. $wp_query->found_posts . '" id="postMaxCnt" />';
		?>
		<div class="postWrap-1">
			<div class="mainInner">
			<?php
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			query_posts('posts_per_page=9&paged='.$paged); ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content','post' ); ?>
				<?php endwhile; else : ?>
				<?php get_template_part( 'content', 'none' ); ?>
			<?php endif; ?>
			</div><!-- /.mainInner -->
		</div>
	</div><!-- /#main -->
	<?php if( $wp_query->found_posts > 9) :?>
		<div id="readMore"><span>Read&nbsp;More</span></div>
	<?php endif;?>

<?php get_footer();?>