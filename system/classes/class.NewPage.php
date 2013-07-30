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
 * This script defines the Page class
 * @since 0.1.1 s9
 * @author William Mosley, III <will@livesuperamazing.com>
 * The class contains 8 attributes: id, parentId, creatorId, title, content, slug dateAdded, and dateUpdated
 * - The attributes match the corresponding database columns.
 * The class contains 7 methods
 * - getId()
 * - getParentId()
 * - getCreatorId()
 * - getTitle()
 * - getContent()
 * - getSlug()
 * - getDateAdded()
 * - getDateUpdated()
 * - getIntro()
 */
class Page
{
	protected $id = NULL;
	protected $parentId = NULL;
	protected $creatorId = NULL;
	protected $title = NULL;
	protected $content = NULL;
	protected $slug = NULL;
	protected $dateAdded = NULL;
	protected $dateUpdated = NULL;
	
	/**
	 * This method gets the page Id
	 * @since 0.1.1 s9
	 * @return string
	 */
		function getId()
		{
			return $this->id;
			
		} // end function getId()
		
		
	/**
	 * This method gets the page parent Id
	 * @since 0.1.1 s9
	 * @return string
	 */
		function getParentId()
		{
			return $this->parentId;
			
		} // end function getParentId()
		
		
		
	/**
	 * This method gets the page creator id
	 * @since 0.1.1 s9
	 * @return string
	 */
		function getCreatorId()
		{
			return $this->creatorId;
			
		} // end method getCreatorId()
		
		
	/**
	 * This method gets the page title
	 * @since 0.1.1 s9
	 * @return string
	 */
		function getTitle()
		{
			return $this->title;
			
		} // end method getTitle()
		
	
	/**
	 * This method gets the page content
	 * @since 0.1.1 s9
	 * @return string
	 */
		function getContent()
		{
			return $this->content;
			
		} // end method getContent()
		
	/**
	 * This method gets the page content
	 * @since 0.1.1 s9
	 * @return string
	 */
		function getContent()
		{
			return $this->content;
			
		} // end method getContent()
		
		
	/**
	 * This method gets the page slug
	 * @since 0.1.1 s9
	 * @return string
	 */
		function getSlug()
		{
			return $this->slug;
			
		} // end method getSlug()
		
		
	/**
	 * This method gets the date the page was added
	 * @since 0.1.1 s9
	 * @return string
	 */
		function getDateAdded()
		{
			return $this->dateAdded;
			
		} // end method getDateAdded()
		
		
	/**
	 * This method gets the date the page was updated
	 * @since 0.1.1 s9
	 * @return string
	 */
		function getDateUpdated()
		{
			return $this->dateUpdated;
			
		} // end method getDateUpdated()
		
		
	/**
	 * This method gets the intro (excerpt) of the page
	 * @since 0.1.1 s9
	 * @return string
	 */
		function getIntro( $count = 200 )
		{
			return substr( strip_tags( $this->content ), 0, $count ) . '...';
			
		} // end method getDateUpdated()
 
} // end Page