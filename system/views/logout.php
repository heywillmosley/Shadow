<?php # Logout page

# Include application header
app_header();

?>

<div class="row">
	<div class="small-12">
    	<div data-alert class="alert-box success">
          <!-- Your content goes here -->
          You have been successfully logged out.
        </div>
        <?php loginForm(); ?>
    </div><!-- end small-12 -->
</div><!-- end row -->

<?php
# Include application footer
app_footer();