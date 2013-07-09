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
        <title><?php
		if( get_page_title() == '' || get_page_title == 'home' )
			echo SITE_NAME;
		else
		 	echo get_page_title(). ' | ' . SITE_NAME; ?>
        </title>
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

<?php if( is_logged_in() ) : ?>
	<style>
		#main{
			padding-left: 180px !important
		}
	
	</style>
	<div id="shdw pilot-wrapper">
          	<div class="off-canvas relative">
            	<div id="shdw">
                    <nav id="complementary" role="complementary" class="side-complementary">
                    	<div id="shdw" class="pilot-head">Shadow Pilot</div>
                            <ul class="pilot-nav phs man">
                            	<li class="shdw-head-nav">
                                	<a href="<?php echo SITE_URL.'logout'; ?>">Logout</a>
                                </li><!-- end shdw-head-nav -->
                                <li class="caption">Current page</li>
                                <li onclick="toggle_visibility('current-page-dropdown')" class="relative shdw-current">
                                	<div class="left side w20">
                                    	<img src="<?php echo SYS_IMG_URL.'iconmonstr-note-10-icon.png'; ?>" alt="Current page" />
                                    </div><!-- end left side w20 -->
                                    <div class="ls20">
                                    	<div class="heading">
											<?php 
											$p = new Page;
											if( $p->getPageTitle() == SITE_NAME ) echo 'Home'; else get_page_title(); unset( $p ); ?></div>
                                            <ul id="current-page-dropdown">
                                                <li><a href="#">Edit this page</a></li>
                                            </ul>
                                    </div><!-- end ls20 -->
                              	</li>
                                <li>
                                	<ul class="shdw-admin pbs">
                                    	<li class="caption">Main</li>
                                    	<li class="relative shdw-logo">
                                            <a href="<?php echo SYS_PILOT_URL; ?>">
                                                <div class="left side w20">
                                                    <img src="<?php echo SYS_IMG_URL.'iconmonstr-briefcase-7-icon.png'; ?>" alt="<?php echo SITE_NAME; ?>" />
                                                </div><!-- end right side w30 -->
                                                <div class="ls20 pl2">
                                                    <div class="ellipsis heading"><?php echo SITE_NAME; ?></div>
                                                </div><!-- end rs30 -->
                                            </a>
                                        </li>
                                        <li class="relative shdw-gotopilot">
                                            <a href="<?php echo SYS_PILOT_URL; ?>">
                                                <div class="left side w15">
                                                    <img src="<?php echo SYS_IMG_URL.'iconmonstr-briefcase-4-icon.png'; ?>" alt="<?php echo SITE_NAME; ?>" />
                                                </div><!-- end right side w30 -->
                                                <div class="ls15 pl2">
                                                    <div class="ellipsis">Go to Pilot</div>
                                                </div><!-- end rs30 -->
                                            </a>
                                        </li>
                                        <li class="relative shdw-gotowebsite">
                                            <a href="<?php echo SITE_URL; ?>">
                                                <div class="left side w15">
                                                    <img src="<?php echo SYS_IMG_URL.'iconmonstr-home-2-icon.png'; ?>" alt="<?php echo SITE_NAME; ?>" />
                                                </div><!-- end right side w30 -->
                                                <div class="ls15 pl2">
                                                    <div class="ellipsis">Go to website</div>
                                                </div><!-- end rs30 -->
                                            </a>
                                        </li>
                                        <li class="relative shdw-current-user">
                                            <a href="<?php echo SYS_PILOT_URL.'users/me'; ?>">
                                                <div class="left side w15">
                                                    <img src="<?php echo SYS_IMG_URL.'iconmonstr-user-2-icon.png'; ?>" alt="User" />
                                                </div><!-- end right side w30 -->
                                                <div class="ls15 pl2">
                                                    <div class="ellipsis">William Clyde Mosley, III</div>
                                                </div><!-- end rs30 -->
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="caption">System</li>
                                <li onclick="toggle_visibility('product-dropdown')" class="relative">
                                    <a href="<?php echo SYS_PILOT_URL.'products'; ?>">
                                        <div class="left side w20">
                                            <img src="<?php echo SYS_IMG_URL.'iconmonstr-shopping-bag-8-icon.png'; ?>" alt="Current page" />
                                        </div><!-- end left side w20 -->
                                        <div class="ls20">
                                            <div class="heading">Products</div>
                                        </div><!-- end ls20 -->
                                    </a>
                                </li>
                                <li onclick="toggle_visibility('inventory-dropdown')" class="relative disable">
                                    <a href="<?php echo SYS_PILOT_URL.'inventory'; ?>">
                                        <div class="left side w20">
                                            <img src="<?php echo SYS_IMG_URL.'iconmonstr-shipping-box-2-icon.png'; ?>" alt="Current page" />
                                        </div><!-- end left side w20 -->
                                        <div class="ls20">
                                            <div class="heading">Inventory</div>
                                        </div><!-- end ls20 -->
                                    </a>
                                </li>
                                <li onclick="toggle_visibility('inventory-dropdown')" class="relative disable">
                                    <a href="<?php echo SYS_PILOT_URL.'shipping'; ?>">
                                        <div class="left side w20">
                                            <img src="<?php echo SYS_IMG_URL.'iconmonstr-shipping-box-12-icon.png'; ?>" alt="Current page" />
                                        </div><!-- end left side w20 -->
                                        <div class="ls20">
                                            <div class="heading">Shipping</div>
                                        </div><!-- end ls20 -->
                                    </a>
                                </li>
                                <li onclick="toggle_visibility('backup-dropdown')" class="relative disable">
                                    <a href="<?php echo SYS_PILOT_URL.'payment'; ?>">
                                        <div class="left side w20">
                                            <img src="<?php echo SYS_IMG_URL.'iconmonstr-credit-card-14-icon.png'; ?>" alt="Current page" />
                                        </div><!-- end left side w20 -->
                                        <div class="ls20">
                                            <div class="heading">Payment</div>
                                        </div><!-- end ls20 -->
                                    </a>
                                </li>
                                <li onclick="toggle_visibility('page-dropdown')" class="relative ">
                                    <a href="<?php echo SYS_PILOT_URL.'pages'; ?>">
                                        <div class="left side w20">
                                            <img src="<?php echo SYS_IMG_URL.'iconmonstr-document-file-2-icon.png'; ?>" alt="Current page" />
                                        </div><!-- end left side w20 -->
                                        <div class="ls20">
                                            <div class="heading">Pages</div>
                                        </div><!-- end ls20 -->
                                    </a>
                                </li>
                                <li id="page-dropdown" class="hide">
                                    <ul>
                                        <li><a href="#">Create new page</a></li>
                                        <li><a href="#">View all pages</a></li>
                                    </ul>
                                </li>
								<li onclick="toggle_visibility('post-dropdown')" class="relative ">
                                    
                                        <div class="left side w20">
                                            <img src="<?php echo SYS_IMG_URL.'iconmonstr-note-4-icon.png'; ?>" alt="Current page" />
                                        </div><!-- end left side w20 -->
                                        <div class="ls20">
                                            <div class="heading">Posts</div>
                                        </div><!-- end ls20 -->
                                    
                                </li>
                                <li id="post-dropdown" class="hide">
                                    <ul>
                                        <li><a href="#">Create new post</a></li>
                                        <li><a href="#">View all posts</a></li>
                                    </ul>
                                </li>
                                <li onclick="toggle_visibility('app-dropdown')" class="relative disable">
                                    <a href="<?php echo SYS_PILOT_URL.'apps'; ?>">
                                        <div class="left side w20">
                                            <img src="<?php echo SYS_IMG_URL.'iconmonstr-3d-view-icon.png'; ?>" alt="Current page" />
                                        </div><!-- end left side w20 -->
                                        <div class="ls20">
                                            <div class="heading">Apps</div>
                                        </div><!-- end ls20 -->
                                    </a>
                                </li>
                                <li onclick="toggle_visibility('media-dropdown')" class="relative disable">
                                    <a href="<?php echo SYS_PILOT_URL.'media'; ?>">
                                        <div class="left side w20">
                                            <img src="<?php echo SYS_IMG_URL.'iconmonstr-picture-box-icon.png'; ?>" alt="Current page" />
                                        </div><!-- end left side w20 -->
                                        <div class="ls20">
                                            <div class="heading">Media</div>
                                        </div><!-- end ls20 -->
                                    </a>
                                </li>
                                <li onclick="toggle_visibility('department-dropdown')" class="relative disable">
                                    <a href="<?php echo SYS_PILOT_URL.'departments'; ?>">
                                        <div class="left side w20">
                                            <img src="<?php echo SYS_IMG_URL.'iconmonstr-square-icon.png'; ?>" alt="Current page" />
                                        </div><!-- end left side w20 -->
                                        <div class="ls20">
                                            <div class="heading">Departments</div>
                                        </div><!-- end ls20 -->
                                    </a>
                                </li>
                                <li onclick="toggle_visibility('categories-dropdown')" class="relative">
                                    <a href="<?php echo SYS_PILOT_URL.'categories'; ?>">
                                        <div class="left side w20">
                                            <img src="<?php echo SYS_IMG_URL.'iconmonstr-triangle-icon.png'; ?>" alt="Current page" />
                                        </div><!-- end left side w20 -->
                                        <div class="ls20">
                                            <div class="heading">Categories</div>
                                        </div><!-- end ls20 -->
                                    </a>
                                </li>
                                <li onclick="toggle_visibility('tags-dropdown')" class="relative">
                                    <a href="<?php echo SYS_PILOT_URL.'tags'; ?>">
                                        <div class="left side w20">
                                            <img src="<?php echo SYS_IMG_URL.'iconmonstr-tag-2-icon.png'; ?>" alt="Current page" />
                                        </div><!-- end left side w20 -->
                                        <div class="ls20">
                                            <div class="heading">Tags</div>
                                        </div><!-- end ls20 -->
                                    </a>
                                </li>
                                <li onclick="toggle_visibility('users-dropdown')" class="relative">
                                    <a href="<?php echo SYS_PILOT_URL.'users'; ?>">
                                        <div class="left side w20">
                                            <img src="<?php echo SYS_IMG_URL.'iconmonstr-user-13-icon.png'; ?>" alt="Current page" />
                                        </div><!-- end left side w20 -->
                                        <div class="ls20">
                                            <div class="heading">Users</div>
                                        </div><!-- end ls20 -->
                                    </a>
                                </li>
                                <li onclick="toggle_visibility('reviews-dropdown')" class="relative disable">
                                    <a href="<?php echo SYS_PILOT_URL.'ratings-reviews'; ?>">
                                        <div class="left side w20">
                                            <img src="<?php echo SYS_IMG_URL.'iconmonstr-thumb-7-icon.png'; ?>" alt="Current page" />
                                        </div><!-- end left side w20 -->
                                        <div class="ls20">
                                            <div class="heading">Ratings & Reviews</div>
                                        </div><!-- end ls20 -->
                                    </a>
                                </li>
                                <li onclick="toggle_visibility('comments-dropdown')" class="relative">
                                    <a href="<?php echo SYS_PILOT_URL.'comments'; ?>">
                                        <div class="left side w20">
                                            <img src="<?php echo SYS_IMG_URL.'iconmonstr-speech-bubble-15-icon.png'; ?>" alt="Current page" />
                                        </div><!-- end left side w20 -->
                                        <div class="ls20">
                                            <div class="heading">Comments</div>
                                        </div><!-- end ls20 -->
                                    </a>
                                </li>
                                <li onclick="toggle_visibility('comments-dropdown')" class="relative">
                                    <a href="<?php echo SYS_PILOT_URL.'bridges'; ?>">
                                        <div class="left side w20">
                                            <img src="<?php echo SYS_IMG_URL.'iconmonstr-connection-5-icon.png'; ?>" alt="Current page" />
                                        </div><!-- end left side w20 -->
                                        <div class="ls20">
                                            <div class="heading">Bridges</div>
                                        </div><!-- end ls20 -->
                                    </a>
                                </li>
                                <li onclick="toggle_visibility('comments-dropdown')" class="relative disable">
                                    <a href="<?php echo SYS_PILOT_URL.'files'; ?>">
                                        <div class="left side w20">
                                            <img src="<?php echo SYS_IMG_URL.'iconmonstr-multi-files-4-icon.png'; ?>" alt="Current page" />
                                        </div><!-- end left side w20 -->
                                        <div class="ls20">
                                            <div class="heading">Files</div>
                                        </div><!-- end ls20 -->
                                    </a>
                                </li>
                                <li onclick="toggle_visibility('comments-dropdown')" class="relative disable">
                                    <a href="<?php echo SYS_PILOT_URL.'tasks'; ?>">
                                        <div class="left side w20">
                                            <img src="<?php echo SYS_IMG_URL.'iconmonstr-clipboard-4-icon.png'; ?>" alt="Current page" />
                                        </div><!-- end left side w20 -->
                                        <div class="ls20">
                                            <div class="heading">Tasks</div>
                                        </div><!-- end ls20 -->
                                    </a>
                                </li>
                                <li onclick="toggle_visibility('version-control-dropdown')" class="relative disable">
                                    <a href="<?php echo SYS_PILOT_URL.'version-control'; ?>">
                                        <div class="left side w20">
                                            <img src="<?php echo SYS_IMG_URL.'iconmonstr-clipboard-5-icon.png'; ?>" alt="Current page" />
                                        </div><!-- end left side w20 -->
                                        <div class="ls20">
                                            <div class="heading">Version Control</div>
                                        </div><!-- end ls20 -->
                                    </a>
                                </li>
                                <li onclick="toggle_visibility('version-control-dropdown')" class="relative disable">
                                    <a href="<?php echo SYS_PILOT_URL.'security'; ?>">
                                        <div class="left side w20">
                                            <img src="<?php echo SYS_IMG_URL.'iconmonstr-shield-20-icon.png'; ?>" alt="Current page" />
                                        </div><!-- end left side w20 -->
                                        <div class="ls20">
                                            <div class="heading">Security</div>
                                        </div><!-- end ls20 -->
                                    </a>
                                </li>
                                <li onclick="toggle_visibility('backup-dropdown')" class="relative disable">
                                    <a href="<?php echo SYS_PILOT_URL.'backup-restore'; ?>">
                                        <div class="left side w20">
                                            <img src="<?php echo SYS_IMG_URL.'iconmonstr-firewall-3-icon.png'; ?>" alt="Current page" />
                                        </div><!-- end left side w20 -->
                                        <div class="ls20">
                                            <div class="heading">Backup & Restore</div>
                                        </div><!-- end ls20 -->
                                    </a>
                                </li>
                                <li onclick="toggle_visibility('settings-dropdown')" class="relative disable">
                                    <a href="<?php echo SYS_PILOT_URL.'settings'; ?>">
                                        <div class="left side w20">
                                            <img src="<?php echo SYS_IMG_URL.'iconmonstr-gear-2-icon.png'; ?>" alt="Current page" />
                                        </div><!-- end left side w20 -->
                                        <div class="ls20">
                                            <div class="heading">Settings</div>
                                        </div><!-- end ls20 -->
                                    </a>
                                </li>
                                <li onclick="toggle_visibility('settings-dropdown')" class="relative disable">
                                    <a href="<?php echo SYS_PILOT_URL.'manual'; ?>">
                                        <div class="left side w20">
                                            <img src="<?php echo SYS_IMG_URL.'iconmonstr-book-20-icon.png'; ?>" alt="Current page" />
                                        </div><!-- end left side w20 -->
                                        <div class="ls20">
                                            <div class="heading">User Manual</div>
                                        </div><!-- end ls20 -->
                                    </a>
                                </li>
                                <li onclick="toggle_visibility('settings-dropdown')" class="relative disable">
                                    <a href="<?php echo SYS_PILOT_URL.'help'; ?>">
                                        <div class="left side w20">
                                            <img src="<?php echo SYS_IMG_URL.'iconmonstr-help-8-icon.png'; ?>" alt="Current page" />
                                        </div><!-- end left side w20 -->
                                        <div class="ls20">
                                            <div class="heading">Help</div>
                                        </div><!-- end ls20 -->
                                    </a>
                                </li>
                            </ul>
                    </nav><!-- end complementary -->
              	</div><!-- end shdw -->
            </div><!-- end shdw -->
     	</div><!-- end pilot-wrapper -->
<?php endif; ?>
		<div role="main" id="main">
        	<?php if( is_logged_in() ) : ?>
                <div class="pilot-trigger hide">
                    <a href="#" class="fs11">&larr; Close Pilot</a>
                </div><!-- end pilot trigger -->
                <a id="shdw" class="menu-trigger" onclick="toggle_visibility('complementary')">
                    <div class="relative">
                        <div class="left side w25">
                            <img src="<?php echo SYS_IMG_URL.'iconmonstr-side-left-view-icon.png'; ?>" alt="User" />
                        </div><!-- end left side w40 -->
                    </div><!-- end relative -->
                </a><!-- end menu-trigger -->
      		<?php endif; ?>
