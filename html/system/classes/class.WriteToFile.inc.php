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
 * 1 Arguments
 * 0 Methods
 */
class WriteToFile
{
	# For storing the file pointer
	private $_fp = NULL;
	
	# Constructor opens the file for writing:
	function __construct( $file )
	{
		# Check that the file exists and is a file:
		if( !file_exists( $file ) || !is_file( $file ) )
		{
			throw new Exception( 'The file does not exist.' );
			
		} // end if( !file_exists( $file ) || !is_file( $file ) )
		
		# Open the file
		if( !$this->_fp = @fopen( $file, FOPEN_WRITE_CREATE ) )
		{
			throw new Exception( 'Could not open the file.' );
			
			
		} // end if( !$this->_fp = @fopen( $file, FOPEN_READ_WRITE ) )
		
		
	} // end __construct( $file )
	
	
	# This method writes data to the file
	function write( $data )
	{
		# Confirm the write:
		if( @!fwrite( $this->_fp, $data . "\n" ) )
		{
			throw new Exception( 'Could not write to the file.' );
			
		} // End if( @!fwrite( $this->_fp, $data . "\n" ) )
		
	} // end function write( $data )
	
	
	# This method closes the file:
	function close()
	{
		# Make sure it's open:
		if( $this->_fp )
		{
			fclose( $this->_fp );
			$this->_fp = NULL;
			
		} // end if( $this->_fp )
		
	} // end function close()
	
	
	function __destruct()
	{
		$this->close();
		
	} // end function __destruct()
 
} // end ClassName