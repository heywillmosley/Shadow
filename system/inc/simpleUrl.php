<?php

# Splits Url into segments
function segment($segment)
{
	# Remove the ROOT_NAME and following forward slash from URL
	$url = str_replace( ROOT_NAME . "/", "", $_SERVER['REQUEST_PATH']);
	
	# Divide URL into segments by each forward slash
	$url = explode('/', $url);

	# Check if segment exists
	if( isset($url[$segment]) )
		
		# Returns segment if it exists
		return $url[$segment];
	
	# If it doesn't exists, return false
	else
		return false;
	
} // end segment
?>