<?php
if( get_theme_mod( 'nikkon-social-email', false ) ) :
    echo '<a href="' . esc_url( 'mailto:' . antispambot( get_theme_mod( 'nikkon-social-email' ), 1 ) ) . '" title="' . esc_attr__( 'Send Us an Email', 'nikkon' ) . '" class="social-icon social-email"><i class="fa fa-envelope-o"></i></a>';
endif;

if( get_theme_mod( 'nikkon-social-skype', false ) ) :
    echo '<a href="skype:' . esc_html( get_theme_mod( 'nikkon-social-skype' ) ) . '?userinfo" title="' . esc_attr__( 'Contact Us on Skype', 'nikkon' ) . '" class="social-icon social-skype"><i class="fa fa-skype"></i></a>';
endif;

if( get_theme_mod( 'nikkon-social-facebook', false ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'nikkon-social-facebook' ) ) . '" target="_blank" title="' . esc_attr__( 'Find Us on Facebook', 'nikkon' ) . '" class="social-icon social-facebook"><i class="fa fa-facebook"></i></a>';
endif;

if( get_theme_mod( 'nikkon-social-twitter', false ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'nikkon-social-twitter' ) ) . '" target="_blank" title="' . esc_attr__( 'Follow Us on Twitter', 'nikkon' ) . '" class="social-icon social-twitter"><i class="fa fa-twitter"></i></a>';
endif;

if( get_theme_mod( 'nikkon-social-google-plus', false ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'nikkon-social-google-plus' ) ) . '" target="_blank" title="' . esc_attr__( 'Find Us on Google Plus', 'nikkon' ) . '" class="social-icon social-gplus"><i class="fa fa-google-plus"></i></a>';
endif;

if( get_theme_mod( 'nikkon-social-youtube', false ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'nikkon-social-youtube' ) ) . '" target="_blank" title="' . esc_attr__( 'View our YouTube Channel', 'nikkon' ) . '" class="social-icon social-youtube"><i class="fa fa-youtube"></i></a>';
endif;

if( get_theme_mod( 'nikkon-social-instagram', false ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'nikkon-social-instagram' ) ) . '" target="_blank" title="' . esc_attr__( 'Follow Us on Instagram', 'nikkon' ) . '" class="social-icon social-instagram"><i class="fa fa-instagram"></i></a>';
endif;

if( get_theme_mod( 'nikkon-social-pinterest', false ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'nikkon-social-pinterest' ) ) . '" target="_blank" title="' . esc_attr__( 'Pin Us on Pinterest', 'nikkon' ) . '" class="social-icon social-pinterest"><i class="fa fa-pinterest"></i></a>';
endif;

if( get_theme_mod( 'nikkon-social-linkedin', false ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'nikkon-social-linkedin' ) ) . '" target="_blank" title="' . esc_attr__( 'Find Us on LinkedIn', 'nikkon' ) . '" class="social-icon social-linkedin"><i class="fa fa-linkedin"></i></a>';
endif;

if( get_theme_mod( 'nikkon-social-tumblr', false ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'nikkon-social-tumblr' ) ) . '" target="_blank" title="' . esc_attr__( 'Find Us on Tumblr', 'nikkon' ) . '" class="social-icon social-tumblr"><i class="fa fa-tumblr"></i></a>';
endif;

if( get_theme_mod( 'nikkon-social-flickr', false ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'nikkon-social-flickr' ) ) . '" target="_blank" title="' . esc_attr__( 'Find Us on Flickr', 'nikkon' ) . '" class="social-icon social-flickr"><i class="fa fa-flickr"></i></a>';
endif;

if ( !get_theme_mod( 'nikkon-social-email', false ) && 
    !get_theme_mod( 'nikkon-social-skype', false ) && 
    !get_theme_mod( 'nikkon-social-facebook', false ) && 
    !get_theme_mod( 'nikkon-social-twitter', false ) && 
    !get_theme_mod( 'nikkon-social-google-plus', false ) && 
    !get_theme_mod( 'nikkon-social-youtube', false ) && 
    !get_theme_mod( 'nikkon-social-instagram', false ) && 
    !get_theme_mod( 'nikkon-social-pinterest', false ) && 
    !get_theme_mod( 'nikkon-social-linkedin', false ) && 
    !get_theme_mod( 'nikkon-social-tumblr', false ) && 
    !get_theme_mod( 'nikkon-social-flickr', false ) ) {
    echo '<a class="social-icon social-facebook"><i class="fa fa-facebook"></i></a><a class="social-icon social-twitter"><i class="fa fa-twitter"></i></a><a class="social-icon social-instagram"><i class="fa fa-instagram"></i></a><a class="social-icon social-pinterest social-pinterest-fake"><i class="fa fa-pinterest"></i> <span>+ more</span></a>';
}