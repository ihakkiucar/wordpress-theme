<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package starter
 */

get_header();
?>

<main id="primary" class="site-main">
		<div class="container">
			<section class="error-404 not-found">
				<div class="page-content">
					
					<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
					<h2 class="has-text-align-center has-vivid-red-color has-text-color" style="font-size:100px">404</h2>
					<p class="has-text-align-center text-404" style="font-size:40px"><strong>Nothing Found!</strong></p>
					<div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->
		</div>						
	</main><!-- #main -->

<?php
get_footer();
