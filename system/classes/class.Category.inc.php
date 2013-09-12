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
 * Category Class
 */
 
// --------------------------------------------------------------------------------

/**
 * This script defines the Product class
 * @since 0.1.1 s9
 * @author William Mosley, III <will@livesuperamazing.com>
 * The class contains 4 attributes: id, category, description, image 
 * - The attributes match the corresponding database columns.
 * The class contains 4 methods
 * - getId()
 * - getCategory()
 * - getDescription()
 * - getImage()
 *
 * @since 0.1.1 s9
 */
class Category
{
	protected $id = NULL;
	protected $category = NULL;
	protected $description = NULL;
	protected $image = NULL;

	
	/**
	 * This method gets the category id:
	 * @since 1.1.0
	 * @return int
	 */
		function getId()
		{
			return $this->id;
			
		} // end method getId()
		
	/**
	 * This method gets the category name:
	 * @since 1.1.0
	 * @return string
	 */
		function getCategory()
		{
			return $this->category;
			
		} // end method getCategory()
		
	/**
	 * This method gets the category description:
	 * @since 1.1.0
	 * @return string
	 */
		function getDescription()
		{
			return $this->description;
			
		} // end method getDescription()
		
	/**
	 * This method gets the category image:
	 * @since 1.1.0
	 * @return string
	 */
		function getImage()
		{
			return $this->image;
			
		} // end method getImage()
		
			
 
} // end Category