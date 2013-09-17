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
class Pilot
{
	protected $DBH = NULL;
	
	/**
	 * This method calls the database connection:
	 * @since 1.1.0
	 * @return string
	 */
		function __construct( Database $DBH )
		{
			$this->DBH = $DBH;
			 
		} // end method __construct()
		
	/**
	 * This method gets all product Ids:
	 * @since 1.1.0
	 * @return array
	 */
		function getPilot()
		{  
			if( is_admin() || the_page_slug() == 'admin/login' ) : ?>
			
                <div class="pilot-wrapper <?php if( the_page_type() == 'pilot' ) echo 'mnh100p'; ?>">
                    <div class="pilot">
                        <div class="pilot-header">
                            <span class="pilot-title mrs">
                            	<?php if( is_admin() ) : ?>
                            		<a href="<?php echo SITE_URL; ?>admin/pilot">Pilot</a>
                              	<?php else : ?>
                                	Pilot
                               	<?php endif; ?>
                           	</span>
                            <?php if( is_admin() ) : ?>
                                <div class="btn-group btn-group-sm">
                                    <div class="btn-group btn-group-sm">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                           <?php if( the_page_title() == SITE_NAME ) echo 'Home'; elseif( the_page_title() == 'Pilot' ) echo 'Dashboard'; else get_page_title(); ?>
                                          <span class="caret"></span>
                                        </button>
                                        <?php if( the_page_type() == 'pilot' ) : ?>
                                            <a class="btn btn-default" href="<?php echo SITE_URL; ?>">Go to Website</a>
                                        <?php else : ?>
                                            <a class="btn btn-default" href="<?php echo SITE_URL; ?>admin/pilot">Go to Pilot</a>
                                        <?php endif; ?>
                                        <ul class="dropdown-menu">
                                            <li><a href="<?php echo SITE_URL; ?>admin/pilot/pages">Pages</a></li>
                                            <li><a href="#">Products</a></li>
                                            <li><a href="<?php echo SITE_URL; ?>admin/pilot/deploy">Deployment &amp; Maintenance</a></li>
                                            <li><a href="<?php echo SITE_URL; ?>admin/pilot/backup-restore">Backup &amp; Restore</a></li>
                                        </ul>
                                    </div>
                                    <a class="btn btn-default" href="<?php echo SITE_URL; ?>admin/pilot/pages/new-page">New Page</a>
                                    <a class="btn btn-default" href="#">New Product</a>
                                </div>
                                <div class="btn-group pull-right">
                                    <?php if( the_page_type() != 'pilot' ) : ?>
                                        <a class="btn btn-default" onclick="toggle_visibility('pilot-body')">_</a>
                                    <?php endif; ?>
                                  	<a href="<?php echo SITE_URL; ?>admin/logout" class="btn btn-default" >Logout</a>
                                </div>
                          	<?php endif; ?>
                        </div><!-- end pilot-header -->
                        <div id="pilot-body" class="pilot-body">
                        	<div class="phs">
                            	<?php if( file_exists( the_pilot_view_file() ) ) : ?>
									<?php include_once the_pilot_view_file() ?>
                               	<?php endif; ?>
                           	</div><!-- end phs -->
                            <?php if( the_page_type() != 'pilot' ) : ?>
                                <div class="pilot-current-page">
									<?php get_page_title(); ?> <span class="caption">Current Page</span>
                                    <div class="clearfix"></div>
                                    <div class="btn-group btn-group-sm">
                                        <div class="btn-group btn-group-sm">
                                            <ul class="dropdown-menu">
                                              <li><a href="#">Dropdown link</a></li>
                                              <li><a href="#">Dropdown link</a></li>
                                            </ul>
                                        </div>
                                        <button type="button" class="btn btn-default">Edit Page</button>
                                    </div>
                                </div><!-- end pilot-current-page -->
                            <?php endif; ?>
                        </div><!-- end pilot-body -->
                        <div class="pilot-footer">
                        
                        </div><!-- end pilot-footer -->
                    </div><!-- end pilot -->
                </div><!-- end pilot-wrapper -->
			
			<?php endif; 
			 return true;
			
		} // end method getId()
 
} // end Pilot