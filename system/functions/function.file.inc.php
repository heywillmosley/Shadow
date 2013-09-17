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
 * @since          Version 0.1.1 s8
 * -----------------------------------------------------------------
 *
 * System File Functions
 */
 
// --------------------------------------------------------------------------------	
	
/**
 * Get File Extension Function
 *
 * This function gets file extensions from  the end path or file
 *
 * @package        Shadow   
 * @author         Super Amazing
 * @link
 * @since          Version 0.1.1 s5
 * @dependencies   
 * @param          string  filename
 * @param          string  add dot
 * @return         string
 */
	function get_file_ext( $filename, $dot = '.' )
	{
		# Call new Object, Call function from class, use function parameters
		$o = new File; return $o->get_file_ext( $filename, $dot );
		
	} // end function get_file_ext( $filename )


/**
 * Remove File Extension Function
 *
 * This function removes the file extension from a path or file
 *
 * @package        Shadow   
 * @author         Super Amazing
 * @link
 * @since          Version 0.1.1 s5
 * @dependencies   
 * @param          string  filename
 * @return         string
 */
	function remove_file_ext( $filename )
	{
		# Call new Object, Call function from class, use function parameters
		$o = new File; return $o->remove_file_ext( $filename );
		
	} // end function get_file_ext( $filename )


/**
 * Add File Extension Function
 *
 * This function appends a given file size to original file
 * To allow for responsive calls
 * e.g. image.jpg -> image-100x100.jpg
 *
 * @package        Shadow   
 * @author         Super Amazing
 * @link
 * @since          Version 0.1.1 s5
 * @dependencies   
 * @param          string  filename or path
 * @param          string  sixe
 * @param          OPTIONAL string  seperator
 * @param          OPTIONAL string  check file
 * @return         string
 */
	function add_file_ext( $filename, $size, $sep = '-', $check_file = false )
	{
		# Call new Object, Call function from class, use function parameters
		$o = new File; return $o->add_file_ext( $filename, $size, $sep, $check_file );
		
		
	} // end function get_file_ext( $filename )


/**
 * Image Exists function
 *
 * This function function checks if an image exists
 *
 * @package        Shadow   
 * @author         Super Amazing
 * @since          Version 0.1.1 s5
 * @param          string image
 * @return         boolean
 */
	function image_exist( $img ) 
	{
		# Call new Object, Call function from class, use function parameters
		$o = new File; return $o->image_exist( $img );
		
	} // end function image_exist( $img )
	

	
	
/**
	 * this function copies a folder or file to a specified location
	 * @since 1.1.0
	 * return void
	 */
		function make_copy( $src,$dst ) 
		{ 
			global $DBH;
			# Set new Page object
			$c = new File( $DBH );
			return $c->makeCopy();
			
		} // end function make_copy( $src,$dst ) 
	
	/**
	 * this function saves a compressed zip to a defined destination
	 * @since 1.1.0
	 * return boolean
	 */
		function zip( $source, $destination )
		{	
			global $DBH;
			# Set new Page object
			$c = new File( $DBH );
			return $c->zip();
			
		} // end zip( $source, $destination )
		
		
	/**
	 * this function backs up a specified folder or file
	 * @since 1.1.0
	 * return boolean
	 */
		function backup( $source, $filename, $destination, $date = FALSE, $backup_folder = NULL, $root_backup_folder = NULL, $memory = 1000 )
		{	
			global $DBH;
			# Set new Page object
			$c = new File( $DBH );
			return $c->backup();
			
		} // end backup( $source, $destination )
	
	