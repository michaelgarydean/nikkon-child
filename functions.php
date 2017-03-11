<?php

    /**
     * Load CSS from parent theme.
     * 
     */
    add_action( 'wp_enqueue_scripts', 'nikkon_parent_theme_enqueue_styles' );
    
    function nikkon_parent_theme_enqueue_styles() {
        wp_enqueue_style( 'nikkon-style', get_template_directory_uri() . '/style.css' );
        wp_enqueue_style( 'nikkon-child-style',
            get_stylesheet_directory_uri() . '/style.css',
            array( 'nikkon-style' )
        );
    }
    
    // Add SoundCloud oEmbed
    add_action('init','add_oembed_soundcloud');
    
    function add_oembed_soundcloud(){
        wp_oembed_add_provider( 'http://soundcloud.com/*', 'http://soundcloud.com/oembed' );
    }
    
    if ( ! function_exists( 'hushlamb_released_on' ) ) :
    /**
     * Prints HTML with meta information for the current post-date/time and author.
     * 
     * Adapted from parent theme.
     * @see nikkon_posted_on()
     */
    function hushlamb_released_on( $post ) {
    	$time_string = get_post_meta( $post->ID, "hushlamb_release_date", true );
    	
    	//Error handling in case the user managed to get past validation of date metadata
    	try {
    	    $date = date("j F Y", strtotime( $time_string ));
    
        	$posted_on = sprintf(
        		esc_html_x( 'Released on %s', 'post date', 'nikkon' ),
        		'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $date . '</a>'
        	);
    	    
    	} catch( Exception $error ) {
        	$posted_on = sprintf( esc_html_x( 'Released ', 'post date', 'nikkon' ) );
    	}
    
    	echo( '<span class="posted-on">' . $posted_on ); // WPCS: XSS OK
    
    }
    endif;
