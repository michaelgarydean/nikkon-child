<footer id="colophon" class="site-footer site-footer-social">
	
	<div class="site-footer-icons">
        <div class="site-container">
            
            <?php
			if( get_theme_mod( 'nikkon-social-email', false ) ) :
			    echo '<a href="' . esc_url( 'mailto:' . antispambot( get_theme_mod( 'nikkon-social-email' ), 1 ) ) . '" title="' . esc_attr__( 'Send Us an Email', 'nikkon' ) . '" class="footer-social-icon footer-social-email"><i class="fa fa-envelope-o"></i></a>';
			endif;

			if( get_theme_mod( 'nikkon-social-skype', false ) ) :
			    echo '<a href="skype:' . esc_html( get_theme_mod( 'nikkon-social-skype' ) ) . '?userinfo" title="' . esc_attr__( 'Contact Us on Skype', 'nikkon' ) . '" class="footer-social-icon footer-social-skype"><i class="fa fa-skype"></i></a>';
			endif;

			if( get_theme_mod( 'nikkon-social-facebook', false ) ) :
			    echo '<a href="' . esc_url( get_theme_mod( 'nikkon-social-facebook' ) ) . '" target="_blank" title="' . esc_attr__( 'Find Us on Facebook', 'nikkon' ) . '" class="footer-social-icon footer-social-facebook"><i class="fa fa-facebook"></i></a>';
			endif;

			if( get_theme_mod( 'nikkon-social-twitter', false ) ) :
			    echo '<a href="' . esc_url( get_theme_mod( 'nikkon-social-twitter' ) ) . '" target="_blank" title="' . esc_attr__( 'Follow Us on Twitter', 'nikkon' ) . '" class="footer-social-icon footer-social-twitter"><i class="fa fa-twitter"></i></a>';
			endif;

			if( get_theme_mod( 'nikkon-social-google-plus', false ) ) :
			    echo '<a href="' . esc_url( get_theme_mod( 'nikkon-social-google-plus' ) ) . '" target="_blank" title="' . esc_attr__( 'Find Us on Google Plus', 'nikkon' ) . '" class="footer-social-icon footer-social-gplus"><i class="fa fa-google-plus"></i></a>';
			endif;

			if( get_theme_mod( 'nikkon-social-youtube', false ) ) :
			    echo '<a href="' . esc_url( get_theme_mod( 'nikkon-social-youtube' ) ) . '" target="_blank" title="' . esc_attr__( 'View our YouTube Channel', 'nikkon' ) . '" class="footer-social-icon footer-social-youtube"><i class="fa fa-youtube"></i></a>';
			endif;

			if( get_theme_mod( 'nikkon-social-vimeo', false ) ) :
			    echo '<a href="' . esc_url( get_theme_mod( 'nikkon-social-vimeo' ) ) . '" target="_blank" title="' . esc_attr__( 'View our Vimeo Channel', 'nikkon' ) . '" class="footer-social-icon footer-social-vimeo"><i class="fa fa-vimeo"></i></a>';
			endif;

			if( get_theme_mod( 'nikkon-social-instagram', false ) ) :
			    echo '<a href="' . esc_url( get_theme_mod( 'nikkon-social-instagram' ) ) . '" target="_blank" title="' . esc_attr__( 'Follow Us on Instagram', 'nikkon' ) . '" class="footer-social-icon footer-social-instagram"><i class="fa fa-instagram"></i></a>';
			endif;

			if( get_theme_mod( 'nikkon-social-pinterest', false ) ) :
			    echo '<a href="' . esc_url( get_theme_mod( 'nikkon-social-pinterest' ) ) . '" target="_blank" title="' . esc_attr__( 'Pin Us on Pinterest', 'nikkon' ) . '" class="footer-social-icon footer-social-pinterest"><i class="fa fa-pinterest"></i></a>';
			endif;

			if( get_theme_mod( 'nikkon-social-linkedin', false ) ) :
			    echo '<a href="' . esc_url( get_theme_mod( 'nikkon-social-linkedin' ) ) . '" target="_blank" title="' . esc_attr__( 'Find Us on LinkedIn', 'nikkon' ) . '" class="footer-social-icon footer-social-linkedin"><i class="fa fa-linkedin"></i></a>';
			endif;

			if( get_theme_mod( 'nikkon-social-tumblr', false ) ) :
			    echo '<a href="' . esc_url( get_theme_mod( 'nikkon-social-tumblr' ) ) . '" target="_blank" title="' . esc_attr__( 'Find Us on Tumblr', 'nikkon' ) . '" class="footer-social-icon footer-social-tumblr"><i class="fa fa-tumblr"></i></a>';
			endif;

			if( get_theme_mod( 'nikkon-social-flickr', false ) ) :
			    echo '<a href="' . esc_url( get_theme_mod( 'nikkon-social-flickr' ) ) . '" target="_blank" title="' . esc_attr__( 'Find Us on Flickr', 'nikkon' ) . '" class="footer-social-icon footer-social-flickr"><i class="fa fa-flickr"></i></a>';
			endif;
			
			
			if ( !get_theme_mod( 'nikkon-social-email', false ) && 
				!get_theme_mod( 'nikkon-social-skype', false ) && 
				!get_theme_mod( 'nikkon-social-facebook', false ) && 
				!get_theme_mod( 'nikkon-social-twitter', false ) && 
				!get_theme_mod( 'nikkon-social-google-plus', false ) && 
				!get_theme_mod( 'nikkon-social-youtube', false ) && 
				!get_theme_mod( 'nikkon-social-vimeo', false ) && 
				!get_theme_mod( 'nikkon-social-instagram', false ) && 
				!get_theme_mod( 'nikkon-social-pinterest', false ) && 
				!get_theme_mod( 'nikkon-social-linkedin', false ) && 
				!get_theme_mod( 'nikkon-social-tumblr', false ) && 
				!get_theme_mod( 'nikkon-social-flickr', false ) ) {
				echo '<a class="footer-social-icon footer-social-facebook"><i class="fa fa-facebook"></i></a><a class="footer-social-icon footer-social-twitter"><i class="fa fa-twitter"></i></a><a class="footer-social-icon footer-social-instagram"><i class="fa fa-instagram"></i></a><a class="footer-social-icon footer-social-pinterest"><i class="fa fa-pinterest"></i> <span>+ more</span></a>';
			} ?>
			
        	<div class="site-footer-social-ad">
        		<i class="fa fa-map-marker"></i> <?php echo wp_kses_post( get_theme_mod( 'nikkon-website-site-add', __( 'Cape Town, South Africa', 'nikkon' ) ) ) ?>
        	</div>
			
			<div class="site-footer-social-copy">
				<?php echo wp_kses_post( get_theme_mod( 'nikkon-website-txt-copy', 'Nikkon theme, by <a href="https://kairaweb.com/">Kaira</a>' ) ) ?>
			</div>
            
            <div class="clearboth"></div>
        </div>
    </div>
    
</footer>

<?php if ( get_theme_mod( 'nikkon-footer-bottombar', false ) == 0 ) : ?>
	
	<div class="site-social-bottom-bar site-footer-bottom-bar">
	
		<div class="site-container">
			
	        <?php wp_nav_menu( array( 'theme_location' => 'footer-bar','container' => false, 'depth'  => 1 ) ); ?>
                
	    </div>
		
        <div class="clearboth"></div>
	</div>
	
<?php endif; ?>