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
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7 ie6" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8 ie7" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9 ie8" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js lt-ie10 ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> in HTACCESS FILE to Avoid Validation Error -->
    <title><?php get_page_header_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/> <!--320-->
    <meta name="keywords" content=""/>  
    <meta name="author" content="<?php echo ADMIN_NAME; ?>">

    <!-- Favicons -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo APP_IMG_URL; ?>favicons/favicon-114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo APP_IMG_URL; ?>favicons/favicon-72.png">
    <link rel="shortcut icon" href="<?php echo APP_IMG_URL; ?>favicons/favicon-16.png">
    <!--[if IE]><link rel="shortcut icon" href="<?php echo APP_IMG_URL; ?>favicons/favicon-16.icon"><![endif]-->
    <!-- or, set /favicon-16.ico for IE10 win -->
    
    <?php shdw_header(); ?>
    <link href='http://fonts.googleapis.com/css?family=Sacramento' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo APP_STYLE_URL; ?>all.css" type="text/css" media="screen" />

</head>        

<body>

<?php get_pilot(); ?>
<div class="relative">
<nav id="journey-nav-expanded" class="visible-md-up journey-fixed">
	<div class="journey-expanded-search">
        <form class="form-inline journey-search-bar" role="form" action="#" />
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search <?php echo SITE_NAME; ?>" />
              <span class="input-group-btn">
                <button type="submit" class="btn btn-info"><img src="<?php echo APP_IMG_URL; ?>search.png" /></button>
              </span>
            </div><!-- /input-group -->
        </form>
    </div>
    <div class="journey-expanded-body">
        <ul class="journey-nav-expanded-main ptn mtn">
            <li><a href="#">Menu Item</a></li>
            <li><a href="#">Menu Item</a></li>
            <li><a href="#">Menu Item</a></li>
            <li><a href="#">Menu Item</a></li>
        </ul>
        <div class="journey-heading">Section Heading</div>
        <ul class="journey-sub-nav">
            <li><a href="#">Menu Item</a></li>
            <li><a href="#">Menu Item</a></li>
            <li><a href="#">Menu Item</a></li>
            <li><a href="#">Menu Item</a></li>
            <li><a href="#">Menu Item</a></li>
        </ul>
        <div class="journey-heading visible-xs">Account</div>
        <ul class="visible-xs">
        	<li class="has-button">
                <a href="#" class="btn btn-primary btn-block btn-sm">
                    Login
                </a>
            </li>
            <li class="has-button">
                <a href="#" class="btn btn-success btn-block btn-sm">
                    Join
                </a>
            </li>
        </ul>
  	</div><!-- end journey-expanded-body -->
</nav><!-- end journey-left-nav-expanded -->
 
<div class="wrapper">
        <div class="journey journey-fixed">
        <a href="#"><span class="journey-expanded-bg"></span></a>
        <header>
         	<ul class="journey-bar">
                <li class="journey-nav-expanded-open">
                    <a href="#journey-nav-expanded">
                        <img class="pull-left" src="<?php echo APP_IMG_URL; ?>menu.png" />
                    </a>
                </li>
                <li class="journey-nav-expanded-close">
                    <a href="#">
                        <img class="pull-left" src="<?php echo APP_IMG_URL; ?>close-menu.png" />
                    </a>
                </li>
                <li class="has-btn">
                    <a href="<?php echo SITE_URL; ?>">
                            <div class="journey-icon-text"><?php get_site_initial(); ?></div>
                        <div class="journey-wordmark"><?php get_site_name(); ?></div>
                    </a>
                </li>
                <li class="journey-search hidden-xs has-btn">
                    <form class="form-inline journey-search-bar" role="form" action="#" />
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Search <?php echo SITE_NAME; ?>" />
                          <span class="input-group-btn">
                            <button type="submit" class="btn btn-info"><img src="<?php echo APP_IMG_URL; ?>search.png" /></button>
                          </span>
                        </div><!-- /input-group -->
                    </form>
                </li>
                <li class="journey-action journey-search-action pull-right">
                	<a href="#journey-nav-expanded">
                    	<img src="<?php echo APP_IMG_URL; ?>search.png" alt="Search" />
                    </a>
                </li>
                <li class="journey-action pull-right">
                	<a href="#">
                    	<img src="<?php echo APP_IMG_URL; ?>cart.png" alt="Cart" />
                    </a>
                </li>
                <li class="journey-action pull-right has-button hidden-xs">
                	<a href="#" class="btn btn-primary">
                    	Login
                    </a>
                </li>
                <li class="journey-action pull-right has-button hidden-xs">
                	<a href="#" class="btn btn-success">
                    	Join
                    </a>
                </li>
            </ul><!-- end journey-bar -->
            <ul class="journey-top-bar">
              	<li class="journey-tab-text">
                 	<?php if( SITE_NAME == the_page_title() ) echo 'Home'; else get_page_title(); ?>
              	</li>
            </ul><!-- end journey-top-bar -->
        </header>
        
        <div class="journey-content-container">