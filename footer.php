<?php
/**
 * The template for displaying the footer
 *
 *
 * @package WordPress
 * @subpackage ManjaroGreen
 * @since ManjaroGreen 1.0
 */
?>
			</div><!-- /#wrap .clearfix -->
			<footer id="footer">
				<div id="footerInner">
					<?php get_sidebar();?>
				</div><!-- /#footerInner -->
				<p id="copyright">
					<span>Copyright&nbsp;&copy;&nbsp;<?php echo date('Y'); ?> <a href="<?php echo esc_url(home_url());?>"><?php bloginfo('name');?></a>  All Rights Reserved.</span>
				</p>
			</footer><!-- /#footer -->
		</div><!-- /#container -->
	<?php wp_footer();?>
	</body>
</html>