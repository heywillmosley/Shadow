<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
    <title></title>
    <?php 
	function get_template_directory_uri() {
		echo "content/themes/master_ninja_112";
		return true;
	}
	
	function get_stylesheet_directory_uri() {
		echo "content/themes/superamazing_ninja_114";
		return true;
	}
	?>
    <LINK REL=StyleSheet href="<?php echo get_template_directory_uri(); ?>/style.css" TYPE="text/css" MEDIA=screen>
    
<script src="<?php echo get_template_directory_uri(); ?>/js/masterninja_head.js"></script>

<!-- Google Web Fonts -->
<!-- comment link below to disable google fonts, also change strong, .strong weight in master.css from 400 to 700. -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,300,400,' rel='stylesheet' type='text/css'>

</head>

<body data-responsejs='{
    "create": [
    { "breakpoints": [0,301,320,401,481,641,961,801,1000,1025,1281], "mode": "src", "prefix": "src" }, 
    { "breakpoints": [0,301,320,321,401,481,521,601,641,661,714,961,801,821,892,1000,1001,1025,1281], "mode": "markup", "prefix": "r" }
    ]}'
>

    <div class="maintenance">
       <h1>Super Amazing is down for scheduled maintenance.</h1>
    </div><!-- end maintenance -->
</body>
</html>