<?php
/**
 * Loads all necessary Javascript files before close body tag
 * @since 0.1.9
 */
	function shdw_footer()
	{ ?>
		
		<script>
		  document.write('<script src=' +
		  ('__proto__' in {} ? '<?php echo SYS_JS_URL; ?>vendor/zepto' : '<?php echo SYS_JS_URL; ?>vendor/jquery') +
		  '.js><\/script>')
		</script>
        
        <!-- jQuery library - Please load it from Google API's -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		
		<script src="<?php echo SYS_JS_URL; ?>vendor/foundation/foundation.min.js"></script>
		<script src="<?php echo SYS_JS_URL; ?>vendor/foundation/foundation.interchange.js"></script>
		<script src="<?php echo APP_JS_URL; ?>application.js"></script>
		<script src="<?php echo SYS_JS_URL; ?>shadow.js"></script>
		<script src="<?php echo SYS_JS_URL; ?>vendor/respond.min.js"></script>
		
		<script>
			$(document).foundation('interchange', {
			  named_queries : {
				smaller : 'only screen and (min-width: 660px)'
			  }
			});
		</script>
	
		<script>
          $(document).foundation();
        </script>
	
		<!-- jQuery UI Widget and Effects Core (custom download)
			 You can make your own at: http://jqueryui.com/download -->
		<script src="<?php echo SYS_JS_URL; ?>vendor/jquery-ui-1.8.23.custom.min.js" type="text/javascript"></script>
		
		<!-- Latest version (3.0.6) of jQuery Mouse Wheel by Brandon Aaron
			 You will find it here: http://brandonaaron.net/code/mousewheel/demos -->
		<script src="<?php echo SYS_JS_URL; ?>vendor/jquery.mousewheel.min.js" type="text/javascript"></script>
	
		<!-- jQuery Kinectic (1.5) used for touch scrolling -->
		<script src="<?php echo SYS_JS_URL; ?>vendor/jquery.kinetic.js" type="text/javascript"></script>
	
		<!-- Smooth Div Scroll 1.3 minified-->
		<script src="<?php echo SYS_JS_URL; ?>vendor/jquery.smoothdivscroll-1.3-min.js" type="text/javascript"></script>
	
	
		<!-- Plugin initialization -->
		<script type="text/javascript">
			// Initialize the plugin with no custom options
			$(document).ready(function () {
				// None of the options are set
				$("div#makeMeScrollable").smoothDivScroll({
					autoScrollingMode: ""
				});
			});
		</script>
	<?php
		return true;
		
	} // end shdw_footer