<?php
/**
 * Main layout file
 *
 * Make WordPress redirect every request to index.php
 * User scripts/router.js to define your (custom) routes.
 * 
 * @package Confiture
 * @since 2015
 */
?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php wp_title();?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php confitUrl( 'css' );?>/app.css">
        <script src="<?php confitUrl( 'vendors' );?>/modernizr/modernizr.js"></script>
        <?php wp_head();?>
    </head>
<body>

<!-- load everything in the #yield wrapper -->
<div class="wrapper" id="yield"></div>

<?php
    
    //get all included template-files:
    confitYield();

    wp_footer();


?>

<!-- script loading via requirejs -->
<script data-main="<?php confitUrl( 'config' );?>" src="<?php confitUrl( 'requirejs' );?>"></script>

<!-- analytics -->
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
    e.src='//www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>
</body>
</html>