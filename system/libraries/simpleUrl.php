<?php

# Splits Url into segments
function segment($segment)
{
	# Remove the ROOTNAME and following forward slash from URL
	$url = str_replace( ROOTNAME . "/", "", $_SERVER['REQUEST_URI']);
	
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