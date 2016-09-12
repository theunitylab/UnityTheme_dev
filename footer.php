<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_Unity_Lab_Theme
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="small-12 medium-3 large-3 columns footer-site-logo">
        <div class="small-12 medium-5 large-5 columns nopadding">
         <a href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/Unity-Logo-footer.png" height="113" width="109" alt="The Unity Lab Logo" /></a>
        </div>
        <div class="small-12 medium-7 large-7 columns nopadding">
            <div class="small-12 medium-12 large-12 columns nopadding">
                <h2 class="footer-site-title"><?php bloginfo( 'name' ); ?></h2>
            </div>
        </div>
        <div class="small-12 medium-12 large-12 columns nopadding">
                <!--<img src="<?php bloginfo('stylesheet_directory'); ?>/images/footer-lccc-logo.png" height="43" width="152" alt="LCCC Logo" />-->
            </div>
        </div>
        <div class="small-12 medium-9 large-9 columns">
        </div>
	</footer><!-- #colophon -->
<div class="small-12 medium-12 large-12 columns site-info">
 
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'the-unity-lab-theme' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'the-unity-lab-theme' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'the-unity-lab-theme' ), 'the-unity-lab-theme', '<a href="http://www.theunitylab.com" rel="designer">Joe Querin and David Brattoli</a>' ); ?>
		
</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
