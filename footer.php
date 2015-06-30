<?php
/**
 * The template for displaying the footer.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
?>

	<footer>

<?php
	get_sidebar( 'footer' );
?>

		<a href="<?php echo home_url( '/' ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
			<?php bloginfo( 'name' ); ?>
		</a>

		<?php do_action( 'starkers_credits' ); ?>

		<a href="<?php echo esc_url( __('http://wordpress.org/', 'starkers') ); ?>" title="<?php esc_attr_e('Semantic Personal Publishing Platform', 'starkers'); ?>" rel="generator">
			<?php printf( __('Proudly powered by %s.', 'starkers'), 'WordPress' ); ?>
		</a>

	</footer>

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery-1.11.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>js/angular.min.js"></script>
    <script>
        function scrollNav2() {
$('.ir-sobre-scroll , .ir-portfolio-scroll , .ir-contato-scroll').click(function(){
$('html, body').stop().animate({
scrollTop: $( $(this).attr('href') ).offset().top - 0
}, 1200);
return false;
});
$('.navbar-collapse a').scrollTop();
}
scrollNav2();
</script>
 <!-- Load ScrollTo -->
    <script type="text/javascript" src="http://flesler-plugins.googlecode.com/files/jquery.scrollTo-1.4.2-min.js"></script>

    <!-- Load LocalScroll -->
  <script type="text/javascript" src="http://flesler-plugins.googlecode.com/files/jquery.localscroll-1.2.7-min.js"></script>
</body>
</html>