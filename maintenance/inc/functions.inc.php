<?php // functions

function maintenance_mode()
{
	if( MAINTENANCE == 1 ) : ?>
	
    	<div data-alert class="alert-box warning mbn" style="background-color: #d9edf7 !important; color: #3a87ad !important">
        	<?php echo MAINT_MSG; ?>
        </div><!-- end data-alert -->
		
	<?php endif;
	
	return true;
	
} // end maintenance_mode()

function environment_notice()
{
	if( ENVIRONMENT != 'production' )
	{
		?>	
		
		<div data-alert class="alert-box warning mbn" style="background-color: #d9edf7 !important; color: #3a87ad !important">
		  <?php if( ENVIRONMENT == 'development' ) : ?>
			  
              <div class="relative">
              	<div class="left side w60">
                	<h1 style="font-size:24px; color: #3a87ad !important"">DEV</h1>
                </div><!-- end left side w50 -->
                <div class="ls60">
                	<?php echo DEVELOPMENT_NOTICE; ?>
                </div><!-- end ls50 -->
              </div><!-- end relative -->
		  <?php endif; ?>
          <?php if( ENVIRONMENT == 'stage' ) : ?>
			  
              <div class="relative">
              	<div class="left side w60">
                	<h1 style="font-size:24px; color: #3a87ad !important"">STG</h1>
                </div><!-- end left side w50 -->
                <div class="ls60">
                	<?php echo STAGE_NOTICE; ?>
                </div><!-- end ls50 -->
              </div><!-- end relative -->
		  <?php endif; ?>
          <?php if( ENVIRONMENT == 'qa' ) : ?>
			  
              <div class="relative">
              	<div class="left side w60">
                	<h1 style="font-size:24px; color: #3a87ad !important"">QA</h1>
                </div><!-- end left side w50 -->
                <div class="ls60">
                	<?php echo QA_NOTICE; ?>
                </div><!-- end ls50 -->
              </div><!-- end relative -->
		  <?php endif; ?>
		  
		</div>
		
		<?php
	}
	
	return true;

}


function auto_copyright($year = 'auto'){
   if(intval($year) == 'auto'){ $year = date('Y'); }
   if(intval($year) == date('Y')){ echo intval($year); } 
   if(intval($year) < date('Y')){ echo intval($year) . ' - ' . date('Y'); }
   if(intval($year) > date('Y')){ echo date('Y'); }
}

# Product Detail Nav
function product_detail_nav( $product )
{
	?>
    <nav>
        <ul id="nav">
            <li><a href="#section-1">Drug Facts</a></li>
            <li><a href="#section-2">What makes <?php echo $product; ?> &ldquo; The Smart Medicine&rdquo;?</a></li>
            <li><a href="#section-3">What's in <?php echo $product; ?>?</a></li>
            <li><a href="#section-4">How do you use it?</a></li>
            <li><a href="#section-5">How fast does it work?</a></li>
            <li><a href="#section-6">Can it be taken with other medications?</a></li>
            <li><a href="#section-7">Is it safe?</a></li>
            <li><a href="#section-8">How does it taste?</a></li>
        </ul>
    </nav>
    
    <?php return true;
} 


# Drug Facts
function drug_facts()
{
	?> 
	
    <h3>Other information</h3>
    <p>
        Tamper resistant for your protection. Use only if safety seal is intact. 
    </p>
    <hr/>
    <h3>Inactive ingredients</h3>
    <p>
        Citric acid, potassium sorbate, purified water.
    </p>
    
    <?php return true;
}

# Other Product Information
function other_product_information( $product_name )
{
	?> 
	
    
    
    
    <?php return true;
}