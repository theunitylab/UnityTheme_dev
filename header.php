<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_Unity_Lab_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'the-unity-lab-theme' ); ?></a>

	<header id="masthead" class="small-12 medium-12 large-12 columns site-header" role="banner">
      <div class="row">
		<div class="site-branding">
            <div class="small-12 medium-2 large-2 columns site-logo">
            <a href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/Unity-Logo.png" height="184" width="187" alt="The Unity Lab Logo" /></a>
            </div>
            <div class="small-12 medium-10 large-10 columns">
                <div class="small-12 medium-4 large-3 columns nopadding">    
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                </div>
                <div class="small-12 medium-8 large-9 columns header-menus">
        
<div class="show-for-medium">
    <div class="row">
      <div class="large-12 columns">
        <nav class="menu-centered">
									<?php
          wp_nav_menu(array(
											'container' => false,
											'menu' => __( 'Primary', 'textdomain' ),
											'menu_class' => 'dropdown menu',
											'theme_location' => 'primary',
											'items_wrap'      => '<ul id="%1$s" class="%2$s" data-dropdown-menu>%3$s</ul>',
											//Recommend setting this to false, but if you need a fallback...
											'fallback_cb' => 'lc_topbar_menu_fallback',
											'walker' => new lc_top_bar_menu_walker,
												));
											?>
        </nav>
      </div>
    </div>
  </div>
  <div class="row show-for-small-only mobile-nav-bar">
    <div class="small-8 columns"> <a href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icons/Unity-Logo.png" alt="" width="187" height="184" /></a> </div>
    <div class="small-2 columns clearfix"> <span data-responsive-toggle="mobile-search" data-hide-for="medium"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icons/magnifying-glass.svg" height="25" width="25" alt="" class="float-right" data-toggle/></span> </div>
    <div class="small-2 columns"> <span data-responsive-toggle="responsive-menu" data-hide-for="medium">
      <button class="menu-icon" type="button" data-toggle></button>
      </span> </div>
  </div>
  <div id="mobile-search" class="show-for-small-only">
    <div class="row">
      <div class="small-12 columns">
        <form role="search" method="get" class="search-form" action="">
          <label>
            <input type="search" placeholder="Search" name="s" />
          </label>
        </form>
      </div>
    </div>
  </div>
  <div id="responsive-menu" class="show-for-small-only">
    <ul class="vertical menu" data-drilldown data-parent-link="true">

					<?php 	wp_nav_menu(array(
													'container' => false,
													'menu' => __( 'Drill Menu', 'textdomain' ),
													'menu_class' => 'vertical menu',
													'theme_location' => 'mobile-primary',
													'menu_id' => 'mobile-primary-menu',
														//Recommend setting this to false, but if you need a fallback...
													'fallback_cb' => 'lc_drill_menu_fallback',
													'walker' => new lc_drill_menu_walker(),
												));
					?>

    </ul>
  </div> 
                    
                   <div class="large-9 medium-9 columns social-icons">
      <ul id="header-menu" class="menu text-center">
        <li><a href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/instagram.svg" alt="Unity Instagram Link" width="50" height="50" /></a> </li>
        <li> <a href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/twitter.svg" alt="Unity Twitter Link" width="50" height="50" /></a> </li>
       <li> <a href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/facebook.svg" alt="Unity Facebook Link" width="50" height="50" /></a> </li>
      </ul>
    </div>                
     </div>             
            </div>    
            </div>
		</div><!-- .site-branding -->

		<!-- #site-navigation -->
      </div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
