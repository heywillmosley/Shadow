<?php app_header(); ?>

<?php foreach( the_product() as $id ) : ?>
	<div class="specs mxw700">
		<div class="specs-wrapper">
			<div class="specs-banner"></div>
			<div class="specs-info">
				<div class="specs-cover-container">
					<img class="specs-cover-image banner" src="<?php get_product_image( $id ); ?>" alt="" />
				</div><!-- end specs-cover-container -->
				<div class="specs-info-container">
					<div>
						<div class="specs-document-title"><?php get_product_name( $id ); ?></div>
						<div class="specs-document-subtitle primary">At <?php get_product_seller( $id ); ?> - </div>
						<div class="specs-document-subtitle">We need <?php get_product_stock( $id ); ?> for Eyden.</div>
					</div>
					<div class="specs-actions">
						<a href="#" class="btn-info btn">Buy for Eyden - $<?php get_product_price( $id ); ?></a>
					</div><!-- end specs-action -->
                    <div class="specs-document-subtitle">You will be given the option to buy online or view/print out information to purchase at your local <?php get_product_seller( $id ); ?>.</div>
                    <div class="alert alert-info">
                    	<?php 
						$cdate = strtotime('9/28/2013');
						$today = time();
						$difference = $cdate - $today;
						if ($difference < 0) { $difference = 0; }
						echo "There are <strong>". floor($difference/60/60/24)."</strong> days remaining until our baby shower.";
						?>
                    </div><!-- end alert alert-info -->
				</div><!-- end specs-info-container -->
			</div><!-- end specs-info -->
			<div class="specs-section description">
				<div class="specs-section-heading">Description</div>
				<div class="specs-section-body">
					<?php get_product_description( $id ); ?>
				</div><!-- end specs-section-body -->
			</div><!-- end specs-section description -->
		</div><!-- end specs-wrapper -->
		<div class="specs-section-divider"></div>
		<div class="specs-wrapper">
			...
		</div><!-- end specs-wrapper -->
	</div><!-- end specs -->
<?php endforeach; ?> 

<?php app_footer(); ?>