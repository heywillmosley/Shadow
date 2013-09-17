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
 * Class
 */
 
// --------------------------------------------------------------------------------

/**
 * Class description
 * @since 0.1.1 s7
 * @author William Mosley, III <will@livesuperamazing.com>
 * 0 Arguments
 * 1 Methods
 */
class Environment
{
	/**
	 * This method displays a notice to let the developer know which version of Shadow they are on and what environment they're in
	 * @since 1.0.0
	 * @return string
	 */
		function environmentNotice()
		{
			if( ENVIRONMENT != 'production' )
			{
				?>	
				
				<div class="environment-notice alert alert-info mbn">
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
		
		} // end method environment_notice()
		
		
	/**
	 * This method displays a notice to let the developer know which version of Shadow they are on and what environment they're in
	 * @since 0.1.5
	 * @depreciated since 1.0.0. Use environmentNotice() instead.
	 * @return string
	 */
		function environment_notice()
		{
			return $this->environmentNotice();
		
		} // end method environment_notice()

 
} // end ClassName