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
<article id="post-<?php the_ID(); ?>">

	<h1 id="pageTitle"><?php the_title();?></h1>

	<div id="content">
		<?php the_content(); ?>
	</div><!-- /#content -->

</article>