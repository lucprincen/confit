<?php


	/**
	 * Sets config and starts the theme
	 *
	 * @access public
	 * @return void
	 */
    function confitStartApp(){

    	confitIncludes();

    	//include the default layout
    	$layout = apply_filters( 'confit_default_layout', 'main' );
    	confitLayout( $layout );
        
    }

    

    /**
     * Include all template files
     *
     * @access public
     * @return void
     */
    function confitIncludes(){

    	$includes = array(
    		'views'		=> apply_filters( 'confit_views_folder', '/templates/views/' ),
    		'elements'	=> apply_filters( 'confit_elements_folder', '/templates/elements' )
    	);

    }





    /**
     * Get a layout file
     *
     * @access public
     * @param  String $template Layout name
     * @return void
     */
    function confitLayout( $template ){

    	$prefix = '/templates/layouts/';
    	$prefix = apply_filters( 'confit_layouts_folder', $prefix );

    	get_template_part( $prefix.$template );
    }

