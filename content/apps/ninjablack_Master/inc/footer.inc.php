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
 * Sets footer settings
 */
 
// --------------------------------------------------------------------------------?>

                <div class="footer row">
                    <div class="left">&copy; <?php echo '2013 ' . SITE_NAME; ?></div>
                    <div class="right">
                        <a href="#" class="txt_wht">&uarr; Back to the Top</a>
                    </div>
                </div>
        	</div><!-- end journey-content-padding -->
		</div><!-- end journey-content-container -->
	</div><!-- end journey -->
</div><!-- end wrapper -->
</div><!-- end relative -->

<?php shdw_footer(); ?>



<script>
  $(".exhibit").exhibit({
  auto: true,             // Boolean: Animate automatically, true or false
  speed: 500,            // Integer: Speed of the transition, in milliseconds
  timeout: 7000,          // Integer: Time between slide transitions, in milliseconds
  pager: true,           // Boolean: Show pager, true or false
  nav: true,             // Boolean: Show navigation, true or false
  random: false,          // Boolean: Randomize the order of the slides, true or false
  pause: false,           // Boolean: Pause on hover, true or false
  pauseControls: true,    // Boolean: Pause when hovering controls, true or false
  maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
  navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
  manualControls: "",     // Selector: Declare custom pager navigation
  namespace: "exhibit",   // String: Change the default namespace used
  before: function(){},   // Function: Before callback
  after: function(){}     // Function: After callback
});
</script>

</body>