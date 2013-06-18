<?php
/*
This is a sample local-config.php file
In it, you *must* include the four main database defines

You may include other settings here that you only want enabled on your local development checkouts
*/

define( 'DB_NAME', 'shadow' );
define( 'DB_USER', 'master' );
define( 'DB_PASSWORD', 'shadowgallery' );
define( 'DB_HOST', 'localhost' ); // Probably 'localhost'

// ========================
// Custom Content Directory
// ========================
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/shadow/content' );