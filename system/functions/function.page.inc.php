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
 * System Page Functions
 */
 
// --------------------------------------------------------------------------------

if( !WP )
{

/**
 * This function returns the page Id
 * @since 1.1.0
 * @return string
 */
	function get_page_id()
	{
		global $DBH;
		# Set new Page object
		$c = new Page( $DBH );
		return $c->getId();
		
	} // end function getId()
	
	
/**
 * This function gets the page Id
 * @since 1.1.0
 * @return string
 */
	function the_page_id()
	{
		global $DBH;
		# Set new Page object
		$c = new Page( $DBH );
		return $c->theId();
		
	} // end function the_page_id()
	
	
/**
 * This function gets the page parent Id
 * @since 1.1.0
 * @return string
 */
	function get_page_parent_id()
	{
		global $DBH;
		# Set new Page object
		$c = new Page( $DBH );
		return $c->getParentId();
		
	} // end function get_page_parent_id()
	
	
/**
 * This function gets the page parent Id
 * @since 1.1.0
 * @return string
 */
	function the_page_parent_id()
	{
		global $DBH;
		# Set new Page object
		$c = new Page( $DBH );
		return $c->theParentId();
		
	} // end function the_page_parent_id()
	
	
/**
 * This function returns the page creator id
 * @since 1.1.0
 * @return string
 */
	function get_page_creator_id()
	{
		global $DBH;
		# Set new Page object
		$c = new Page( $DBH );
		return $c->getCreatorId();
		
	} // end function get_page_creator_id()
	
	
/**
 * This function gets the page creator id
 * @since 1.1.0
 * @return string
 */
	function the_page_creator_id()
	{
		global $DBH;
		# Set new Page object
		$c = new Page( $DBH );
		return $c->theCreatorId();
		
	} // end function the_page_creator_id()
	
	
/**
 * This function returns the page type
 * @since 1.1.0
 * @return string
 */
	function get_page_type()
	{
		global $DBH;
		# Set new Page object
		$c = new Page( $DBH );
		return $c->getType();
		
	} // end function get_page_type()
	
	
/**
 * This function gets the page type
 * @since 1.1.0
 * @return string
 */
	function the_page_type()
	{
		global $DBH;
		# Set new Page object
		$c = new Page( $DBH );
		return $c->theType();
		
	} // end function the_page_type()
	
	
/**
 * This function returns the page title
 * @since 1.1.0
 * @return string
 */
	function get_page_title()
	{
		global $DBH;
		# Set new Page object
		$c = new Page( $DBH );
		return $c->getTitle();
		
	} // end function get_page_title()
	
	
/**
 * This function gets the page title
 * @since 1.1.0
 * @return string
 */
	function the_page_title()
	{
		global $DBH;
		# Set new Page object
		$c = new Page( $DBH );
		return $c->theTitle();
		
	} // end function the_page_title()	
	
	
/**
 * This function returns the page title
 * @since 1.1.0
 * @return string
 */
	function get_page_header_title()
	{
		global $DBH;
		# Set new Page object
		$c = new Page( $DBH );
		return $c->getHeaderTitle();
		
	} // end function get_page_header_title()
	
	
/**
 * This function gets the page title
 * @since 1.1.0
 * @return string
 */
	function the_page_header_title()
	{
		global $DBH;
		# Set new Page object
		$c = new Page( $DBH );
		return $c->theHeaderTitle();
		
	} // end function the_page_header_title()	


/**
 * This function returns the page content
 * @since 1.1.0
 * @return string
 */
	function get_page_content()
	{
		global $DBH;
		# Set new Page object
		$c = new Page( $DBH );
		return $c->getContent();
		
	} // end function get_page_content()
	
	
/**
 * This function gets the page content
 * @since 1.1.0
 * @return string
 */
	function the_page_content()
	{
		global $DBH;
		# Set new Page object
		$c = new Page( $DBH );
		return $c->theContent();
		
	} // end function the_page_content()
	
	
/**
 * This function returns the page slug
 * @since 1.1.0
 * @return string
 */
	function get_page_slug()
	{
		global $DBH;
		# Set new Page object
		$c = new Page( $DBH );
		return $c->getSlug();
		
	} // end function get_page_slug()
	
	
/**
 * This function gets the page slug
 * @since 1.0.0
 * @return string
 */
	function the_page_slug()
	{
		global $DBH;
		# Set new Page object
		$c = new Page( $DBH );
		return $c->theSlug();
		
	} // end function the_page_slug()
	
	
/**
 * This function returns the date the page was added
 * @since 1.1.0
 * @return string
 */
	function get_date_page_added()
	{
		global $DBH;
		# Set new Page object
		$c = new Page( $DBH );
		return $c->getDateAdded();
		
	} // end function get_date_page_added()
	
	
/**
 * This function gets the date the page was added
 * @since 1.1.0
 * @return string
 */
	function the_date_page_added()
	{
		global $DBH;
		# Set new Page object
		$c = new Page( $DBH );
		return $c->theDateAdded();
		
	} // end function the_date_page_added()
	
	
/**
 * This function returns the date the page was updated
 * @since 1.1.0
 * @return string
 */
	function get_date_page_updated()
	{
		global $DBH;
		# Set new Page object
		$c = new Page( $DBH );
		return $c->getDateUpdated();
		
	} // end function get_date_page_updated()
	
	
/**
 * This function gets the date the page was updated
 * @since 1.1.0
 * @return string
 */
	function the_date_page_updated()
	{
		global $DBH;
		# Set new Page object
		$c = new Page( $DBH );
		return $c->theDateUpdated();
		
	} // end function the_date_page_updated()
	

/**
 * This function returns the page title
 * @since 1.1.0
 * @return string
 */
	function get_page_url()
	{
		global $DBH;
		# Set new Page object
		$c = new Page( $DBH );
		return $c->getUrl();
		
	} // end function get_page_url()
	
	
/**
 * This function gets the page title
 * @since 1.1.0
 * @return string
 */
	function the_page_url()
	{
		global $DBH;
		# Set new Page object
		$c = new Page( $DBH );
		return $c->theUrl();
		
	} // end function the_page_url()
	

/**
 * This function sets the page called from url slug
 * @since 1.1.0
 * @return string
 */
	function set_page()
	{
		global $DBH;
		# Set new Page object
		$c = new Page( $DBH );
		return $c->setPage();
		
	} // end function setPage()
	

/**
 * This function gets the page called from setPage()
 * @since 1.1.0
 * @return string
 */
	function get_page()
	{
		global $DBH;
		# Set new Page object
		$c = new Page( $DBH );
		return $c->getPage();
			
	} // end function get_page()


/**
 * This function sets the 404 page
 * @since 0.1.1 s5
 * @return string
 */
	function page_404()
	{
		global $DBH;
		# Set new Page object
		$c = new Page( $DBH );
		return $c->page404();
		
	} // end function page_404()
	
	
} // end !WP