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
			# Set new Page object
			$p = new Page();
			
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
			# Set new Page object
			$p = new Page();
			
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
		# Set new Page object
		$p = new Page();
		
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
		# Set new Page object
		$p = new Page();
		
		# Call setPage() method
		$p->getPage();
		 
		# Unset Object
		unset( $p );
	}
	
	
	
/* Presentational level of Database Class
 *******************************************************/

/**
 * Gets page from class Page:getPage()
 *
 * @since 1.1.1 b8
 * @return void
 */
function db_exec( $query, $rowsAffected = FALSE )
{
	# Set new Page object
	$d = new Database();
	
	# Call setPage() method
	$d->exec( $query );
	
	return $r;
	
}







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
