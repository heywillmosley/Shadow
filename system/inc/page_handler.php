<?php

$page = array
(
	'home' => array // slug
	(
		'Home', // Page Title
		SITEURL . '', // url
		APPPATH . 'index.php' // File
	),
	'home' => array // slug
	(
		'Home', // Page Title
		SITEURL . 'home', // url
		APPPATH . 'index.php' // File
	),
	'about' => array // slug
	(
		'About', // Page Title
		SITEURL . 'about', // url
		APP_PAGE_PATH . 'about.php' // File
	),
	'contact' => array // slug
	(
		'Contact', // Page Title
		SITEURL . 'contact', // url
		APP_PAGE_PATH . 'contact.php' // File
	),
	'register' => array // slug
	(
		'Register', // Page Title
		SITEURL . 'register', // url
		APP_PAGE_PATH . 'register.php' // File
	),
	'symptom_checker' => array // slug
	(
		'Symptom Checker', // Page Title
		SITEURL . 'symptom_checker', // url
		APP_PAGE_PATH . 'symptom_checker.php' // File
	),
	'store_locator' => array // slug
	(
		'Store Locator', // Page Title
		SITEURL . 'store_locator', // url
		APP_PAGE_PATH . 'store_locator.php' // File
	),
	'newsroom' => array // slug
	(
		'Newsroom', // Page Title
		SITEURL . 'newsroom', // url
		APP_PAGE_PATH . 'newsroom.php' // File
	)
);




# Remove the ROOT_NAME and following forward slash from URL
$url = str_replace( ROOT_NAME  , "", $_SERVER['REQUEST_PATH']);
$url = deleteFirstChar( $url );

# If Page array is empty, set as home
if( $url == "" ) $url = 'home';
if( $url == "/" ) $url = 'home';

if( array_key_exists( $url, $page ) ) 
{
	# Check if Page Title is home and change to site name
	if( $page[$url][0] == 'Home' )
		define( 'PAGE_TITLE', SITE_NAME );
	else
		define( 'PAGE_TITLE', $page[$url][0] . ' | ' . SITE_NAME );
		
	define( 'PAGE_URL', $page[$url][1] );
	define( 'PAGE_FILE', $page[$url][2] );
	
	//include PAGE_FILE;
	if( file_exists( PAGE_FILE ))
		include PAGE_FILE;
	else
		page404();
	

}

# If it doesn't exists, return false
else
{
	page404();

}