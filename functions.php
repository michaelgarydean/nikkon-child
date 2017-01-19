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

