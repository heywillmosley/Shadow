<?php # Prevents direct script access
if(!defined('FRONT_URI')){require'config.inc.php';header('Location:'.SITE_URL);exit;}
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
 * @since          Version 1.1.5
 * -----------------------------------------------------------------
 *
 * System Functions
 */
 
// --------------------------------------------------------------------------------

# Delete First Character in String
function deleteFirstChar( $string )
{
	return substr( $string, 1 );

}

# Load Function @since 1.1.5
function load($page = 'login') {
	$url = ROOTURL;
	$url = rtrim( $url, '/\\');
	$url .= '/' . $page;	
	
	header("Location: $url");
	exit();
}

# Load Path Function @since 1.1.5
function load_URI($page = 'login') {
	$path = ROOTPATH;
	$path = rtrim( $url, '/\\');
	$path .= '/' . $page;	
	
	header("Location: $path");
	exit();
}


# Page 404 @since 1.1.5
function page404 ()
{
	# Check if there's a 404.php file in application directory
	if ( !file_exists( APP_PAGE_URI. '404.php' ) )
	{

		# Check if there's a 404.html file in application directory
		if ( !file_exists( APP_PAGE_URI. '404.html' ) )
		{
			# Include System 404
			include ( BASE_PAGE_URI.'404.php' );
			exit;
			
		} // end if
		
		else
		{
			# Load Application 404.php
			include ( APP_PAGE_URI.'404.html' );
			exit;
		
		} // end else
		
	} // end if
	else {
		
		# Load Application 404.php
		include ( APP_PAGE_URI.'404.php' );
		exit;
		
		
	} // end else
	
} // end page404


# Framework Head @since 1.1.5
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

# Framework Foot @since 1.1.5
function sys_footer() 
{
	?>
    </div><!-- end sw_wrapper pas -->
    
    <?php return true;
}


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
