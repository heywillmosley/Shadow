<?php

# Splits Url into segments
function segment($segment)
{
	$page = array
	(
		'home' => array // url
		(
			'Home', // Page Title
			SITEURL . 'home', // url
			APPPATH . 'index.php' // File
		)
	);
	
	
	# Remove the ROOT_NAME and following forward slash from URL
	$url = str_replace( ROOT_NAME  , "", $_SERVER['REQUEST_PATH']);
	$url = deleteFirstChar( $url );
	
	if( array_key_exists( $url, $page ) ) 
	{
		define( 'PAGE_TITLE', $page[$url][0] );
		define( 'PAGE_URL', $page[$url][1] );
		define( 'PAGE_FILE', $page[$url][2] );
		
		
		# Divide URL into segments by each forward slash
		$url = explode('/', $url);
	
		# Check if segment exists
		if( isset($url[$segment]) )
		
		# Returns segment if it exists
		return $url[$segment];
	
	}
	
	# If it doesn't exists, return false
	else
	{
		define( 'PAGE', false );
		return false;
	
	}
	
	
} // end segment
?>