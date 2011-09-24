<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Toolbox
 * @since Toolbox 0.1
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">
		<div id="site-generator">
			<?php do_action( 'toolbox_credits' ); ?>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'toolbox' ), 'Bite The Edge', '<a href="http://www.hugochinchilla.net/" rel="designer">Hugo Chinchilla</a>' ); ?>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<script type="text/javascript" src="http://use.typekit.com/tmh5xcy.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<?php wp_footer(); ?>

</body>
</html>