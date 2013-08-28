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

<?php require SYS_INC_URI . 'pilot/header.inc.php'; ?>

<div class="mxw700 pam">
    <?php
    
    $new_page_errors = array();
    # Check for form submission
    if( $_SERVER['REQUEST_METHOD'] == 'POST' )
    {
        # New Page Title validation and santization
        if( !empty( $_POST['new_page_add_title'] ) )
        {
            $t = _cleanQuery( $_POST['new_page_add_title'] );
            
        } else $new_page_errors['new_page_add_title'] = 'Please input a title.';
		
		# New Page Title validation and santization
        if( !empty( $_POST['new_page_add_slug'] ) )
        {
			if( vUrl( SITE_URL. $_POST['new_page_add_slug'] ) )
			{
				$s = _cleanQuery( $_POST['new_page_add_slug'] );
				
			} else $new_page_errors['new_page_add_slug'] = 'Please enter a vailid URL';
			  
        } else $new_page_errors['new_page_add_slug'] = 'Please enter the slug users will visit when accessing this page..';
		
		$c = _cleanQuery( $_POST['new_page_add_content'] );
		
		if( $_POST['new_page_add_viewfile'] == '' )
			$v = NULL;
		else
			$v = _cleanQuery( $_POST['new_page_add_viewfile'] );
    
        
        
        if ( empty( $new_page_errors ) ) 
        { // OK to proceed!
            
			global $DBH;
               
			   
			try 
				{  
					$data = array( $s );
					$stmt = "SELECT slug from shdw_pages WHERE slug = '$s'";
					$STH = $DBH->prepare( $stmt );  
					$STH->execute( $data ); 
					
					if( $STH->rowCount() > 0 )
						$new_page_errors['new_page_add_slug'] = 'A page already exists with the url you supplied. Please choose a new URL.'; 

					else
					{
						/**
						 * Insert into a new row 
						 */
							try 
							{  
								$data = array( $t, $s, $c, $v );
								$stmt = "INSERT INTO shdw_pages ( title, slug, content, viewFile, dateAdded )
														VALUES ( ?, ?, ?, ?, NOW() )";
								$STH = $DBH->prepare( $stmt );  
								$STH->execute( $data );  
								
							}  
							catch(PDOException $e) 
							{  
								exceptionHandler( $e ); 
							} 
						
					}
				}  
				catch(PDOException $e) 
				{  
					exceptionHandler( $e ); 
				} 
 
        } // end if (empty($new_page_errors)) { // OK to proceed!
             
     } // end if( empty( $new_page_errors ) )
 
# Create an empty error array if it doesn't already exist:
if (!isset($new_page_errors)) $new_page_errors = array();
 ?>
    <?php if ( empty( $new_page_errors ) && $_SERVER['REQUEST_METHOD'] == 'POST'  ) : ?>
    	<div class="alert alert-success">
        	Awesome. '<?php echo $t; ?>' has been created! <a class="alert-link" href="<?php echo SITE_URL.$s; ?>">View it now</a>.
        </div><!-- end alert alert-success -->
    <?php endif; ?>
    <div class="shdw-new-page-form">
        <form class="custom" action="#" method="POST">
        	<h1><?php get_page_title(); ?></h1>
            <div class="row">
                <?php create_form_input( 'new_page_add_title', 'text', $new_page_errors, 'Page Title' ); ?>
            </div><!-- end row -->
            <div class="row collapes">
                <div class="small-3 large-3 columns">
                    <span class="prefix"><?php echo SITE_URL; ?></span>
                </div>
                <div class="small-9 large-9 columns">
                    <?php create_form_input( 'new_page_add_slug', 'text', $new_page_errors, 'contact' ); ?>
                </div>
            </div><!-- end row -->
            <div class="row">
            	<?php create_form_input( 'new_page_add_content', 'textarea', $new_page_errors, 'Content', 'mnh300' ); ?>
            </div><!-- end row -->
            <div class="row">
            	<label>View File <span data-tooltip data-options="disable-for-touch:true" class="has-tip" title="Tooltips are awesome, you should totally use them!">?</span> <small>optional</small></label>
                <?php create_form_input( 'new_page_add_viewfile', 'text', $new_page_errors, 'contact.inc.php' ); ?>
            </div><!-- end row -->
            <input name="<?php echo FORM_SUBMIT; ?>" type="submit" class="btn btn-primary" value="Publish" />
        </form>
    </div><!-- end shdw-login-form -->
    
</div><!-- end mCenter mxw700 -->


<?php require SYS_INC_URI . 'pilot/footer.inc.php'; ?>