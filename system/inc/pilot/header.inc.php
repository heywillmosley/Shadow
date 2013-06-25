<?php # Prevents direct script access
if(!defined('ROOT_URI')){require'../config.inc.php';header('Location:'.SITE_URL);exit;}
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
 * Pilot Header
 */
 
// --------------------------------------------------------------------------------?>

<div id="shdw">

    
<div id="pilot">
	<div class="plt-wrapper">
    	<nav class="actionbar">
        	<div class="menu-trigger show-for-small">
            	<div class="relative">
                	<div class="left side w25">
                    	<img src="<?php echo SYS_IMG_URL.'iconmonstr-side-left-view-icon.png'; ?>" alt="User" />
                    </div><!-- end left side w40 -->
                	<div class="ls25">
                    	<?php echo SITE_NAME; ?> | Pilot
                    </div><!-- end ls40 -->
				</div><!-- end relative -->
            </div><!-- end menu-trigger -->
        	<div class="company-logo">
				<div class="relative">
                	<div class="left side w25">
                    	<img src="<?php echo SYS_IMG_URL.'iconmonstr-user-2-icon.png'; ?>" alt="User" />
                    </div><!-- end left side w40 -->
                	<div class="ls25">
                    	<?php echo SITE_NAME; ?> | Pilot
                    </div><!-- end ls40 -->
				</div><!-- end relative -->
          	</div><!-- end company-logo -->
        </nav><!-- end actionbar -->
    	<div class="off-canvas relative">
        <section role="complementary" class="side-complementary">
            <section class="pam">
            	<ul class="side-nav">
                  <li class="disable"><h4><a href="#">Products</a></h4></li>
                  <li class="disable"><h4><a href="#">Inventory</a></h4></li>
                  <li><h4><a href="#">Pages</a></h4></li>
                  <li><h4><a href="#">Posts</a></h4></li>
                  <li class="active"><h4><a href="#">Apps</a></h4></li>
                  <li class="divider"></li>
                  <li class="disable"><a href="#">Media</h4></li>
                  <li class="disable"><a href="#">Departments</a></li>
                  <li><a href="#">Categories</a></li>
                  <li><a href="#">Tags</a></li>
                  <li><a href="#">Users</a></li>
                  <li><a href="#">Comments</a></li>
                  <li class="disable"><a href="#">Bridges</a></li>
                  <li class="disable"><a href="#">Files</a></li>
                  <li><a href="#">Settings</a></li>
                  <li class="disable"><a href="#">Documentation</a></li>
                  <li class="disable"><a href="#">Help</a></li>
                </ul>
            </section>
       	</section>
        <div role="main" id="main">