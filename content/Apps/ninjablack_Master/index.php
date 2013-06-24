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




<h2>Handling Exceptions</h2>

<?php
try
{
	# Create the object:
	$fp = new WriteToFile( APP_URI . 'docs/data.txt' );
	
	# Write the data
	$fp->write( 'This is a line of date' );
	
	# Close the file
	$fp->close();
	
	# Delete the object:
	unset( $fp );
	
	# If we go this far, then everything worked.
	echo '<p>The data has been written.</p>';
	
} // end try

catch( Exception $e )
{
	echo '<p>The process could not be completed because the script: ' . $e->getMessage() . '</p>';
	
} // end catch( Exception $e )

echo '<p>This is the end of the script</p>'

?>


<?php 
# includes footer.php
app_footer();

