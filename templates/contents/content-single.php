<?php
/**
 * @package Nikkon
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		
		<!-- Left column -->
		<div class="post-left-column">
			
			<!-- Release Artwork -->
			<div class='post-thumbnail'>
				<?php 
					if( has_post_thumbnail() ) {
						the_post_thumbnail( 'large' );
					}
				?>
			</div>
			
			<!-- Purchase links -->
			<div id="store-logos">
				<div id="beatport" class="store-logo">
					<a href="<?php echo get_post_meta( $post->ID, "hushlamb_beatport_link", true ); ?>">
						<span class="store-link"></span>
					</a>
				</div>
				<div id="amazon" class="store-logo">
					<a href="<?php echo get_post_meta( $post->ID, "hushlamb_amazon_link", true ); ?>">
						<span class="store-link"></span>
					</a>
				</div>
				<div id="traxsource" class="store-logo">
					<a href="<?php echo get_post_meta( $post->ID, "hushlamb_traxsource_link", true ); ?>">
						<span class="store-link"></span>
					</a>
				</div>
			</div>
			
		</div> <!-- End post-left-column -->
		
		<header class="entry-header">
			<?php 
				$byline = sprintf(
					esc_html_x( '%s', 'post author', 'nikkon' ),
					'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
				);

				the_title( "<h1 class=\"entry-title\">$byline - ", '</h1>' ); 
			?>
			<div class="post-entry-meta">
				<?php hushlamb_released_on( $post ); ?>
			</div><!-- .entry-meta -->
		</header><!-- .entry-header -->
		<div class='post-content'>
			<?php the_content(); ?>
		</div>
		
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'nikkon' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php nikkon_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
