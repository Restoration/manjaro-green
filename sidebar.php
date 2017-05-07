<?php
/**
 * The sidebar containing the widget area
 *
 *
 * @package WordPress
 * @subpackage ManjaroGreen
 * @since ManjaroGreen 1.0
 */
?>
<div id="sidebar">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footerWidget') ) : ?>
	<?php endif; ?>
</div><!-- /#sidebar -->