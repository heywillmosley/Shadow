<?php
	# Root URL Function @since 1.1.5
	function root_url () {
		$url = 'http://' .$_SERVER['HTTP_HOST'] . dirname( $_SERVER['PHP_SELF'] );
		$url = rtrim( $url, '/\\');
		return $url;	
	} // end root_url
	
	# Root Directory Function @since 1.1.5
	function root_dir () {
		$dir =  $_SERVER['DOCUMENT_ROOT'] . "/new_shadow";
		return $dir;	
	} // end root_dir
	
	# Check if Database is setup

	# Load Database Configuration
	require_once( root_dir()  . '/sw-config.php' );
	
	# Include Functions
	include ( "functions.php" );
	?>
	
	<!-- Load Stylesheets -->
	<link rel="stylesheet" href="<?php echo ROOT_URL; ?>/sw/css/all.css" type="text/css" media="screen" />
	
	<!-- Load Google Fonts -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Federo|Titillium+Web:300" type="text/css" media="screen" />
	
	<!-- Load Javascripts -->
	<script src="<?php echo ROOT_URL; ?>/sw/js/vendor/jquery.js"></script>
	<script src="<?php echo ROOT_URL; ?>/sw/js/vendor/custom.modernizr.js"></script>
	<script src="<?php echo ROOT_URL; ?>/sw/js/vendor/response.js"></script>
	
	<div class="sw_wrapper pas">
		<header class="shadow-header">
			<div class="row">
				<div class="twelve columns">
					<h1>Shadow</h1>
				</div><!-- end twelve columns -->
			</div>
		</header><!-- end shadow-header -->
	
	
	
	<?php
	
	# Show database error if it can't connect
	if ( !mysqli_ping( $db ) ) {
		echo mysqli_error( $db );
		mysqli_close( $db );
		exit;
	} // end if 
	
	# Use database
	$q = 'USE ' . DB_NAME;
	$r = mysqli_query( $db, $q);
	
	# Check if Shadow is installed on database
	$q = 'SELECT * FROM sw_options';
	$r = mysqli_query( $db, $q);
	
	if ( $r ) {
		
		# Load login-tools
		 load("sw/sw-includes/login_tools.php");
		 
	} // end if
	elseif ( $page_title == "Shadow Install" ) {
	} // end elseif
	else {
		# Require installation
		 load("sw/sw-includes/install.php");
		
	} // end else	