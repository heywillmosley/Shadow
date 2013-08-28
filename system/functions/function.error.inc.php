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
 * @since          Version 0.1.1 s9
 * -----------------------------------------------------------------
 *
 * System Error Functions
 */
 
// --------------------------------------------------------------------------------



/**
 * This method creates a custom exception handler for smarter error messages
 *
 * @package        Shadow   
 * @author         Super Amazing
 * @since          Version 0.1.1 s9  
 * @return         void
 */
	function exceptionHandler( $exception )
	{ 
		# Set new Page object
		$c = new Error();
		
		# Call setPage() method
		return $c->exceptionHandler( $exception );
	}
		

/**
 * This method creates a custom error handler for smarter error messages
 *
 * @package        Shadow   
 * @author         Super Amazing
 * @since          Version 0.1.1 s9  
 * @return         void
 */		
	function errorHandler($errno, $errstr, $errfile, $errline)
	{
		# Set new Page object
		$c = new Error();
		
		# Call setPage() method
		return $c->errorHandler( $exception );
	
	}