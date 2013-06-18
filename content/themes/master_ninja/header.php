<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package _s
 * @since _s 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="debug splash_bg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', '_s' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<script src="<?php echo get_template_directory_uri(); ?>/js/masterninja_head.js"></script>

<!-- Google Web Fonts -->
<!-- comment link below to disable google fonts, also change strong, .strong weight in master.css from 400 to 700. -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,300,400,' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>
</head>

<body data-responsejs='{
    "create": [
    { "breakpoints": [0,301,320,401,481,641,961,801,1000,1025,1281], "mode": "src", "prefix": "src" }, 
    { "breakpoints": [0,301,320,321,401,481,521,601,641,661,714,961,801,821,892,1000,1001,1025,1281], "mode": "markup", "prefix": "r" }
    ]}'
>
<div>
	