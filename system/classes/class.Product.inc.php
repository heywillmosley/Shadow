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
 * Product Class
 */
 
// --------------------------------------------------------------------------------

/**
 * This script defines the Product class
 * @since 0.1.1 s9
 * @author William Mosley, III <will@livesuperamazing.com>
 * The class contains 21 attributes: id, name, manufacturer, seller, category, * description, features, ingredients, availability, weight, image, salePrice, 
 * sale, specialOffers, SKU, UPC, stock, shippingDetails, ratingReview, 
 * externalLink, dateCreated
 * - The attributes match the corresponding database columns.
 * The class contains 5 methods
 * - getId()
 *
 * @since 0.1.1 s9
 */
class Product
{
	protected $DBH = NULL;
	protected $id = NULL;
	protected $allIds = NULL;
	protected $name = NULL;
	protected $manufacturer = NULL;
	protected $seller = NULL;
	protected $category = NULL;
	protected $description = NULL;
	protected $features = NULL;
	protected $ingredients = NULL;
	protected $availability = NULL;
	protected $weight = NULL;
	protected $image = NULL;
	protected $price = NULL;
	protected $sale = NULL;
	protected $specialOffers = NULL;
	protected $SKU = NULL;
	protected $UPC = NULL;
	protected $stock = NULL;
	protected $shippingDetails = NULL;
	protected $ratingReview = NULL;
	protected $slug = NULL;
	protected $externalLink = NULL;
	protected $dateCreated = NULL;
	
	
	/**
	 * This method calls the database connection:
	 * @since 1.1.0
	 * @return string
	 */
		function __construct( Database $DBH )
		{
			$this->DBH = $DBH;
			
			$STH = $this->DBH->query('SELECT name, description, price from shdw_products');   
	
			# setting the fetch mode  
			$STH->setFetchMode( PDO::FETCH_ASSOC );
			  
			while($row = $STH->fetch()) 
			{  
				$this->name = $row['name'];   
			}  
		}
		
	/**
	 * This method gets all product Ids:
	 * @since 1.1.0
	 * @return array
	 */
		function getAllIds()
		{
			$STH = $this->DBH->query('SELECT id from shdw_products');   
	
			# setting the fetch mode  
			$STH->setFetchMode( PDO::FETCH_ASSOC );

			while( $row = $STH->fetch() )
			{
				$this->allIds[] = $row['id'];	
			}
			
			return $this->allIds;
			
		} // end method getId()
	
	/**
	 * This method returns the user id:
	 * @since 1.1.0
	 * @return string
	 */
		function getId()
		{			
			echo $this->theId( $id );
			
		} // end method getId()
	
		
	/**
	 * This method gets the user id:
	 * @since 1.1.0
	 * @return string
	 */
		function theId( $id )
		{
			$STH = $this->DBH->query('SELECT id from shdw_products WHERE id ='. $id );   
			# Get results by row
			while( $row = $STH->fetch() )
				$this->id = $row['id'];	
			
			return $this->id;
			
		} // end method getId()
		
	/**
	 * This method gets the user id:
	 * @since 1.1.0
	 * @return array
	 */
		function getIdList()
		{
			
			
		} // end method getId()
		
		
	/**
	 * This method returns the name of the product:
	 * @since 1.1.0
	 * @return string
	 */
		function getName( $id )
		{
			echo $this->theName( $id );
			
		} // end method getName()
		
		
	/**
	 * This method gets the name of the product:
	 * @since 1.1.0
	 * @return string
	 */
		function theName( $id )
		{
			$STH = $this->DBH->query('SELECT name from shdw_products WHERE id ='. $id );   
			# Get results by row
			while( $row = $STH->fetch() )
				$this->name = $row['name'];	
			
			return $this->name;
			
		} // end method getName()
		
		
	/**
	 * This method returns the product's manufacturer:
	 * @since 1.1.0
	 * @return string
	 */
		function getManufacturer( $id )
		{
			echo $this->theManufacturer( $id );
			
		} // end method getManufacturer()
		
		
	/**
	 * This method gets the product's manufacturer:
	 * @since 1.1.0
	 * @return string
	 */
		function theManufacturer( $id )
		{
			$STH = $this->DBH->query('SELECT manufacturer from shdw_products WHERE id ='. $id );   
			# Get results by row
			while( $row = $STH->fetch() )
				$this->manufacturer = $row['manufacturer'];	
			
			return $this->manufacturer;
			
		} // end method theManufacturer()
		
		
	/**
	 * This method returns the sellers of the product:
	 * @since 1.1.0
	 * @return string
	 */
		function getSeller( $id )
		{
			echo $this->theSeller( $id );
			
		} // end method getSeller()
		
		
	/**
	 * This method gets the sellers of the product:
	 * @since 1.1.0
	 * @return string
	 */
		function theSeller( $id )
		{
			$STH = $this->DBH->query('SELECT seller from shdw_products WHERE id ='. $id );   
			# Get results by row
			while( $row = $STH->fetch() )
				$this->seller = $row['seller'];	
			
			return $this->seller;
			
		} // end method theSeller()
		
		
	/**
	 * This method returns the categories the product is associated with:
	 * @since 1.1.0
	 * @return string
	 */
		function getCategory( $id )
		{
			echo $this->theCategory( $id );
			
		} // end method getCategory()
		
		
	/**
	 * This method gets the categories the product is associated with:
	 * @since 1.1.0
	 * @return string
	 */
		function theCategory( $id )
		{
			$STH = $this->DBH->query('SELECT category from shdw_products WHERE id ='. $id );   
			# Get results by row
			while( $row = $STH->fetch() )
				$this->category = $row['category'];	
			
			return $this->category;
			
		} // end method getCategory()
		
		
	/**
	 * This method returns the description of the product:
	 * @since 1.1.0
	 * @return string
	 */
		function getDescription( $id )
		{
			echo $this->theDescription( $id );
			
		} // end method getDescription()
		
		
	/**
	 * This method gets the description of the product:
	 * @since 1.1.0
	 * @return string
	 */
		function theDescription( $id )
		{
			$STH = $this->DBH->query('SELECT description from shdw_products WHERE id ='. $id );   
			# Get results by row
			while( $row = $STH->fetch() )
				$this->description = $row['description'];	
			
			return $this->description;
			
		} // end method theDescription()
		
		
	/**
	 * This method returns the features of the product:
	 * @since 1.1.0
	 * @return string
	 */
		function getFeatures( $id )
		{
			echo $this->theFeatures( $id );
			
		} // end method getFeatures()
		
		
	/**
	 * This method gets the features of the product:
	 * @since 1.1.0
	 * @return string
	 */
		function theFeatures( $id )
		{
			$STH = $this->DBH->query('SELECT features from shdw_products WHERE id ='. $id );   
			# Get results by row
			while( $row = $STH->fetch() )
				$this->features = $row['features'];	
			
			return $this->features;
			
		} // end method getFeatures()
		
		
	/**
	 * This method returns the product ingredients:
	 * @since 1.1.0
	 * @return string
	 */
		function getIngredients( $id )
		{
			echo $this->theIngredients( $id );
			
		} // end method getIngredients()
		
		
	/**
	 * This method gets the product ingredients:
	 * @since 1.1.0
	 * @return string
	 */
		function theIngredients( $id )
		{
			$STH = $this->DBH->query('SELECT ingredients from shdw_products WHERE id ='. $id );   
			# Get results by row
			while( $row = $STH->fetch() )
				$this->ingredients = $row['ingredients'];	
			
			return $this->ingredients;
			
		} // end method theIngredients()
		
		
	/**
	 * This method returns the availability of the product:
	 * @since 1.1.0
	 * @return string
	 */
		function getAvailability( $id )
		{
			echo $this->theAvailability( $id );
			
		} // end method getAvailability()
		
		
	/**
	 * This method gets the availability of the product:
	 * @since 1.1.0
	 * @return string
	 */
		function theAvailability( $id )
		{
			$STH = $this->DBH->query('SELECT availability from shdw_products WHERE id ='. $id );   
			# Get results by row
			while( $row = $STH->fetch() )
				$this->availability = $row['availability'];	
			
			return $this->availability;
			
		} // end method theAvailability()
		
		
	/**
	 * This method returns the product weight in ounces:
	 * @since 1.1.0
	 * @return string
	 */
		function getWeight( $id )
		{
			echo $this->theWeight( $id );
			
		} // end method getWeight()
		
		
	/**
	 * This method gets the product weight in ounces:
	 * @since 1.1.0
	 * @return string
	 */
		function theWeight( $id )
		{
			$STH = $this->DBH->query('SELECT weight from shdw_products WHERE id ='. $id );   
			# Get results by row
			while( $row = $STH->fetch() )
				$this->weight = $row['weight'];	
			
			return $this->weight;
			
		} // end method theWeight()
		
		
	/**
	 * This method returns the product image:
	 * @since 1.1.0
	 * @return string
	 */
		function getImage( $id )
		{
			echo $this->theImage( $id );
			
		} // end method getImage()
		
		
	/**
	 * This method gets the product image:
	 * @since 1.1.0
	 * @return string
	 */
		function theImage( $id )
		{
			$STH = $this->DBH->query('SELECT image from shdw_products WHERE id ='. $id );   
			# Get results by row
			while( $row = $STH->fetch() )
				$this->image = $row['image'];	
			
			return $this->image;
			
		} // end method theImage()
		
		
	/**
	 * This method returns the product price:
	 * @since 1.1.0
	 * @return int
	 */
		function getPrice( $id )
		{
			echo $this->thePrice( $id );
			
		} // end method getPrice()
		
		
	/**
	 * This method gets the product price:
	 * @since 1.1.0
	 * @return int
	 */
		function thePrice( $id )
		{
			$STH = $this->DBH->query('SELECT price from shdw_products WHERE id ='. $id );   
			# Get results by row
			while( $row = $STH->fetch() )
				$this->price = $row['price'];	
			
			return $this->price;
			
		} // end method thePrice()
		
		
	/**
	 * This method returns the product's sale price:
	 * @since 1.1.0
	 * @return int
	 */
		function getSalePrice( $id )
		{
			echo $this->theSalePrice( $id );
			
		} // end method getSalePrice()
		
		
	/**
	 * This method gets the product's sale price:
	 * @since 1.1.0
	 * @return int
	 */
		function theSalePrice( $id )
		{
			$STH = $this->DBH->query('SELECT salePrice from shdw_products WHERE id ='. $id );   
			# Get results by row
			while( $row = $STH->fetch() )
				$this->salePrice = $row['salePrice'];	
			
			return $this->salePrice;
			
		} // end method theSalePrice()
		
		
	/**
	 * This method returns the products special offers:
	 * @since 1.1.0
	 * @return string
	 */
		function getSpecialOffers( $id )
		{
			echo $this->theSpecialOffers( $id );
			
		} // end method getSpecialOffers()
		
		
	/**
	 * This method gets the products special offers:
	 * @since 1.1.0
	 * @return string
	 */
		function theSpecialOffers( $id )
		{
			$STH = $this->DBH->query('SELECT specialOffers from shdw_products WHERE id ='. $id );   
			# Get results by row
			while( $row = $STH->fetch() )
				$this->specialOffers = $row['specialOffers'];	
			
			return $this->specialOffers;
			
		} // end method theSpecialOffers()
		
		
	/**
	 * This method returns the product SKU:
	 * @since 1.1.0
	 * @return string
	 */
		function getSKU( $id )
		{
			echo $this->theSKU( $id );
			
		} // end method getSKU()
		
		
	/**
	 * This method gets the product SKU:
	 * @since 1.1.0
	 * @return string
	 */
		function theSKU( $id )
		{
			$STH = $this->DBH->query('SELECT SKU from shdw_products WHERE id ='. $id );   
			# Get results by row
			while( $row = $STH->fetch() )
				$this->SKU = $row['SKU'];	
			
			return $this->SKU;
			
		} // end method theSKU()
		
		
	/**
	 * This method returns the product UPC:
	 * @since 1.1.0
	 * @return int
	 */
		function getUPC( $id )
		{
			echo $this->theUPC( $id );
			
		} // end method getUPC()
		
		
	/**
	 * This method gets the product UPC:
	 * @since 1.1.0
	 * @return int
	 */
		function theUPC( $id )
		{
			$STH = $this->DBH->query('SELECT UPC from shdw_products WHERE id ='. $id );   
			# Get results by row
			while( $row = $STH->fetch() )
				$this->UPC = $row['UPC'];	
			
			return $this->UPC;
			
		} // end method theUPC()
		
		
	/**
	 * This method returns the number of product units in stock:
	 * @since 1.1.0
	 * @return int
	 */
		function getStock( $id )
		{
			echo $this->theStock( $id );
			
		} // end method getStock()
		
		
	/**
	 * This method gets the number of product units in stock:
	 * @since 1.1.0
	 * @return int
	 */
		function theStock( $id )
		{
			$STH = $this->DBH->query('SELECT stock from shdw_products WHERE id ='. $id );   
			# Get results by row
			while( $row = $STH->fetch() )
				$this->stock = $row['stock'];	
			
			return $this->stock;
			
		} // end method theStock()
		
		
	/**
	 * This method returns product shipping details:
	 * @since 1.1.0
	 * @return int
	 */
		function getShippingDetails( $id )
		{
			echo $this->theShippingDetails( $id );
			
		} // end method getShippingDetails()
		
		
	/**
	 * This method gets product shipping details:
	 * @since 1.1.0
	 * @return int
	 */
		function theShippingDetails( $id )
		{
			$STH = $this->DBH->query('SELECT shoppingDetails from shdw_products WHERE id ='. $id );   
			# Get results by row
			while( $row = $STH->fetch() )
				$this->shoppingDetails = $row['shoppingDetails'];	
			
			return $this->shoppingDetails;
			
		} // end method theShippingDetails()
		
		
	/**
	 * This method returns the ratings and reviews for the product:
	 * @since 1.1.0
	 * @return array
	 */
		function getRatingReview( $id )
		{
			echo $this->theRatingReview( $id );
			
		} // end method getRatingReview()
		
		
	/**
	 * This method gets the ratings and reviews for the product:
	 * @since 1.1.0
	 * @return array
	 */
		function theRatingReview( $id )
		{
			$STH = $this->DBH->query('SELECT ratingReview from shdw_products WHERE id ='. $id );   
			# Get results by row
			while( $row = $STH->fetch() )
				$this->ratingReview = $row['ratingReview'];	
			
			return $this->ratingReview;
			
		} // end method theRatingReview()
		
	
	/**
	 * This method returns the slug for the product:
	 * @since 1.1.0
	 * @return string
	 */
		function getSlug( $id )
		{
			echo $this->theSlug( $id );
			
		} // end method getSlug()	
		
	
	/**
	 * This method gets the slug for the product:
	 * @since 1.1.0
	 * @return string
	 */
		function theSlug( $id )
		{
			$STH = $this->DBH->query('SELECT slug from shdw_products WHERE id ='. $id );   
			# Get results by row
			while( $row = $STH->fetch() )
				$this->slug= $row['slug'];	
			
			return SITE_URL . $this->slug;
			
		} // end method theSlug()
		
		
	/**
	 * This method returns the external link for the product:
	 * @since 1.1.0
	 * @return string
	 */
		function getExternalLink( $id )
		{	
			echo $this->theExternalLink( $id );
			
		} // end method getExternalLink()
		
		
	/**
	 * This method gets the external link for the product:
	 * @since 1.1.0
	 * @return string
	 */
		function theExternalLink( $id )
		{
			$STH = $this->DBH->query('SELECT externalLink from shdw_products WHERE id ='. $id );   
			# Get results by row
			while( $row = $STH->fetch() )
				$this->externalLink = $row['externalLink'];	
			
			return $this->externalLink;
			
		} // end method theExternalLink()
		
		
	/**
	 * This method returns the date/time the product was created:
	 * @since 1.1.0
	 * @return int
	 */
		function getDateCreated( $id )
		{
			echo $this->theDateCreated( $id );
			
		} // end method getDateCreated()
		
		
	/**
	 * This method gets the date/time the product was created:
	 * @since 1.1.0
	 * @return int
	 */
		function theDateCreated( $id )
		{
			$STH = $this->DBH->query('SELECT dateCreated from shdw_products WHERE id ='. $id );   
			# Get results by row
			while( $row = $STH->fetch() )
				$this->dateCreated = $row['dateCreated'];	
			
			return $this->dateCreated;
			
		} // end method theDateCreated()
		
	
	/**
	 * This method gets all product Ids:
	 * @since 1.1.0
	 * @return array
	 */
		function theProduct( $id = NULL )
		{
			$STH = $this->DBH->query('SELECT id, slug from shdw_products WHERE slug = "' . the_page_slug() . '"' );   
	
			# setting the fetch mode  
			$STH->setFetchMode( PDO::FETCH_ASSOC );

			while( $row = $STH->fetch() )
			{
				$this->allIds[] = $row['id'];	
			}
			
			return $this->allIds;
			
		} // end method getId()
 
} // end Product Class