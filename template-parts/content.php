<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package starter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
		?>
			<div class="starter-categories">
				<?php 
					$categories = get_the_category();
					$separator = ', ';
					$output = '';
					if ( ! empty( $categories ) ) {
					foreach( $categories as $category ) {
						$output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'starter' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
					}
					echo trim( $output, $separator );
					}
				?>
			</div>
		<?php	
			the_title( '<h1 class="entry-title">', '</h1>' );
		endif;?>
		
	</header><!-- .entry-header -->

	

	<div class="entry-content">
		<?php
		if ( is_singular() ) :
			the_content(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'starter' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				)
			);

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'starter' ),
					'after'  => '</div>',
				)
			);
		else :?>
			<div class="wp-block-columns blog-post-list">
				<div class="wp-block-column" style="flex-basis:45%">
					<?php  starter_post_thumbnail('title="' . get_the_title(). '"');?>
				</div>
				<div class="wp-block-column" style="flex-basis:55%">
					
					<?php  the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" title="' . get_the_title() .'" rel="bookmark">', '</a></h2>' );
							the_excerpt();?>
					<div class="read-more-link"><a href="<?php esc_url( the_permalink())?>" title="<?php esc_url( the_title())?>">Read more</a></div>
					<?php 
					starter_posted_by();
					wp_link_pages(
						array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'starter' ),
							'after'  => '</div>',
						)
					);?>
				</div>
	</div>
			
			
		<?php endif;?>
	</div><!-- .entry-content -->
	<?php
		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				if ( is_singular() ) :
					starter_posted_on();
					starter_posted_by();
				endif;?>
			</div><!-- .entry-meta -->
			<?php
				if ( is_single() ) :?>
			<div class="blog-share">
				<div class="blog-share__box">
					<a class="blog-share__link" href="https://twitter.com/intent/tweet?text=<?php esc_url( the_title())?>&url=<?php esc_url( the_permalink())?>" title="Share on Twitter" target="_blank">
						<img class="blog-share__icon" src="<?php echo get_stylesheet_directory_uri();?>/assets/twitter.png" alt="twitter">	
						<span></span>
					</a>
				</div>
				<div class="blog-share__box">
					<a class="blog-share__link" href="https://www.facebook.com/sharer/sharer.php?u=<?php esc_url( the_permalink())?>" title="Share on Facebook" target="_blank">
						<img class="blog-share__icon" src="<?php echo get_stylesheet_directory_uri();?>/assets/facebook.png" alt="facebook" >	
						<span></span>
					</a>
				</div>
				<div class="blog-share__box">
					<a class="blog-share__link" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php esc_url( the_permalink())?>" title="Share on LinkedIn" target="_blank">
						<img class="blog-share__icon" src="<?php echo get_stylesheet_directory_uri();?>/assets/linkedin.png" alt="linkedin">
						<span></span>
					</a>
				</div>
			</div>
			<div class="blog-navigation">
				<div class="blog-navigation__button">
					<?php previous_post_link( $format = '%link', $link = 'Previous Post' ); ?> 
				</div>
				<div class="blog-navigation__button">
					<?php next_post_link( $format = '%link', $link = 'Next Post' ); ?> 
				</div>	
			</div>
			
			
			
		<?php endif; ?>
		<?php endif; ?>
	<footer class="entry-footer">
		
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
