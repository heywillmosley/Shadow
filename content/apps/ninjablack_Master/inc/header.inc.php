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
<?php $e = new Environment; $e->environment_notice(); unset( $e ); ?>
<?php if( !is_logged_in() ) : ?>
	<?php login_form(); ?>
<?php elseif( is_admin() ) : ?>
    <div class="pilot-wrapper">
        <div class="pilot">
        	<div class="pilot-header">
            	<span class="pilot-title">Pilot Admin</span>
            	<div class="btn-group btn-group-xs">
                	<div class="btn-group btn-group-xs">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                           <?php get_page_title(); ?>
                          <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                          <li onclick="toggle_visibility('current-page-dropdown')" class="relative shdw-current">
                            <div class="left side w20">
                                <div class='sprite iconmonstr-note-10-icon-20'></div>
                            </div><!-- end left side w20 -->
                            <div class="ls20">
                                <div class="heading">
                                   </div>
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
                                            <div class='sprite iconmonstr-briefcase-7-icon-20'></div>
                                        </div><!-- end right side w30 -->
                                        <div class="ls20 pl2">
                                            <div class="ellipsis heading"><?php echo SITE_NAME; ?></div>
                                        </div><!-- end rs30 -->
                                    </a>
                                </li>
                                <li class="relative shdw-gotopilot">
                                    <a href="<?php echo SYS_PILOT_URL; ?>">
                                        <div class="left side w15">
                                            <div class='sprite iconmonstr-briefcase-4-icon-16'></div>
                                        </div><!-- end right side w30 -->
                                        <div class="ls15 pl2">
                                            <div class="ellipsis">Go to Pilot</div>
                                        </div><!-- end rs30 -->
                                    </a>
                                </li>
                                <li class="relative shdw-gotowebsite">
                                    <a href="<?php echo SITE_URL; ?>">
                                        <div class="left side w15">
                                            <div class='sprite iconmonstr-home-2-icon-16'></div>
                                        </div><!-- end right side w30 -->
                                        <div class="ls15 pl2">
                                            <div class="ellipsis">Go to website</div>
                                        </div><!-- end rs30 -->
                                    </a>
                                </li>
                                <li class="relative shdw-current-user">
                                    <a href="<?php echo SYS_PILOT_URL.'users/me'; ?>">
                                        <div class="left side w15">
                                            <div class='sprite iconmonstr-user-2-icon-16'></div>
                                        </div><!-- end right side w30 -->
                                        <div class="ls15 pl2">
                                            <div class="ellipsis"><?php echo $_SESSION['firstName']. ' ' . $_SESSION['lastName']; ?></div>
                                        </div><!-- end rs30 -->
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="caption">System</li>
                        <li onclick="toggle_visibility('product-dropdown')" class="relative">
                            <a href="<?php echo SYS_PILOT_URL.'products'; ?>">
                                <div class="left side w20">
                                    <div class='sprite iconmonstr-shopping-bag-8-icon-20'></div>
                                </div><!-- end left side w20 -->
                                <div class="ls20">
                                    <div class="heading">Products</div>
                                </div><!-- end ls20 -->
                            </a>
                        </li>
                        <li onclick="toggle_visibility('inventory-dropdown')" class="relative disable">
                            <a href="<?php echo SYS_PILOT_URL.'inventory'; ?>">
                                <div class="left side w20">
                                    <div class='sprite iconmonstr-shipping-box-2-icon-20'></div>
                                </div><!-- end left side w20 -->
                                <div class="ls20">
                                    <div class="heading">Inventory</div>
                                </div><!-- end ls20 -->
                            </a>
                        </li>
                        <li onclick="toggle_visibility('inventory-dropdown')" class="relative disable">
                            <a href="<?php echo SYS_PILOT_URL.'shipping'; ?>">
                                <div class="left side w20">
                                    <div class='sprite iconmonstr-shipping-box-12-icon-20'></div>
                                </div><!-- end left side w20 -->
                                <div class="ls20">
                                    <div class="heading">Shipping</div>
                                </div><!-- end ls20 -->
                            </a>
                        </li>
                        <li onclick="toggle_visibility('backup-dropdown')" class="relative disable">
                            <a href="<?php echo SYS_PILOT_URL.'payment'; ?>">
                                <div class="left side w20">
                                    <div class='sprite iconmonstr-credit-card-14-icon-20'></div>
                                </div><!-- end left side w20 -->
                                <div class="ls20">
                                    <div class="heading">Payment</div>
                                </div><!-- end ls20 -->
                            </a>
                        </li>
                        <li onclick="toggle_visibility('page-dropdown')" class="relative ">
                            <a href="#">
                                <div class="left side w20">
                                    <div class='sprite iconmonstr-document-file-2-icon-20'></div>
                                </div><!-- end left side w20 -->
                                <div class="ls20">
                                    <div class="heading">Pages</div>
                                </div><!-- end ls20 -->
                            </a>
                        </li>
                        <li id="page-dropdown" <?php if( get_page_id() == '0007' || '0008') echo "style='display:block;'"; else echo "style='display:none;'"; ?>>
                            <ul>
                                <li><a href="<?php echo SITE_URL; ?>admin/pilot/pages/new-page">Create new page</a></li>
                                <li><a href="<?php echo SITE_URL; ?>admin/pilot/pages">View all pages</a></li>
                            </ul>
                        </li>
                        <li onclick="toggle_visibility('post-dropdown')" class="relative">
                            
                                <div class="left side w20">
                                    <div class='sprite iconmonstr-note-4-icon-20'></div>
                                </div><!-- end left side w20 -->
                                <div class="ls20">
                                    <div class="heading">Posts</div>
                                </div><!-- end ls20 -->
                            
                        </li>
                        <li id="post-dropdown">
                            <ul>
                                <li><a href="#">Create new post</a></li>
                                <li><a href="#">View all posts</a></li>
                            </ul>
                        </li>
                        <li onclick="toggle_visibility('app-dropdown')" class="relative disable">
                            <a href="<?php echo SYS_PILOT_URL.'apps'; ?>">
                                <div class="left side w20">
                                    <div class='sprite iconmonstr-3d-view-icon-20'></div>
                                </div><!-- end left side w20 -->
                                <div class="ls20">
                                    <div class="heading">Apps</div>
                                </div><!-- end ls20 -->
                            </a>
                        </li>
                        <li onclick="toggle_visibility('media-dropdown')" class="relative disable">
                            <a href="<?php echo SYS_PILOT_URL.'media'; ?>">
                                <div class="left side w20">
                                    <div class='sprite iconmonstr-picture-box-icon-20'></div>
                                </div><!-- end left side w20 -->
                                <div class="ls20">
                                    <div class="heading">Media</div>
                                </div><!-- end ls20 -->
                            </a>
                        </li>
                        <li onclick="toggle_visibility('department-dropdown')" class="relative disable">
                            <a href="<?php echo SYS_PILOT_URL.'departments'; ?>">
                                <div class="left side w20">
                                    <div class='sprite iconmonstr-square-icon-20'></div>
                                </div><!-- end left side w20 -->
                                <div class="ls20">
                                    <div class="heading">Departments</div>
                                </div><!-- end ls20 -->
                            </a>
                        </li>
                        <li onclick="toggle_visibility('categories-dropdown')" class="relative">
                            <a href="<?php echo SYS_PILOT_URL.'categories'; ?>">
                                <div class="left side w20">
                                    <div class='sprite iconmonstr-triangle-icon-20'></div>
                                </div><!-- end left side w20 -->
                                <div class="ls20">
                                    <div class="heading">Categories</div>
                                </div><!-- end ls20 -->
                            </a>
                        </li>
                        <li onclick="toggle_visibility('tags-dropdown')" class="relative">
                            <a href="<?php echo SYS_PILOT_URL.'tags'; ?>">
                                <div class="left side w20">
                                    <div class='sprite iconmonstr-triangle-icon-20'></div>
                                </div><!-- end left side w20 -->
                                <div class="ls20">
                                    <div class="heading">Tags</div>
                                </div><!-- end ls20 -->
                            </a>
                        </li>
                        <li onclick="toggle_visibility('users-dropdown')" class="relative">
                            <a href="<?php echo SYS_PILOT_URL.'users'; ?>">
                                <div class="left side w20">
                                    <div class='sprite iconmonstr-user-13-icon-20'></div>
                                </div><!-- end left side w20 -->
                                <div class="ls20">
                                    <div class="heading">Users</div>
                                </div><!-- end ls20 -->
                            </a>
                        </li>
                        <li onclick="toggle_visibility('reviews-dropdown')" class="relative disable">
                            <a href="<?php echo SYS_PILOT_URL.'ratings-reviews'; ?>">
                                <div class="left side w20">
                                    <div class='sprite iconmonstr-thumb-7-icon-20'></div>
                                </div><!-- end left side w20 -->
                                <div class="ls20">
                                    <div class="heading">Ratings & Reviews</div>
                                </div><!-- end ls20 -->
                            </a>
                        </li>
                        <li onclick="toggle_visibility('comments-dropdown')" class="relative">
                            <a href="<?php echo SYS_PILOT_URL.'comments'; ?>">
                                <div class="left side w20">
                                   <div class='sprite iconmonstr-speech-bubble-15-icon-20'></div>
                                </div><!-- end left side w20 -->
                                <div class="ls20">
                                    <div class="heading">Comments</div>
                                </div><!-- end ls20 -->
                            </a>
                        </li>
                        <li onclick="toggle_visibility('comments-dropdown')" class="relative">
                            <a href="<?php echo SYS_PILOT_URL.'bridges'; ?>">
                                <div class="left side w20">
                                    <div class='sprite iconmonstr-connection-5-icon-20'></div>
                                </div><!-- end left side w20 -->
                                <div class="ls20">
                                    <div class="heading">Bridges</div>
                                </div><!-- end ls20 -->
                            </a>
                        </li>
                        <li onclick="toggle_visibility('comments-dropdown')" class="relative disable">
                            <a href="<?php echo SYS_PILOT_URL.'files'; ?>">
                                <div class="left side w20">
                                    <div class='sprite iconmonstr-multi-files-4-icon-20'></div>
                                </div><!-- end left side w20 -->
                                <div class="ls20">
                                    <div class="heading">Files</div>
                                </div><!-- end ls20 -->
                            </a>
                        </li>
                        <li onclick="toggle_visibility('comments-dropdown')" class="relative disable">
                            <a href="<?php echo SYS_PILOT_URL.'tasks'; ?>">
                                <div class="left side w20">
                                    <div class='sprite iconmonstr-clipboard-4-icon-20'></div>
                                </div><!-- end left side w20 -->
                                <div class="ls20">
                                    <div class="heading">Tasks</div>
                                </div><!-- end ls20 -->
                            </a>
                        </li>
                        <li onclick="toggle_visibility('version-control-dropdown')" class="relative disable">
                            <a href="<?php echo SYS_PILOT_URL.'version-control'; ?>">
                                <div class="left side w20">
                                    <div class='sprite iconmonstr-clipboard-5-icon-20'></div>
                                </div><!-- end left side w20 -->
                                <div class="ls20">
                                    <div class="heading">Version Control</div>
                                </div><!-- end ls20 -->
                            </a>
                        </li>
                        <li onclick="toggle_visibility('version-control-dropdown')" class="relative disable">
                            <a href="<?php echo SYS_PILOT_URL.'security'; ?>">
                                <div class="left side w20">
                                    <div class='sprite iconmonstr-shield-20-icon-20'></div>
                                </div><!-- end left side w20 -->
                                <div class="ls20">
                                    <div class="heading">Security</div>
                                </div><!-- end ls20 -->
                            </a>
                        </li>
                        <li onclick="toggle_visibility('backup-dropdown')" class="relative disable">
                            <a href="<?php echo SYS_PILOT_URL.'backup-restore'; ?>">
                                <div class="left side w20">
                                    <div class='sprite iconmonstr-firewall-3-icon-20'></div>
                                </div><!-- end left side w20 -->
                                <div class="ls20">
                                    <div class="heading">Backup & Restore</div>
                                </div><!-- end ls20 -->
                            </a>
                        </li>
                        <li onclick="toggle_visibility('settings-dropdown')" class="relative disable">
                            <a href="<?php echo SYS_PILOT_URL.'settings'; ?>">
                                <div class="left side w20">
                                    <div class='sprite iconmonstr-gear-2-icon-20'></div>
                                </div><!-- end left side w20 -->
                                <div class="ls20">
                                    <div class="heading">Settings</div>
                                </div><!-- end ls20 -->
                            </a>
                        </li>
                        <li onclick="toggle_visibility('settings-dropdown')" class="relative disable">
                            <a href="<?php echo SYS_PILOT_URL.'manual'; ?>">
                                <div class="left side w20">
                                    <div class='sprite iconmonstr-book-20-icon-20'></div>
                                </div><!-- end left side w20 -->
                                <div class="ls20">
                                    <div class="heading">User Manual</div>
                                </div><!-- end ls20 -->
                            </a>
                        </li>
                        <li onclick="toggle_visibility('settings-dropdown')" class="relative disable">
                            <a href="<?php echo SYS_PILOT_URL.'help'; ?>">
                                <div class="left side w20">
                                    <div class='sprite iconmonstr-help-8-icon-20'></div>
                                </div><!-- end left side w20 -->
                                <div class="ls20">
                                    <div class="heading">Help</div>
                                </div><!-- end ls20 -->
                            </a>
                        </li>
                        </ul>
                	</div>
                  	<a href="<?php SITE_URL; ?>admin/logout"class="btn btn-default">Logout</a>
                </div>
            </div><!-- end pilot-header -->
            <div class="pilot-body">
            	<div class="pilot-current-page">
                	<?php get_page_title(); ?> ( Current Page )
                    <div class="clearfix"></div>
                	<div class="btn-group btn-group-sm">
                        <div class="btn-group btn-group-sm">
                            <ul class="dropdown-menu">
                              <li><a href="#">Dropdown link</a></li>
                              <li><a href="#">Dropdown link</a></li>
                            </ul>
                        </div>
                        <button type="button" class="btn btn-default">Edit Page</button>
                    </div>
                </div><!-- end pilot-current-page -->
            </div><!-- end pilot-body -->
            <div class="pilot-footer">
            
            </div><!-- end pilot-footer -->
        </div><!-- end pilot -->
   	</div><!-- end pilot-wrapper -->
<?php endif; ?>

<a class="drop-nav-trigger" onClick="toggle_visibility('drop-nav')"></a>
<nav class="actionbar">
	<a class="show-for-small logo" href="<?php echo SITE_URL; ?>"><?php echo SITE_NAME; ?></a>
    <ul id="drop-nav" class="drop-nav">
        <li class="logo hide-for-small"><a href="<?php echo SITE_URL; ?>"><?php echo SITE_NAME; ?></a></li>
        <li><a href="<?php echo SITE_URL; ?>shop/coffee">Coffee</a></li>
        <li><a href="<?php echo SITE_URL; ?>shop/goodies">Goodies</a></li>
        <li><a href="<?php echo SITE_URL; ?>shop/sales">Sales</a></li>
        <li><a href="<?php echo SITE_URL; ?>wishlist">Wish List</a></li>
        <li><a href="<?php echo SITE_URL; ?>cart">Cart</a></li>
    </ul>
</nav><!-- end action-bar -->