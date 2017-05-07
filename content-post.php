<?php
/**
 * The template for displaying the Post
 *
 *
 * @package WordPress
 * @subpackage ManjaroGreen
 * @since ManjaroGreen 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<a href="<?php the_permalink(); ?>">
			<h1><?php the_title(); ?></h1>
		</a>
	</header>

	<div class="postInner">
		<?php if ( has_post_thumbnail() ) :?>
			<a href="<?php the_permalink(); ?>">
				<div class="postImage has-light-mask image-effect">
				<?php
					$title= get_the_title();
					the_post_thumbnail(array(724,300),array( 'alt' =>$title, 'title' => $title ));?>
				</div><!-- /.postImage -->
			</a>
		<?php endif; ?>

		<ul class="postMeta">
			<li class="postTime"><time><?php the_date('m/d/Y');?></time></li>
			<?php if(has_category()) : ?>
				<li class="postCategory">Categorys&nbsp;:&nbsp;<?php the_category(' / ');?></li>
			<?php endif;?>
			<?php if(has_tag()): ?>
				<li class="postTag">Tags&nbsp;:&nbsp;<?php the_tags('',' / ','');?></li>
			<?php endif;?>
		</ul>

		<div class="postText">
      		<?php the_excerpt();?>
	  	</div><!-- /.postText -->

	  	<p class="moreLink"><a href="<?php the_permalink();?>" class="arrow">MORE</a></p>

	</div><!-- /.postInner -->

</article><!-- /.post-->