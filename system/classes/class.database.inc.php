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
class Database extends PDO
{
	protected $pdo = NULL;
	
	function __construct()
	{
		$this->setDB();
	}
	
	/**
	 * Sets database connection
	 *
	 * @since 1.1.1 s8
	 */
	 function setDB()
	 {
		 require( DB );
		
		# Try to connect to the database:
		try
		{	
			# Creae the object:
			$pdo = new PDO( 'mysql:dbname='.DB_NAME.';host='.DB_HOST.'',DB_USER,DB_PASSWORD );
			
		} // end try
		
		# Report the eorror!
		catch( PDOException $e )
		{
			echo '<h2 class="error">An error occured: ' . $e->getMessage() . '</h2>';
			exit;
			
		} // end catch( PDOException $e )S
		 
	 } // end function setDB()
	 
	 
	 /**
	  * Gets number of rows effected by query
	  */
	  	function getRowsAffected( $query )
		{
			$this->exec( $query );
			
		} // end function getRowsAffected( $query )
	 
	 /**
	  * Close database connection
	  * @since 0.1.1 s8
	  */
		 function closeDB()
		 {
			 unset( $this->pdo ); 
			 
		 } // end function closeDB()
		 
	/**
	 * Destroy database connection
	 */
		function __destruct()
		{
			$this->closeDB();
			
		} // end __destruct()
	
 
} // end ClassName