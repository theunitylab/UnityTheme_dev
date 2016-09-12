<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package The_Unity_Lab_Theme
 */

get_header(); ?>
    <div class="small-12 medium-12 large-12 columns maincontent">
	   <div id="small-12 medium-12 large-12 columns primary" class="content-area">
		      <main id="main" class="site-main" role="main">
                <div class="small-12 medium-6 large-6 columns welcome">
                  <img src="http://placehold.it/800x400">
                </div>
                <div class="small-12 medium-6 large-6 columns welcome">
                  <img src="http://placehold.it/800x400">
                </div>  
		      </main><!-- #main -->
	    </div><!-- #primary -->
        <div class="small-12 medium-12 large-12 columns">
            <div class="row services-menu">
                <img src="http://placehold.it/1200x150">
            </div>
        </div>
        <div class="small-12 medium-12 large-12 columns services">
            <div class="small-12 medium-12 larhe-12 columns service-container">
                <div class="small-12 medium-7 large-7 columns nopadding">
                  <img src="http://placehold.it/839x400">
                </div>
                <div class="small-12 medium-5 large-5 columns nopadding ">
                      <img src="http://placehold.it/600x400">
                </div>
            </div>    
            <div class="small-12 medium-12 larhe-12 columns service-container">
                <div class="small-12 medium-5 large-5 columns nopadding ">
                      <img src="http://placehold.it/600x400">
                </div>
                <div class="small-12 medium-7 large-7 columns nopadding">
                      <img src="http://placehold.it/839x400">
                </div>
            </div>    
            <div class="small-12 medium-12 larhe-12 columns service-container">
                <div class="small-12 medium-7 large-7 columns nopadding">
                      <img src="http://placehold.it/839x400">
                </div>
                <div class="small-12 medium-5 large-5 columns nopadding ">
                      <img src="http://placehold.it/600x400">
                </div>
            </div>    
            <div class="small-12 medium-12 larhe-12 columns service-container">
                <div class="small-12 medium-5 large-5 columns nopadding ">
                      <img src="http://placehold.it/600x400">
                </div>
                <div class="small-12 medium-7 large-7 columns nopadding">
                      <img src="http://placehold.it/839x400">
                </div>
            </div>    
            <div class="small-12 medium-12 large-12 columns news">
            							<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_format() );
				?>

			<?php endwhile; ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
            
            </div>
        </div>
</div>
<?php

get_footer();
