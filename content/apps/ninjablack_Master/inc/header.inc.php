<?php defined('INDEX') or die() and exit(); // Prevents direct script access
/**
 * Shadow
 *
 * An open source application development framework that streamlines
 * responsive e-ecommerce development for php 5.0.0 or newer
 *
 * @package        Shadow
 * @author         Super Amazing
 * @copyright      Copyright (c) 2010 - 2013, Super Amazing
 * @license        
 * @link           http://shadow.livesuperamazing.com
 * @since          Version 0.1.1 s5
 * -----------------------------------------------------------------
 *
 * This is the main page
 * This page includes the configuration file,
 * the templates, and any content-specific modules.
 */
 
// --------------------------------------------------------------------------------?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> in HTACCESS FILE to Avoid Validation Error -->
    
    <title><?php get_page_header_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/> <!--320-->
    <meta name="keywords" content="natural medicine, natural health, homeopathic remedies, homeopathic medicines, homeopathy, no side effects, side effects, no side affects, no contraindications, natural drugs, natural meds, natural cures, natural remedies, safe medicine, nontoxic, non-toxic, not toxic, hypoallergenic, hypo-allergenic, non-allergic, no allergy, dr. king, king bio, bio king, safecare, smart medicine, safe-care, safe medicines, safe homeopathy"/> 
    
    <meta name="author" content="<?php echo ADMIN_NAME; ?>">

    <!-- Favicons -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo APP_IMG_URL; ?>favicons/favicon-114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo APP_IMG_URL; ?>favicons/favicon-72.png">
    <link rel="shortcut icon" href="<?php echo APP_IMG_URL; ?>favicons/favicon-16.png">
    <!--[if IE]><link rel="shortcut icon" href="<?php echo APP_IMG_URL; ?>favicons/favicon-16.icon"><![endif]-->
    <!-- or, set /favicon-16.ico for IE10 win -->
    
    <?php shdw_header(); ?>
    <link rel="stylesheet" href="<?php echo APP_STYLE_URL; ?>all.css" type="text/css" media="screen" />

</head>	

<body>
<div class="wrapper">
<?php get_pilot(); ?>
<a class="drop-nav-trigger" onClick="toggle_visibility('drop-nav')"></a>
<nav class="actionbar pam">
	<div class="row">
        <div class="pull-left">
            <a class="logo" href="<?php echo SITE_URL; ?>"><?php echo SITE_NAME; ?></a>
        </div>
        <div class="pull-right">
        	<span class="visible-md visible-lg visible-xl">
            	<?php login_form( 'inline' ); ?> 
           	</span>
            <span class="visible-xs visible-sm">
            	<?php if( !is_logged_in() ) : ?>
                    <a class="btn btn-primary" href="<?php SITE_URL; ?>admin/login">Login</a>
                <?php endif; ?>
            </span>
            <?php if( is_logged_in() ) : ?>
            	<a class="btn btn-default" href="<?php SITE_URL; ?>admin/logout">Logout</a>
           	<?php endif; ?>
        </div>
    </div><!-- end row -->
</nav><!-- end action-bar -->