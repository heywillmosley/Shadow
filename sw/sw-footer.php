</div><!-- end sw_wrapper -->

<!-- Footer Javascripts -->

<!-- Load Zepto library or Jquery for fall back -->
<script>
	document.write('<script src=' +
	('__proto__' in {} ? 'sw/js/vendor/zepto' : 'sw/js/vendor/jquery') +
	'.js><\/script>')
</script>

<script src="sw/js/vendor/foundation/foundation.min.js"></script>
<script src="sw/js/vendor/vanilla_masonry.js"></script>
<script src="sw/js/vendor/holder.js"></script>
<script src="sw/js/vendor/html5.js"></script>

<!-- required for Foundation js to work -->
<script>
	$(document).foundation();
</script>