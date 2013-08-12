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
class Element extends Form
{
	protected $_elements = array();
	protected $_validation = array();
	protected $_prefix = "http";
	protected $_values = array();
	protected $_attributes = array();

	protected $ajax;
	protected $ajaxCallback;
	protected $errorView;
	protected $labelToPlaceholder;
	protected $resourcesPath;
	/*Prevents various automated from being automatically applied.  Current options for this array
	included jQuery, bootstrap and focus.*/
	protected $prevent = array();
	protected $form_id;
	protected $form_class;
	protected $form_method;
	protected $form_action;
	
	protected $element_name;
	

	function __construct( $element )
	{
			
		
		
	} // end __construct
	
 
} // end ClassName