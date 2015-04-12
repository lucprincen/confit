<?php
/*
 * Make WordPress redirect every request to index.php
 * User scripts/router.js to define your (custom) routes.
 */

//Bootstrap the app by including the main layout:    	
$prefix = 'templates/layouts/';
$prefix = apply_filters( 'confit_layouts_folder', $prefix );

$layout = apply_filters( 'confit_default_layout', 'main' );

get_template_part( $prefix.$layout );