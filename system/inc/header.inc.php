<?php # Prevents direct script access
if(!defined('ROOT_URI')){require'config.inc.php';header('Location:'.SITE_URL);exit;}
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
 * System Header
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
        <title><?php echo get_page_title(). ' | ' . SITE_NAME; ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/> <!--320-->
    	<meta name="keywords" content="natural medicine, natural health, homeopathic remedies, homeopathic medicines, homeopathy, no side effects, side effects, no side affects, no contraindications, natural drugs, natural meds, natural cures, natural remedies, safe medicine, nontoxic, non-toxic, not toxic, hypoallergenic, hypo-allergenic, non-allergic, no allergy, dr. king, king bio, bio king, safecare, smart medicine, safe-care, safe medicines, safe homeopathy"/> 
    	<meta name="author" content="<?php echo ADMIN_NAME; ?>">
    
        <!-- Favicons -->
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo APP_IMG_URL; ?>favicons/favicon-114.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo APP_IMG_URL; ?>favicons/favicon-72.png">
        <link rel="shortcut icon" href="<?php echo APP_IMG_URL; ?>favicons/favicon-16.png">
        <!--[if IE]><link rel="shortcut icon" href="<?php echo APP_IMG_URL; ?>favicons/favicon-16.icon"><![endif]-->
        <!-- or, set /favicon-16.ico for IE10 win -->
        
        <!-- Load Stylesheets -->
        <link rel="stylesheet" href="<?php echo BASE_STYLE_URL; ?>all.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php echo APP_STYLE_URL; ?>all.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oxygen" type="text/css" media="screen" />
         <?php if( USE_GOOGLE_FONTS ) : ?>
            <!-- Load Google Fonts -->
            <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=<?php echo GOOGLE_FONTS; ?>" type="text/css" media="screen" />
      	<?php endif; ?> 
        
        <?php // Load Scripts; ?>
		<script src="<?php echo SYS_JS_URI; ?>vendor/custom.modernizr.js"></script>
        <script src="<?php echo SYS_JS_URI; ?>vendor/response.js"></script>
    </head>	
    
	<script>
    // Toggle_Visibility JS
    function toggle_visibility(id) {
    var e = document.getElementById(id);
    if(e.style.display == 'block')
    e.style.display = 'none';
    else
    e.style.display = 'block';
    }
    </script>


	<div id="pilot-wrapper">
          	<div class="off-canvas relative">
            	<div id="shdw">
                    <nav id="complementary" role="complementary" class="side-complementary">
                    	<div id="shdw" class="pilot-head">Shadow Pilot</div>
                        <section class="pam">
                            <ul class="side-nav">
                            	<li class="logo"><?php echo SITE_NAME; ?></li>
                            	<li class="gotosite"><a href="<?php echo SITE_URL; ?>">Go to website</a></li>
                            	<li>
                                	<div class="company-logo">
                                        <div class="relative">
                                            <div class="left side w15">
                                                <img src="<?php echo SYS_IMG_URL.'iconmonstr-user-2-icon.png'; ?>" alt="User" />
                                            </div><!-- end left side w40 -->
                                            <div class="ls15 small">
                                                William Clyde Mosley, III
                                            </div><!-- end ls40 -->
                                        </div><!-- end relative -->
                                    </div><!-- end company-logo -->
                                </li>
                              <li class="disable"><h4><a href="#">Products</a></h4></li>
                              <li class="disable"><h4><a href="#">Inventory</a></h4></li>
                              <li onclick="toggle_visibility('page-dropdown')"><h4><a href="#">Pages</a></h4></li>
                              <li id="page-dropdown">
                                <ul>
                                    <li><a href="#">Create new page</a></li>
                                    <li><a href="#">View all pages</a></li>
                                </ul>
                              </li>
                              <li onclick="toggle_visibility('post-dropdown')"><h4><a href="#">Posts</a></h4></li>
                              <li id="post-dropdown">
                                <ul>
                                    <li><a href="#">Create new post</a></li>
                                    <li><a href="#">View all posts</a></li>
                                </ul>
                              </li>
                              <li class="active"><h4><a href="#">Apps</a></h4></li>
                              <li class="divider"></li>
                              <li class="disable"><a href="#">Media</a></h4></li>
                              <li class="disable"><a href="#">Departments</a></li>
                              <li><a href="#">Categories</a></li>
                              <li><a href="#">Tags</a></li>
                              <li><a href="#">Users</a></li>
                              <li><a href="#">Comments</a></li>
                              <li class="disable"><a href="#">Bridges</a></li>
                              <li class="disable"><a href="#">Files</a></li>
                              <li class="disable"><a href="#">Security</a></li>
                              <li><a href="#">Settings</a></li>
                              <li class="disable"><a href="#">Documentation</a></li>
                              <li class="disable"><a href="#">Help</a></li>
                            </ul>
                        </section>
                    </nav><!-- end complementary -->
              	</div><!-- end shdw -->
            </div><!-- end shdw -->
     	</div><!-- end pilot-wrapper -->
		<div role="main" id="main">
        	<a id="shdw" class="menu-trigger" onclick="toggle_visibility('complementary')">
                <div class="relative">
                    <div class="left side w25">
                        <img src="<?php echo SYS_IMG_URL.'iconmonstr-side-left-view-icon.png'; ?>" alt="User" />
                    </div><!-- end left side w40 -->
                </div><!-- end relative -->
            </a><!-- end menu-trigger -->
