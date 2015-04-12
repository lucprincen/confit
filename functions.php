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

        confitSetSettings();
    }

    /**
     * Sets the global settings required by the JSON API:
     *
     * @access public
     * @return void
     */
    function confitSetSettings(){

        $plugin_url = trailingslashit( WP_PLUGIN_URL ).'/json-rest-api/wp-api';

        //register the global object needed by the api & confiture:
        $settings = array( 
            'root'      => esc_url_raw( get_json_url() ),
            'nonce'     => wp_create_nonce( 'wp_json' ),
            'api'       => esc_url_raw( $plugin_url ),
            'scripts'   => esc_url_raw( confitUrl( 'scripts', false ) ),
            'vendors'   => esc_url_raw( confitUrl( 'vendors', false ) )
        ); 


        echo '<script>';
            echo 'var Confit_Settings = '.json_encode( $settings ).';';
            echo 'var WP_API_Settings = Confit_Settings;';
        echo '</script>';

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

            case 'requirejs':

                $url .= 'scripts/vendors/requirejs/require.js';
                break;

            case 'config':

                $url .= 'scripts/config'; //no trailing .js for the data-attr
                break;
        }

        if( $echo )
            echo $url;


        return $url;

    }

    show_admin_bar( false );

