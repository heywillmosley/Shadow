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
 * Class
 */
 
// --------------------------------------------------------------------------------

/**
 * Class description
 * @since 0.1.1 s7
 * @author William Mosley, III <will@livesuperamazing.com>
 * 0 Arguments
 * 0 Methods
 */
class Environment
{
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

 
} // end ClassName