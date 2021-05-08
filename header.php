<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package starter
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="dns-prefetch" href="//ajax.googleapis.com"/>
	<link rel="dns-prefetch" href="//connect.facebook.net"/>
	<link rel="dns-prefetch" href="//px.ads.linkedin.com"/>
	<link rel="dns-prefetch" href="//www.google-analytics.com"/>
	<link rel="dns-prefetch" href="//www.googletagmanager.com"/>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'starter' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container">
			
			<nav id="site-navigation" class="main-navigation">
			<h1 class="logo">
				<a href="<?php echo get_home_url(); ?>" title="Homepage">
					<img width="1" src="<?php echo get_stylesheet_directory_uri();?>/assets/logo.png" alt="Logo">
				</a>	
			</h1>
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false" onclick="menuToggle(this)"><div class="menu-bar1"></div><div class="menu-bar2"></div><div class="menu-bar3"></div></button>

				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'header',
					)
				);
				?>
			</nav><!-- #site-navigation -->
		</div><!-- .container -->
	</header><!-- #masthead -->
	