<?php
# ===================================================
# Load database info and local development parameters
# ===================================================

# Load Local dev settings if local-config.php exists
if ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) {
	require( dirname( __FILE__ ) . '/local-config.php' );
} else {
	
	# Your database name
	define( 'DB_NAME', 'shadow' );
	
	# Your database username
	define( 'DB_USER', 'master' );
	
	# Your database user password
	define( 'DB_PASSWORD', 'shadowGallery' );
	
	# Your databases's connection type
	define( 'DB_HOST', 'localhost' ); // Probably 'localhost'
}

# ========================
# Custom Content Directory
# ========================
$root_dir = str_replace('\\', '/', dirname( __FILE__ ));
define( 'ROOT_DIR', $root_dir );
define( 'ROOT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/new_shadow' );


# ========================
# Custom Content Directory
# ========================
define( 'SW_CONTENT_DIR', dirname( __FILE__ ) . '/content' );
define( 'SW_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/content' );

# ================================================
# You almost certainly do not want to change these
# ================================================
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

# ==============================================================
# Table prefix
# Change this if you have multiple installs in the same database
# ==============================================================
$table_prefix  = 'sw_';

# ================================
# Language
# Leave blank for American English
# ================================
define( 'SWLANG', '' );


# Call Errors Array
$errors = array();

# Check if database constants have been set for local-config
if ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) {
	
	# Check if database name is set
	if ( DB_NAME == "" ) {
		$errors[] = 'Please enter your database name in"' . dirname( __FILE__ ) . '/local-config.php".';
	} // end if
	
	# Check if database user is set
	if ( DB_USER == "" ) {
		$errors[] = 'Please enter your database username in"' . dirname( __FILE__ ) . '/local-config.php".';
	} // end if
	
	# Check if database name is set
	if ( DB_PASSWORD == "" ) {
		$errors[] = 'Please enter your database user password in"' . dirname( __FILE__ ) . '/local-config.php".';
	} // end if
	
	# Check if database name is set
	if ( DB_HOST == "" ) {
		$errors[] = 'Please enter your database connection type in"' . dirname( __FILE__ ) . '/local-config.php". Most likely "localhost".';
	} // end if
	
} // end if
else {
	
	# Check if database name is set
	if ( DB_NAME == "" ) {
		$errors[] = 'Please enter your database name in"' . dirname( __FILE__ ) . '/sw-config.php".';
	} // end if
	
	# Check if database user is set
	if ( DB_USER == "" ) {
		$errors[] = 'Please enter your database username in"' . dirname( __FILE__ ) . '/sw-config.php".';
	} // end if
	
	# Check if database name is set
	if ( DB_PASSWORD == "" ) {
		$errors[] = 'Please enter your database user password in"' . dirname( __FILE__ ) . '/sw-config.php".';
	} // end if
	
	# Check if database name is set
	if ( DB_HOST == "" ) {
		$errors[] = 'Please enter your database connection type in"' . dirname( __FILE__ ) . '/sw-config.php". Most likely "localhost".';
	} // end if
	
} // end else

# Show errors
if ( !empty($errors)) {
	echo '<p id="err_msg">The following error(s) occured:<br/>';
	
	# Initialize errors
	foreach ($errors as $msg) {
		echo " - $msg<br/>";
	} // end foreach
	echo 'Please try again.</p>';
	exit;
} // end if
else {
	
	# Connect to database
	$db = mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
	OR die ( mysqli_connect_error() );
	mysqli_set_charset( $db, DB_CHARSET );
	
} // end else



