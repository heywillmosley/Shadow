<?php # Prevents direct script access
if(!defined('ROOT_URI')){require'../../../../system/inc/config.inc.php';header('Location:'.SITE_URL);exit;}
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
 * Home page template
 */
 
// --------------------------------------------------------------------------------

# includes header.php
app_header();  
?>



<div class="pas">
    <div class="row">
        <div class="small-12 large-8 columns">
        	<h1>Main Content</h1>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non odio fermentum, volutpat augue et, faucibus eros. Maecenas iaculis suscipit massa, sed bibendum massa condimentum ac. Suspendisse vitae viverra felis, eget adipiscing nunc. Sed vestibulum, diam vel pharetr</p>
            <p>Mauris gravida risus dui, quis hendrerit enim rutrum non. Nam pretium auctor metus vel ullamcorper. Nam at felis mauris. Fusce fringilla enim malesuada lacinia rutrum. Etiam dictum quis nibh vitae ultrices. Integer vulputate urna sed diam auctor, vel blandit mauris scelerisque. Nam at ullamcorper mauris, nec pharetra quam. Mauris vitae elit ullamcorper, viverra augue id, tincidunt tellus.</p>
            <p>Vestibulum arcu leo, vestibulum non lectus eu, interdum pretium nisi. Nulla nec interdum nibh. Ut eu lacinia nisl, quis pharetra est. Curabitur enim justo, sagittis ac enim eget, semper gravida lectus. Vestibulum iaculis orci sapien, sed aliquam urna suscipit sed. Cras auctor pulvinar ullamcorper. Vivamus eget sodales mi. Cras sit amet fermentum tellus. Morbi nec vehicula augue, in auctor magna. Vivamus vel tortor nec ligula pulvinar tempor eget ut ipsum.</p>
    
            <p>Suspendisse sed mattis tellus. Aenean eu aliquam neque, vel condimentum nisl. Vestibulum egestas, lorem sit amet fringilla eleifend, lacus ligula porttitor tortor, et porttitor orci est tempor diam. Duis sem eros, lobortis at velit sed, interdum luctus velit. Praesent eleifend consectetur metus, eu blandit velit tempor ac. Suspendisse sit amet augue turpis. Nullam nec tristique libero, quis porttitor lacus. Maecenas porttitor libero mi, quis eleifend purus egestas ut.</p>
    
            <p>Vivamus fermentum magna eu pretium accumsan. Nunc urna neque, suscipit id erat et, suscipit posuere nisi. Nulla molestie mauris sem, nec varius urna facilisis sit amet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque vehicula dignissim dui. Praesent varius ut lacus sed faucibus. Nulla et nunc vitae mauris bibendum facilisis vel a ante. Proin sit amet erat diam. Nunc commodo ipsum sapien, ac sollicitudin eros lacinia lacinia. Donec mi quam, aliquet nec justo at, ornare laoreet velit. Sed eu pellentesque odio. Fusce feugiat at risus ac dictum. Ut id augue quis odio lacinia commodo nec a lorem. Vivamus nisi augue, aliquet quis augue in, semper tincidunt mauris. Integer gravida auctor porta. In laoreet vulputate justo, et dignissim leo eleifend et.</p>
        </div><!-- end small-12 large-8 columns -->
        <div class="small-12 large-4 columns">
        	<div class="pls">
                <h2>Sidebar</h2>
                <p>Vivamus fermentum magna eu pretium accumsan. Nunc urna neque, suscipit id erat et, suscipit posuere nisi. Nulla molestie mauris sem, nec varius urna facilisis sit amet. Pellentesque eleifend et.</p>
          	</div><!-- end pls -->
        </div><!-- end small-12 large-4 columns -->
    </div><!-- end row -->
</div><!-- end pas -->

<?php 
# includes footer.php
app_footer();

