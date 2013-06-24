<?php # Prevents direct script access
if(!defined('ROOT_URI')){require'../inc/config.inc.php';header('Location:'.SITE_URL);exit;}
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
 * Pilot Footer
 */
 
// --------------------------------------------------------------------------------?>

<?php require SYS_INC_URI . 'pilot/header.inc.php'; ?>

<section class="plt-main">
	<div class="row">
    	<div class="small-12 columns">
        	<div class=" primary panel">
            	<h6 class="strong">Welcome to <?php echo FW_NAME; ?> Pilot</h6>
            	<p>From here, you can <a href="#">add pages</a>, <a href="#">write articles</a>, <a href="#">manage users</a>, and <a href="#">update your site settings</a>. Enjoy.
         	</div><!-- end panel -->
        </div><!-- end small-12 columns -->
    </div><!-- end row -->
	<div class="row">
    	<div class="small-12 large-6 columns">
        	<div class="panel h500">
            	<h2>Latest Posts</h2>
            </div><!-- end panel -->
        </div><!-- end small-12 large-6 columns -->
        <div class="small-12 large-6 columns">
        	<div class="panel h400">
            	<h2>Pending Comments</h2>
            </div><!-- end panel -->
        </div><!-- end small-12 large-6 columns -->
    </div><!-- end row -->
    <div class="small-12 large-6 columns">
        	<div class="panel h300">
            	<h2>Recently Added Users</h2>
            </div><!-- end panel -->
        </div><!-- end small-12 large-6 columns -->
        <div class="small-12 large-6 columns">
        	<div class="panel h400">
            	<h2>Recently Added Pages</h2>
            </div><!-- end panel -->
        </div><!-- end small-12 large-6 columns -->
</section><!-- end main -->

<?php require SYS_INC_URI . 'pilot/footer.inc.php'; ?>