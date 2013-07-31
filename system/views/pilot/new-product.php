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
 * This script sets application 404 page
 */
 
// --------------------------------------------------------------------------------?>

<div class="row">
	<div class="twelve columns">
    	<h1><?php echo get_page_title(); ?></h1>
        <ul class="button-group">
          <li><a href="#" class="small button">Add Product</a></li>
          <li><a href="#" class="small button">Actions</a></li>
          <li><a href="#" class="small button">Bulk Actions</a></li>
        </ul>
        
        <form action="<?php echo SELF; ?>" method="POST" class="custom">
        	<div class="row">
            	<div class="small-1 columns">
                	 <label for="checkbox1"><input type="checkbox" id="checkbox1" style="display: none;"><span class="custom checkbox"></span></label>
                </div><!-- ends small-5 columns -->
                <div class="small-4 columns">
                	Product Name
              	</div>
                <div class="small-2 columns">
                	Price
              	</div>
                <div class="small-2 columns">
                	Sales Price
              	</div>
                <div class="small-2 columns">
                	SKU
              	</div>
            </div><!-- end row -->
        </form>
    </div><!-- end twelve columns -->
</div><!-- end-->