<?php # Application Header ?>

<div class="footer row">
	<div class="left">&copy; <?php auto_copyright(); echo ' ' . SITE_NAME; ?></div>
    <div class="right">
    	<a href="#" class="txt_wht">&uarr; Back to the Top</a>
    </div>
</div>
</div><!-- end wrapper -->

<!-- Load Javascripts -->
<script src="<?php echo APP_JS_URL; ?>application.js"></script>

<script src="<?php echo BASE_JS_URL; ?>shadow.js"></script>
<script src="<?php echo BASE_JS_URL; ?>vendor/respond.min.js"></script>

<script>
  $(document).foundation();
</script>

</body>
