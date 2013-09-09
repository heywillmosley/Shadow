<?php defined('INDEX') or die( $id ) and exit( $id ); // Prevents direct script access
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
 * System Admin Functions
 */
 
// --------------------------------------------------------------------------------
	

/**
	 * This function gets all product Ids:
	 * @since 1.1.0
	 * @return array
	 */
		function get_all_product_ids()
		{
			global $DBH;
			# Set new Product object
			$u = new Product( $DBH );
			return $u->getAllIds();
			
		} // end function getId( $id )
	
	/**
	 * This function gets the user id:
	 * @since 1.1.0
	 * @return string
	 */
		function get_product_id( $id )
		{
			global $DBH;
			# Set new Product object
			$u = new Product( $DBH );
			return $u->getId( $id );
			
		} // end function getId( $id )
		
	
	/**
	 * This function gets the user id:
	 * @since 1.1.0
	 * @return string
	 */
		function the_product_id( $id )
		{
			global $DBH;
			# Set new Product object
			$u = new Product( $DBH );
			return $u->theId( $id );
			
		} // end function getId( $id )
		
		
	/**
	 * This function gets the user id:
	 * @since 1.1.0
	 * @return array
	 */
		function get_product_id_list( $id )
		{
			
			
		} // end function getId( $id )
		
		
	/**
	 * This function returns the name of the product:
	 * @since 1.1.0
	 * @return string
	 */
		function get_product_name( $id )
		{
			global $DBH;
			# Set new Product object
			$u = new Product( $DBH );
			return $u->getName( $id );
			
		} // end function getName( $id )
		
		
	/**
	 * This function gets the name of the product:
	 * @since 1.1.0
	 * @return string
	 */
		function the_product_name( $id )
		{
			global $DBH;
			# Set new Product object
			$u = new Product( $DBH );
			return $u->theName( $id );
			
		} // end function getName( $id )
		
		
	/**
	 * This function returns the product's manufacturer:
	 * @since 1.1.0
	 * @return string
	 */
		function get_product_manufacturer( $id )
		{
			global $DBH;
			# Set new Product object
			$u = new Product( $DBH );
			return $u->getManufacturer( $id );
			
		} // end function getManufacturer( $id )
		
		
	/**
	 * This function gets the product's manufacturer:
	 * @since 1.1.0
	 * @return string
	 */
		function the_product_manufacturer( $id )
		{
			global $DBH;
			# Set new Product object
			$u = new Product( $DBH );
			return $u->theManufacturer( $id );
			
		} // end function theManufacturer( $id )
		
		
	/**
	 * This function returns the sellers of the product:
	 * @since 1.1.0
	 * @return string
	 */
		function get_product_seller( $id )
		{
			global $DBH;
			# Set new Product object
			$u = new Product( $DBH );
			return $u->getSeller( $id );
			
		} // end function getSeller( $id )
		
		
	/**
	 * This function gets the sellers of the product:
	 * @since 1.1.0
	 * @return string
	 */
		function the_product_seller( $id )
		{
			global $DBH;
			# Set new Product object
			$u = new Product( $DBH );
			return $u->theSeller( $id );
			
		} // end function theSeller( $id )
		
		
	/**
	 * This function returns the categories the product is associated with:
	 * @since 1.1.0
	 * @return string
	 */
		function get_product_category( $id )
		{
			global $DBH;
			# Set new Product object
			$u = new Product( $DBH );
			return $u->getCategory( $id );
			
		} // end function get_product_category( $id )
		
		
	/**
	 * This function gets the categories the product is associated with:
	 * @since 1.1.0
	 * @return string
	 */
		function the_product_category( $id )
		{
			global $DBH;
			# Set new Product object
			$u = new Product( $DBH );
			return $u->theCategory( $id );
			
		} // end function the_product_category( $id )
		
		
	/**
	 * This function returns the description of the product:
	 * @since 1.1.0
	 * @return string
	 */
		function get_product_description( $id )
		{
			global $DBH;
			# Set new Product object
			$u = new Product( $DBH );
			return $u->getDescription( $id );
			
		} // end function get_product_description( $id )
		
		
	/**
	 * This function gets the description of the product:
	 * @since 1.1.0
	 * @return string
	 */
		function the_product_description( $id )
		{
			global $DBH;
			# Set new Product object
			$u = new Product( $DBH );
			return $u->theDescription( $id );
			
		} // end function the_product_description( $id )
		
		
	/**
	 * This function returns the features of the product:
	 * @since 1.1.0
	 * @return string
	 */
		function get_product_features( $id )
		{
			global $DBH;
			# Set new Product object
			$u = new Product( $DBH );
			return $u->getFeatures( $id );
			
		} // end function get_product_features( $id )
		
		
	/**
	 * This function gets the features of the product:
	 * @since 1.1.0
	 * @return string
	 */
		function the_product_features( $id )
		{
			global $DBH;
			# Set new Product object
			$u = new Product( $DBH );
			return $u->theFeatures( $id );
			
		} // end function the_product_features( $id )
		
		
	/**
	 * This function returns the product ingredients:
	 * @since 1.1.0
	 * @return string
	 */
		function get_product_ingredients( $id )
		{
			global $DBH;
			# Set new Product object
			$u = new Product( $DBH );
			return $u->getIngredients( $id );
			
		} // end function get_product_ingredients( $id )
		
		
	/**
	 * This function gets the product ingredients:
	 * @since 1.1.0
	 * @return string
	 */
		function the_product_ingredients( $id )
		{
			global $DBH;
			# Set new Product object
			$u = new Product( $DBH );
			return $u->theIngredients( $id );
			
		} // end function the_product_ingredients( $id )
		
		
	/**
	 * This function returns the availability of the product:
	 * @since 1.1.0
	 * @return string
	 */
		function get_product_availability( $id )
		{
			global $DBH;
			# Set new Product object
			$u = new Product( $DBH );
			return $u->getAvailability( $id );
			
		} // end function get_product_availability( $id )
		
		
	/**
	 * This function lists the availability of the product:
	 * @since 1.1.0
	 * @return string
	 */
		function the_product_availability( $id )
		{
			global $DBH;
			# Set new Product object
			$u = new Product( $DBH );
			return $u->theAvailability( $id );
			
		} // end function the_product_availability( $id )
		
		
	/**
	 * This function returns the product weight in ounces:
	 * @since 1.1.0
	 * @return string
	 */
		function get_product_weight( $id )
		{
			global $DBH;
			# Set new Product object
			$u = new Product( $DBH );
			return $u->getWeight( $id );
			
		} // end function getWeight( $id )
		
		
	/**
	 * This function gets the product weight in ounces:
	 * @since 1.1.0
	 * @return string
	 */
		function the_product_weight( $id )
		{
			global $DBH;
			# Set new Product object
			$u = new Product( $DBH );
			return $u->theWeight( $id );
			
		} // end functionthe_product_weight( $id )
		
		
	/**
	 * This function returns the product image:
	 * @since 1.1.0
	 * @return string
	 */
		function get_product_image( $id )
		{
			global $DBH;
			# Set new Product object
			$u = new Product( $DBH );
			return $u->getImage( $id );
			
		} // end function getImage( $id )
		
		
	/**
	 * This function gets the product image:
	 * @since 1.1.0
	 * @return string
	 */
		function the_product_image( $id )
		{
			global $DBH;
			# Set new Product object
			$u = new Product( $DBH );
			return $u->theImage( $id );
			
		} // end function the_product_image( $id )
		
		
	/**
	 * This function returns the product price:
	 * @since 1.1.0
	 * @return int
	 */
		function get_product_price( $id )
		{
			global $DBH;
			# Set new Product object
			$u = new Product( $DBH );
			return $u->getPrice( $id );
			
		} // end function getPrice( $id )
		
		
	/**
	 * This function gets the product price:
	 * @since 1.1.0
	 * @return int
	 */
		function the_product_price( $id )
		{
			global $DBH;
			# Set new Product object
			$u = new Product( $DBH );
			return $u->thePrice( $id );
			
		} // end the_product_price( $id )
		
		
	/**
	 * This function returns the product's sale price:
	 * @since 1.1.0
	 * @return int
	 */
		function get_product_sale_price( $id )
		{
			global $DBH;
			# Set new Product object
			$u = new Product( $DBH );
			return $u->getSalePrice( $id );
			
		} // end function get_product_sale_price( $id )
		
		
	/**
	 * This function gets the product's sale price:
	 * @since 1.1.0
	 * @return int
	 */
		function the_product_sale_price( $id )
		{
			global $DBH;
			# Set new Product object
			$u = new Product( $DBH );
			return $u->theSalePrice( $id );
			
		} // end function the_product_sale_price( $id )
		
		
	/**
	 * This function returns the products special offers:
	 * @since 1.1.0
	 * @return string
	 */
		function get_product_special_offers( $id )
		{
			global $DBH;
			# Set new Product object
			$u = new Product( $DBH );
			return $u->getSpecialOffers( $id );
			
		} // end function get_product_special_offers( $id )
		
		
	/**
	 * This function gets the products special offers:
	 * @since 1.1.0
	 * @return string
	 */
		function the_product_special_offers( $id )
		{
			global $DBH;
			# Set new Product object
			$u = new Product( $DBH );
			return $u->theSpecialOffers( $id );
			
		} // end function the_product_special_offers( $id )
		
		
	/**
	 * This function returns the product SKU:
	 * @since 1.1.0
	 * @return string
	 */
		function get_product_sku( $id )
		{
			global $DBH;
			# Set new Product object
			$u = new Product( $DBH );
			return $u->getSKU( $id );
			
		} // end function get_product_sku( $id )
		
		
	/**
	 * This function gets the product SKU:
	 * @since 1.1.0
	 * @return string
	 */
		function the_product_sku( $id )
		{
			global $DBH;
			# Set new Product object
			$u = new Product( $DBH );
			return $u->theSKU( $id );
			
		} // end function the_product_sku( $id )
		
		
	/**
	 * This function returns the product UPC:
	 * @since 1.1.0
	 * @return int
	 */
		function get_product_upc( $id )
		{
			global $DBH;
			# Set new Product object
			$u = new Product( $DBH );
			return $u->getUPC( $id );
			
		} // end function get_product_upc( $id )
		
		
	/**
	 * This function gets the product UPC:
	 * @since 1.1.0
	 * @return int
	 */
		function the_product_upc( $id )
		{
			global $DBH;
			# Set new Product object
			$u = new Product( $DBH );
			return $u->theUPC( $id );
			
		} // end function the_product_upc( $id )
		
		
	/**
	 * This function returns the number of product units in stock:
	 * @since 1.1.0
	 * @return int
	 */
		function get_product_stock( $id )
		{
			global $DBH;
			# Set new Product object
			$u = new Product( $DBH );
			return $u->getStock( $id );
			
		} // end function get_product_stock( $id )
		
	
	/**
	 * This function gets the number of product units in stock:
	 * @since 1.1.0
	 * @return int
	 */
		function the_product_stock( $id )
		{
			global $DBH;
			# Set new Product object
			$u = new Product( $DBH );
			return $u->theStock( $id );
			
		} // end function the_product_stock( $id )
		
		
	/**
	 * This function returns product shipping details:
	 * @since 1.1.0
	 * @return int
	 */
		function get_product_shipping_details( $id )
		{
			global $DBH;
			# Set new Product object
			$u = new Product( $DBH );
			return $u->getShippingDetails( $id );
			
		} // end function get_product_shipping_details( $id )
		
		
	/**
	 * This function the product shipping details:
	 * @since 1.1.0
	 * @return int
	 */
		function the_product_shipping_details( $id )
		{
			global $DBH;
			# Set new Product object
			$u = new Product( $DBH );
			return $u->theShippingDetails( $id );
			
		} // end function the_product_shipping_details( $id )
		
		
	/**
	 * This function returns the ratings and reviews for the product:
	 * @since 1.1.0
	 * @return array
	 */
		function get_product_ratings_reviews( $id )
		{
			global $DBH;
			# Set new Product object
			$u = new Product( $DBH );
			return $u->getRatingsReviews( $id );
			
		} // end function get_product_ratings_reviews( $id )
		
		
	/**
	 * This function gets the ratings and reviews for the product:
	 * @since 1.1.0
	 * @return array
	 */
		function the_product_ratings_reviews( $id )
		{
			global $DBH;
			# Set new Product object
			$u = new Product( $DBH );
			return $u->theRatingsReviews( $id );
			
		} // end function the_product_ratings_reviews( $id )
		
		
	/**
	 * This function returns the external link for the product:
	 * @since 1.1.0
	 * @return string
	 */
		function get_product_external_link( $id )
		{
			global $DBH;
			# Set new Product object
			$u = new Product( $DBH );
			return $u->getExternalLink( $id );
			
		} // end function get_product_external_link( $id )
		
	
	/**
	 * This function returns the slug for the product:
	 * @since 1.1.0
	 * @return string
	 */
		function get_product_slug( $id )
		{
			global $DBH;
			# Set new Product object
			$u = new Product( $DBH );
			return $u->getSlug( $id );
			
		} // end function get_product_slug( $id )
	
		
	/**
	 * This function gets the slug for the product:
	 * @since 1.1.0
	 * @return string
	 */
		function the_product_slug( $id )
		{
			global $DBH;
			# Set new Product object
			$u = new Product( $DBH );
			return $u->theSlug( $id );
			
		} // end function the_product_slug( $id )

		
	/**
	 * This function gets the external link for the product:
	 * @since 1.1.0
	 * @return string
	 */
		function the_product_external_link( $id )
		{
			global $DBH;
			# Set new Product object
			$u = new Product( $DBH );
			return $u->theExternalLink( $id );
			
		} // end function the_product_external_link( $id )	
	
		
	/**
	 * This function returns the date/time the product was created:
	 * @since 1.1.0
	 * @return int
	 */
		function get_date_product_created( $id )
		{
			global $DBH;
			# Set new Product object
			$u = new Product( $DBH );
			return $u->getDateCreated( $id );
			
		} // end function get_date_product_created( $id )
		
		
	/**
	 * This function gets the date/time the product was created:
	 * @since 1.1.0
	 * @return int
	 */
		function the_date_product_created( $id )
		{
			global $DBH;
			# Set new Product object
			$u = new Product( $DBH );
			return $u->theDateCreated( $id );
			
		} // end function the_date_product_created( $id )
		
	
	/**
	 * This function gets all product Ids:
	 * @since 1.1.0
	 * @return array
	 */
		function the_product( $id = NULL )
		{
			global $DBH;
			# Set new Product object
			$u = new Product( $DBH );
			return $u->theProduct( $id );
			
		} // end function getId( $id )	
	