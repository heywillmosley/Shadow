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
<div id="shdw">
    <section class="plt-main pal">
        <div class="row">
            <div class="small-12 columns">
                    
                    <div class="row">
                        <div class="small-1 columns">
                            <img src="<?php echo SYS_IMG_URL.'iconmonstr-direction-11-icon.png'; ?>" alt="New paths" />
                        </div><!-- end small columns -->
                        <div class="small-11 columns">
                            <div class="headline"><?php echo SITE_NAME; ?>'s Fresh Start</div>
                        </div><!-- end small-11 columns -->
                    </div><!-- end row  -->
                    <div class="subheadline">From here, you can <a href="#">add pages</a>, <a href="#">write articles</a>, <a href="#">manage users</a>, and <a href="#">update your site settings</a>. Enjoy.</div>
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
    
</div><!-- end shdw -->

<?php require SYS_INC_URI . 'pilot/footer.inc.php'; ?>