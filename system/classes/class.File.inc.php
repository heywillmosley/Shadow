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
 * 0 Methods
 */
class File
{
	/**
	 * Get File Extension Function
	 *
	 * This method gets file extensions from  the end path or file
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
			return $dot . pathinfo( $filename, PATHINFO_EXTENSION);
			
		} // end function get_file_ext( $filename )


	/**
	 * Remove File Extension Function
	 *
	 * This method removes the file extension from a path or file
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
			# Get extension & append .
			$ext =  '.' . pathinfo( $filename, PATHINFO_EXTENSION);
			
			# String remove extension
			return str_replace( $ext, '', $filename);
			
		} // end function get_file_ext( $filename )


	/**
	 * Add File Extension Function
	 *
	 * This method appends a given file size to original file
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
			# Get extension & append .
			$ext =  '.' . pathinfo( $filename, PATHINFO_EXTENSION);
			
			# String remove extension
			$file_no_ext = str_replace( $ext, '', $filename);
			
			$new_file = $file_no_ext . $sep . $size . $ext;	
					
			if( $check_file )
			{
				# Check if new file exists
				if( file_exists( $new_file ) )
				{
					return $new_file;
					
				} else { return $filename; }
				
			} else { return $new_file; }
			
			
		} // end function get_file_ext( $filename )
	
	
	/**
	 * Image Exists Method
	 *
	 * This method function checks if an image exists
	 *
	 * @package        Shadow   
	 * @author         Super Amazing
	 * @since          Version 0.1.1 s5
	 * @param          string image
	 * @return         boolean
	 */
		function image_exist( $img ) 
		{
			if( @file_get_contents( $img,0,NULL,0,1) ){ return 1; } else{ return 0; }
			
		} // end function image_exist( $img )
		
		
	
	/**
	 * this method copies a folder or file to a specified location
	 * @since 1.1.0
	 * return void
	 */
		function makeCopy( $src,$dst ) 
		{ 
			$dir = opendir($src); 
			@mkdir($dst); 
			while(false !== ( $file = readdir($dir)) ) { 
				if (( $file != '.' ) && ( $file != '..' )) { 
					if ( is_dir($src . '/' . $file) ) { 
						$this->makeCopy($src . '/' . $file,$dst . '/' . $file); 
					} 
					else { 
						copy($src . '/' . $file,$dst . '/' . $file); 
					} 
				} 
			} 
			closedir($dir); 
			
		} // end method makeCopy( $src,$dst ) 
	
	/**
	 * this method saves a compressed zip to a defined destination
	 * @since 1.1.0
	 * return boolean
	 */
		function zip( $source, $destination )
		{	
			# Change memory allocation to 4000mb
			ini_set('memory_limit', '4000M');
		
			if (!extension_loaded('zip') || !file_exists($source)) {
				return false;
			}
		
			$zip = new ZipArchive();
			if (!$zip->open($destination, ZIPARCHIVE::CREATE)) {
				return false;
			}
		
			$source = str_replace('\\', '/', realpath($source));
		
			if (is_dir($source) === true)
			{
				$files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($source), RecursiveIteratorIterator::SELF_FIRST);
		
				foreach ($files as $file)
				{
					$file = str_replace('\\', '/', realpath($file));
		
					if (is_dir($file) === true)
					{
						$zip->addEmptyDir(str_replace($source . '/', '', $file . '/'));
					}
					else if (is_file($file) === true)
					{
						$zip->addFromString(str_replace($source . '/', '', $file), file_get_contents($file));
					}
				}
			}
			else if (is_file($source) === true)
			{
				$zip->addFromString(basename($source), file_get_contents($source));
			}
		
			return $zip->close();
			
		} // end zip( $source, $destination )
		
		
	/**
	 * this method backs up a specified folder or file
	 * @since 1.1.0
	 * return boolean
	 */
		function backup( $source, $filename, $destination, $date = FALSE, $backup_folder = NULL, $root_backup_folder = NULL, $memory = 1000 )
		{	
			# Change memory allocation to 4000mb
			ini_set('memory_limit', $memory.'M');
			
			# Remove .zip extension if filename has it
			if( strpos( $filename, '.zip') == TRUE )
				$filename = str_replace( '.zip', '', $filename );
			
			# Append backup on end of file
			$filename .= '-backup';
			
			# Append date to source file
			if( $date )
			{
				# Change timezone to utc for saving in universal time
				date_default_timezone_set('UTC');
				
				# Define date & time
				$date = new DateTime();
				
				$filename .= '-'.$date->format('YmdHis').'utc';
				
			} // end if date
				
			# Append .zip extension to filename
			$filename .= '.zip';
			
			# Create a root backup folder if $root_backup_folder = true
			if( $root_backup_folder != FALSE )
			{
				# Append trailing slash on backup_folder if none exists
				$root_backup_folder = strtolower( '_' . rtrim($root_backup_folder, '/').'-backups/' );
					
				# Check if backup folder exists, if not, create
				if( !file_exists( $destination.$root_backup_folder ) )
					# Create a new directory	
					mkdir( $destination.$root_backup_folder, 0777);	
				
				# Create a backup folder if $backup_folder = true
				if( $backup_folder != FALSE )
				{
					# Append trailing slash on backup_folder if none exists
					$backup_folder = rtrim($backup_folder, '/').'/';
						
					# Check if backup folder exists, if not, create
					if( !file_exists( $destination.$root_backup_folder.$backup_folder ) )
						# Create a new directory	
						mkdir( $destination.$root_backup_folder.$backup_folder, 0777);
						
				} // end if backup_folder
				
				$destination .= $root_backup_folder.$backup_folder;
					
			} // end if root_backup_folder
			
			
			# Create a backup folder if $backup_folder = true
			if( $backup_folder != FALSE && $root_backup_folder == FALSE )
			{
				# Append trailing slash on backup_folder if none exists
				$backup_folder = '_' . rtrim($backup_folder, '/').'-backups/';
					
				# Check if backup folder exists, if not, create
				if( !file_exists( $destination.$backup_folder ) )
				{
					# Create a new directory	
					mkdir( $destination.$backup_folder, 0777);
				}
					
				$destination .= $root_backup_folder.$backup_folder;
					
			} // end if backup_folder

			
			$dst = $destination.$filename;
			echo $dst;
		
			if (!extension_loaded('zip') || !file_exists($source)) {
				return false;
			}
		
			$zip = new ZipArchive();
			if (!$zip->open($dst, ZIPARCHIVE::CREATE)) {
				return false;
			}
		
			$source = str_replace('\\', '/', realpath($source));
		
			if (is_dir($source) === true)
			{
				$files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($source), RecursiveIteratorIterator::SELF_FIRST);
		
				foreach ($files as $file)
				{
					$file = str_replace('\\', '/', realpath($file));
		
					if (is_dir($file) === true)
					{
						$zip->addEmptyDir(str_replace($source . '/', '', $file . '/'));
					}
					else if (is_file($file) === true)
					{
						$zip->addFromString(str_replace($source . '/', '', $file), file_get_contents($file));
					}
				}
			}
			else if (is_file($source) === true)
			{
				$zip->addFromString(basename($source), file_get_contents($source));
			}
		
			return $zip->close();
			
		} // end zip( $source, $destination )
 
} // end File