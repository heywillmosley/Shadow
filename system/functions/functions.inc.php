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
 * System Functions
 */
 
// --------------------------------------------------------------------------------


/**
 * Load necessary shadow head content
 * @since 0.1.1 s9
 */
	function shdw_header()
	{ ?>
		<!-- Load Stylesheets -->
        <link rel="stylesheet" href="<?php echo BASE_STYLE_URL; ?>all.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php echo APP_STYLE_URL; ?>all.css" type="text/css" media="screen" />
        <style>
			@media print{
				.hide-for-print
				{
					display:none !important;
				}
				
				.show-for-print
				{
					display:block !important;
				}
				
				.print-page-break
				{
					 page-break-before: always !important;
				}
				
				/* 1. ROOT 					============================== */

				* { 
				background : transparent !important; 
				color : black !important; 
				box-shadow : none !important; 
				text-shadow : none !important; 
				filter : none !important; 
				-ms-filter : none !important;
				font-family:Arial, Helvetica, sans-serif !important; }
				
				.page { 
				margin : 0.5cm; }
				
				/* 2. TYPOGRAPHY 			============================== */
				
				h2, h3 { 
				orphans : 3; 
				widows : 3; 
				page-break-after : avoid; }
				
				p { 
				orphans : 3; 
				widows : 3; }
				
				pre, blockquote { 
				border : 1px solid @gray; 
				page-break-inside : avoid; }
				
				abbr[title]:after { 
				content: " (" attr(title) ")"; }
				
				/* 3. COLOUR 				============================== */
				
				a, a:visited { 
				text-decoration : underline;
				color: blue !important; }
				
				a[href]:after { 
				content : " (" attr(href) ")"; }
				
				a[href^="javascript:"]:after, 
				a[href^="#"]:after { 
				content : ""; }
				
				/* 4. TEXTURE 				============================== */
				
				img { 
				max-width : 100% !important;
				page-break-inside : avoid; }
				
				thead { 
				display : table-header-group; } 
				
				tr { 
				page-break-inside : avoid; }
				

			
			/* Don't display navigation elements */
			nav, aside{
				display: none;	
			}
			
			/* Get rid of unneeded margins and padding */
			body, article{
				width: 100%;
				margin: 0;
				padding: 0;	
			}
			
			/* Add 2cm margin */
			@page{
				margin: 2cm;	
			}
			
			/* Make sure heading don't start at bottom of page */
			h2, h3, .step{
				page-break-after: avoid;
			}
			
			/* Make sure images don't overflow page */
			img{
				max-width: 100%;	
			}
			
			/* Begin articles on a seperate new page */
			article, .reference, .diagrams, .resources {
			   page-break-before: always !important;
			}
			
			/* Prevent unordered lists and images from being split across multiple pages */
			ul, img {
			   page-break-inside: avoid;
			}
			
			/* Make links bold */
			article a {
			  
			  text-decoration: none;
		   }
			
			/* Expand external link urls */
		   article a[href^=http]:after {
			  content:" <" attr(href) "> ";
		   }
		   
		   /* Don't show anchor links around images */
		   article a[href^="#"]:after {
			   content: "";
			}
			
			
			/* APA Formating */
			.apa,.apa ul,.apa ol,.apa dl,.ref-apa,.ref-apa ul,.ref-apa ol,.ref-apa dl,.apa-ref,.apa-ref ul,.apa-ref ol,.apa-ref dl,.refapa,.refapa ul,.refapa ol,.refapa dl,.aparef,.aparef ul,.aparef ol,.aparef dl{padding-left:0;margin-left:0;}
			  .apa li,.ref-apa li,.refapa li,.apa-ref li,.aparef li{list-style-type:none;}
			  .apa p,.apa li,.apa dd,.ref-apa p,.ref-apa li,.ref-apa dd,.refapa p,.refapa li,.refapa dd,.apa-ref p,.apa-ref li,.apa-ref dd,.aparef p,.aparef li,.aparef dd{margin-left:2em;text-indent:-2em;margin-top:1em;margin-bottom:1em;}

			
		}
		</style>
        
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oxygen" type="text/css" media="screen" />
         <?php if( USE_GOOGLE_FONTS ) : ?>
            <!-- Load Google Fonts -->
            <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=<?php echo GOOGLE_FONTS; ?>" type="text/css" media="screen" />
      	<?php endif; ?> 
        
         <?php // Load Scripts; ?>
		<script src="<?php echo SYS_JS_URL; ?>vendor/custom.modernizr.js"></script>
        
        
	<?php
		return true;
		
	} // end shdw_header


/**
 * Loads all necessary Javascript files before close body tag
 * @since 0.1.9
 */
	function shdw_footer()
	{ ?>
        <script src="<?php echo SYS_JS_URL; ?>vendor/jquery.min.js"></script>
        <script src="<?php echo SYS_JS_URL; ?>vendor/bootstrap.min.js"></script>
		<script src="<?php echo SYS_JS_URL; ?>vendor/foundation.min.js"></script>
		<script src="<?php echo SYS_JS_URL; ?>shadow.js"></script>
		<script>
			$(document).foundation('interchange', {
			  named_queries : {
				smaller : 'only screen and (min-width: 660px)'
			  }
			});
		</script>
        <!-- Smooth Div Scroll 1.3 minified-->
		<script src="<?php echo SYS_JS_URL; ?>vendor/jquery.smoothdivscroll-1.3-min.js" type="text/javascript"></script>
	
	
		<!-- Plugin initialization -->
		<script type="text/javascript">
			// Initialize the plugin with no custom options
			$(document).ready(function () {
				// None of the options are set
				$("div#makeMeScrollable").smoothDivScroll({
					autoScrollingMode: ""
				});
			});
			
			$("#makeMeScrollable").SmoothDivScroll({
				touchScrolling: true
			});
		</script>
	
		<script>
          $(document).foundation();
        </script>
	<?php
		return true;
		
	} // end shdw_footer
	
	
/**
 * Load title meta
 * @since 0.1.1 s9
 */
	function the_page_title()
	{ 
		global $DBH;
		 $c = new Page( $DBH ); if( $c->pageTitle() == SITE_NAME )
				echo SITE_NAME;
			else
				echo $c->pageTitle() . ' | '.SITE_NAME; 
				
			 return true;
		
	} // end shdw_header
	
	
/**
 * Load pilot interface
 * @since 0.1.1 s9
 */
	function pilot()
	{ 
		global $DBH; ?>
		
        <div id="pilot-wrapper">
            <div class="off-canvas relative">
                
        <?php if( is_admin() ) : ?>
            <nav id="complementary" class="global-pilot-nav">
                <div id="shdw" class="pilot-head">Shadow Pilot</div>
                    <ul class="pilot-nav phs man">
                        <li class="shdw-head-nav">
                            <a href="<?php echo SITE_URL.'logout'; ?>">Logout</a>
                        </li><!-- end shdw-head-nav -->
                        <li class="caption">Current page</li>
                        <li onclick="toggle_visibility('current-page-dropdown')" class="relative shdw-current">
                            <div class="left side w20">
                                <div class='sprite iconmonstr-note-10-icon-20'></div>
                            </div><!-- end left side w20 -->
                            <div class="ls20">
                                <div class="heading">
                                    <?php 
                                    $p = new Page( $DBH );
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
                        <li id="page-dropdown" <?php if( getPageId() == '0007' || '0008') echo "style='display:block;'"; else echo "style='display:none;'"; ?>>
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
            </nav><!-- end complementary -->  
	<?php endif; ?>
    <div id="main">
        <!--[if lt IE 9]>
            <div data-alert class="alert-box hide-for-print" style="color:#000; background-color:#fcf8e3;">
            <h3 class="mbt ">Did you know that your Internet Explorer is out of date?</h3>
            <p class="mbn mxw700">To get the best possible experience using our site we recommend that you upgrade to a modern web browser. To download a newer web browser click on the Upgrade button. <a href="http://www.browsehappy.com" class="success button">Upgrade</a></p>
        </div>
        <![endif]-->
        <?php if( is_admin() ) : ?>
            <div class="pilot-trigger hide">
                <a href="#" class="fs11">&larr; Close Pilot</a>
            </div><!-- end pilot trigger -->
            <a id="shdw" class="menu-trigger" onclick="toggle_visibility('complementary')">
                <div class="relative">
                    <div class="left side w25">
                        <div class='sprite iconmonstr-side-left-view-icon'></div>
                    </div><!-- end left side w40 -->
                </div><!-- end relative -->
            </a><!-- end menu-trigger -->
        <?php endif; ?>	
        
		<?php return true;
		
	} // end shdw_header



/* Presentational level of Page Class
 *******************************************************/

	/**
	 * Sets page from class Page:setPage()
	 *
	 * @since 1.1.1 b8
	 * @return void
	 */
		function page_title()
		{
			global $DBH;
			# Set new Page object
			$p = new Page( $DBH );
			
			# Call setPage() method
			echo $p->getPageTitle();
			 
		}
	
	/**
	 * Sets page from class Page:setPage()
	 *
	 * @since 1.1.1 b8
	 * @return void
	 */
		function get_page_title()
		{
			global $DBH;
			# Set new Page object
			$p = new Page( $DBH );
			
			# Call setPage() method
			echo $p->getPageTitle();
			
			
		}

	/**
	 * Sets page from class Page:setPage()
	 *
	 * @since 1.1.1 b8
	 * @return void
	 */
	function set_page()
	{
		global $DBH;
		# Set new Page object
		$p = new Page( $DBH );
		
		# Call setPage() method
		$p->setPage();
		 
		# Unset Object
		unset( $p );
	}
	
	
	/**
	 * Gets page from class Page:getPage()
	 *
	 * @since 1.1.1 b8
	 * @return void
	 */
	function get_page()
	{	
		global $DBH;
		# Set new Page object
		$p = new Page( $DBH );
		
		# Call setPage() method
		$p->getPage();
		 
		# Unset Object
		unset( $p );
	}
	
	
	
/* Presentational level of Database Class
 *******************************************************/



# Delete First Character in String
function deleteFirstChar( $string )
{
	return substr( $string, 1 );

}


# Framework Head @since 0.1.1 s5
function sys_header() 
{
	?>
    <div class="sw_wrapper pas">
		<header class="shadow-header">
			<div class="row">
				<div class="twelve columns">
					<h1>Shadow</h1>
				</div><!-- end twelve columns -->
			</div>
		</header><!-- end shadow-header -->
    
    <?php return true;
}

# Framework Foot @since 0.1.1 s5
function sys_footer() 
{
	?>
    </div><!-- end sw_wrapper pas -->
    
    <?php return true;
}

/**
 * @depreciated 0.1.1 s7 No longer used by internal code and not recommended. Support till 6/19/2014
 * * Use Maintenance Class Maintenance->maintenance_mode() instead
 */
function maintenance_mode()
{
	if( MAINTENANCE == 1 ) : ?>
	
    	<div data-alert class="alert-box warning mbn" style="background-color: #d9edf7 !important; color: #3a87ad !important">
        	<?php echo MAINT_MSG; ?>
        </div><!-- end data-alert -->
		
	<?php endif;
	
	if( MAINTENANCE == 2 ) : ?>
	
    	<div data-alert class="alert-box warning mbn" style="background-color: #f2dede !important; color: #b94a48 !important">
        	<?php echo MAINT_ACTIVE_MSG; ?>
        </div><!-- end data-alert -->
		
	<?php endif;
	
	return true;
	
} // end maintenance_mode()


/**
 * @depreciated 0.1.1 s7 No longer used by internal code and not recommended. Support till 6/19/2014
 * Use Maintenance Class Environment->environment_notice() instead
 */
function environment_notice()
{
	if( ENVIRONMENT != 'production' )
	{
		?>	
		
		<div data-alert class="environment-notice alert-box warning">
		  <?php if( ENVIRONMENT == 'development' ) : ?>
                <div class="relative">
                    <div class="left side w50 env">
                        <h1 class="title">DEV</h1>
                        <div class="ver">v<?php echo APP_VER; ?></div>
                    </div><!-- end left side w50 -->
                    <div class="ls50 content">
                        <?php echo DEVELOPMENT_NOTICE; ?>
                    </div><!-- end ls50 -->
                </div><!-- end relative -->
		  <?php endif; ?>
          <?php if( ENVIRONMENT == 'stage' ) : ?>
			  <div class="relative">
                    <div class="left side w50 env">
                        <h1 class="title">STG</h1>
                        <div class="ver">v<?php echo APP_VER; ?></div>
                    </div><!-- end left side w50 -->
                    <div class="ls50 content">
                        <?php echo STAGE_NOTICE; ?>
                    </div><!-- end ls50 -->
                </div><!-- end relative -->
		  <?php endif; ?>
          <?php if( ENVIRONMENT == 'qa' ) : ?>
			  <div class="relative">
                    <div class="left side w50 env">
                        <h1 class="title">QA</h1>
                        <div class="ver">v<?php echo APP_VER; ?></div>
                    </div><!-- end left side w50 -->
                    <div class="ls50 content">
                        <?php echo QA_NOTICE; ?>
                    </div><!-- end ls50 -->
                </div><!-- end relative -->
		  <?php endif; ?>
		  
		</div>
		
		<?php
	}
	
	return true;

}

# Keep Copyright up to date
function auto_copyright($year = 'auto'){
   if(intval($year) == 'auto'){ $year = date('Y'); }
   if(intval($year) == date('Y')){ echo intval($year); } 
   if(intval($year) < date('Y')){ echo intval($year) . ' - ' . date('Y'); }
   if(intval($year) > date('Y')){ echo date('Y'); }
}


# App Header @since 0.1.1 s5
function app_header()
{
	global $DBH, $page, $page_title;
	
	include_once( APP_INCLUDE_URI.'header.inc.php');

	
} // end app_header

# App Footer @since 0.1.1 s5
function app_footer()
{
	global $DBH, $page;
	
	include_once( APP_INCLUDE_URI.'footer.inc.php');
	
} // end app_header


/* Secure Session Start @since 0.1.1 s5
 *
 * This function makes your login script a whole lot more secure.
 * It stops hackers been able to access the session id cookie through
 * javascript (For example in an XSS attack).
 * Also by using the "session_regenerate_id()" function, which regenerates
 * the session id on every page reload, helping prevent session hijacking.
 * Note: If you are using https in your login application set the "$secure" 
 * variable to true.
 */
function sec_session_start()
{
	# Set a custom session name
	$session_name = 'sec_session_id';
	
	# Set to true if using https
	$secure = FALSE;
	
	# This stops javascript being able to access the session id
	$httponly = TRUE;
	
	# Forces sessions to only use cookies
	ini_set('session.use_only_cookies', 1);
	
	# Get current cookies params
	$cookieParams = session_get_cookie_params();
	
	session_set_cookie_params($cookieParams["lifetime"], $cookieParams["path"], $cookieParams["domain"], $secure, $httponly);
	
	# Sets the session name to one set above
	session_name($session_name);
	
	# Start the php session
	session_start();
	
	# Regenerated the session, delete the old one.
	session_regenerate_id(TRUE);
	
	#
	
} // end Secure Session Start



/* Brute Force @since 0.1.1 s5
 *
 * Brute force attacks are when a hacker will try 1000s
 * of different passwords on an account, either randomly 
 * generated passwords or from a dictionary. In our script 
 * if a user account has a failed login more than 5 times 
 * their account is locked.
 */
function checkbrute($user_id, $db)
{
	# Get timestamp of current time
	$now = time();
	
	# All login attempts are counted from the past 2 hours
	$valid_attempts = $now - (2 * 60 * 60);
	
	if ($stmt = $db->prepare("SELECT time FROM login_attempts WHERE user_id = ? AND time > '$valid_attempts'") )
	{
		$stmt->bind_param('i', $user_id);
		
		# Execute the prepared query
		$stmt->execute();
		
		$stmt->store_result();
		
		# If there has been more than 5 failed logins
		if ($stmt->num_rows > 5 )
		{
			return true;
			
		} // end if $r->num...
		
		# If there are less than 5 failed attempts, false
		else
		{
			return false;
			
		} // end else
		
	} // end if $r = $mys...
	
} // end checkbrute

# Check if all session varibles are set
function login_check( $db )
{
	# Check if required Session Varibles are set
	if (isset($_SESSION['user_id'], $_SESSION['username'], $_SESSION['login_string']) )
	{
		$user_id = $_SESSION['user_id'];
		$login_string = $_SESSION['login_string'];
		$username = $_SESSION['username'];
		
		# Get the user agent string of the user
		$user_browser = $_SERVER['HTTP_USER_AGENT'];
		
		
		if ($q = $db->prepare("SELECT pass FROM users WHERE id = ? LIMITE 1") )
		{
			
			# Bind "user_id" to parameter.
			$q->bind_param('i', $user_id);
			echo "hello there";
			
			# Execute the prepared query
			$q->execute();
			
			# Store Result
			$q->store_result();
			
			$true = "prepare good";
			return true;
			
		} else { $false = "prepare no good"; return $false; }
		
		$true = "Varibles good";
		return $true;
	} // end if isset($...	
	else
	{
		// Not logged in
		return false;
		
	} // else
	
} // end login_check

