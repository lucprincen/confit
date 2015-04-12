<?php


    /**
     * Include all template files
     *
     * @access public
     * @return void
     */
    function confitYield(){

        //auto-loads all .php files in these directories.
    	$includes = array(
    		'views'		=> apply_filters( 'confit_views_folder', 'templates/views' ),
    		'elements'	=> apply_filters( 'confit_elements_folder', 'templates/elements' )
    	);

        foreach( $includes as $key => $inc ){

            echo '<!-- '.$key.'-->';
            $root = trailingslashit( get_template_directory() );
            $files = glob( $root.$inc.'/*.php' );

            foreach ( $files as $file ){

                require_once( $file );

            }
        }
    }


    /**
     * Make the front-end includes a bit more readable
     *
     * @access public
     * @param   $type Type string
     * @return  String url
     */
    function confitUrl( $type, $echo = true ){

        $url = trailingslashit( get_template_directory_uri() );

        switch( $type ){

            case 'vendors':

                $url .= 'scripts/vendors';
                break;

            case 'assets':

                $url .= 'assets';
                break;

            case 'scripts':

                $url .= 'scripts';
                break;

            case 'css':

                $url .= 'assets/css';
                break;

            case 'images':

                $url .= 'assets/images';
                break;

        }

        if( $echo )
            echo $url;


        return $url;

    }

    show_admin_bar( false );

