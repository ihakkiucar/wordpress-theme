<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package starter
 */

?>
	<footer class="site-footer">
		<div class="container">
			<div class="wp-block-columns">
				<div class="wp-block-column" style="flex-basis:20%">
					<h5 class="menu-title"><?php esc_html_e( 'Menu Title', 'starter' ); ?></h5>
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'footer-1',
							)
						);
					?>
				</div>
				<div class="wp-block-column" style="flex-basis:20%">
					<h5 class="menu-title"><?php esc_html_e( 'Menu Title', 'starter' ); ?></h5>
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'footer-2',
							)
						);
					?>
				</div>
				<div class="wp-block-column" style="flex-basis:20%">
					<h5 class="menu-title"><?php esc_html_e( 'Menu Title', 'starter' ); ?></h5>
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'footer-3',
							)
						);
					?>
				</div>
				<div class="wp-block-column" style="flex-basis:20%">
					<h5 class="menu-title"><?php esc_html_e( 'Menu Title', 'starter' ); ?></h5>
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'footer-4',
							)
						);
					?>
				</div>
				<div class="wp-block-column" style="flex-basis:20%">
					<h5 class="menu-title"><?php esc_html_e( 'Menu Title', 'starter' ); ?></h5>
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'footer-5',
							)
						);
					?>
				</div>
			</div>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>