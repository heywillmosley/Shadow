<?php # Functions

# Constants

# Define framework name
define ( "FW_NAME", "Shadow" );

# Load Function @since 1.1.5
function load($page = 'login.php') {
	$url = 'http://' .$_SERVER['HTTP_HOST'] . dirname( $_SERVER['PHP_SELF'] );
	$url = rtrim( $url, '/\\');
	$url .= '/' . $page;	
	
	header("Location: $url");
	exit();
}

# Form Validation



