<?php
/**
 * The template for displaying post content
 *
 *
 * @package WordPress
 * @subpackage ManjaroGreen
 * @since ManjaroGreen 1.0
 */
 ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<h1>
			<?php the_title();?>
		</h1>
	</header>

	<div id="thumbnail">
	<?php
		if ( has_post_thumbnail() ):
		$title= get_the_title();
		the_post_thumbnail(array('',400),array( 'alt' =>$title, 'title' => $title ));?>
	<?php endif; ?>
	</div><!-- /#thumbnail -->

	<ul class="postMeta">
		<li class="postTime"><?php the_date('m/d/Y'); ?></li>
		<?php if(has_category()) : ?>
			<li class="postCategory">Categorys&nbsp;:&nbsp;<?php the_category(' / ');?></li>
		<?php endif;?>
		<?php if(has_tag()): ?>
			<li class="postTag">Tags&nbsp;:&nbsp;<?php the_tags('',' / ','');?></li>
		<?php endif;?>
	</ul>
	<div id="content">
		<?php the_content(); ?>
	</div><!-- /#content -->

	<ul id="postPaging" class="clearfix">
		<?php if (get_next_post(true)):?>
			<?php if(is_single() ): ?>
	    		<li class="next"><?php next_post_link('%link','%title',true); ?></li>
			<?php else : ?>
				<li class="next"><?php next_posts_link('%link','%title',true); ?></li>
			<?php endif; ?>
		<?php endif; ?>

		<?php if (get_previous_post(true)):?>
			<?php if(is_single() ): ?>
	    		<li class="prev"><?php previous_post_link('%link','%title',true); ?></li>
			<?php else : ?>
				<li class="next"><?php previous_posts_link('%link','%title',true); ?></li>
			<?php endif; ?>
		<?php endif; ?>
	</ul>

	<?php comments_template(); ?>

</article>