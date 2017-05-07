<?php
/**
 * The template for displaying a "No posts found" message
 *
 *
 * @package WordPress
 * @subpackage ManjaroGreen
 * @since ManjaroGreen 1.0
 */
?>
<h1 id="resultTitle">404 Not Found.</h1>

<?php if ( is_search() ) : ?>

	<p class="resultMessage">Sorry, but nothing matched your search terms. Please try again with some different keywords.</p>
	<?php get_search_form(); ?>

<?php else : ?>

	<p class="resultMessage">It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.</p>
	<?php get_search_form(); ?>

<?php endif; ?>