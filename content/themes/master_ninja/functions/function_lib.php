<?php

// Master Ninja Head Function @since masterninja 1.1.2
function mn_head () {
	require_once (get_template_directory() . "/header.php");
	return true;	
}

// Master Ninja Foot Function @since masterninja 1.1.2
function mn_foot () {
	require_once (get_template_directory() . "/footer.php");
	return true;	
}

// ---- Sanitize String @since masterninja 1.1.2
// Sanitize Form Varibles
function sanitizeString($var) {
	$var = stripslashes($var); // removes slashes
	$var = htmlentities($var); // remove HTML from string
	$var = strip_tags($var); // strip HTML completely
	return $var; }

// ---- Sanitize MYSQL @since masterninja 1.1.2
// Sanitize MYSQL input
function sanitizeMySQL($var) {
	$var = mysql_real_escape_string($var); // sanitize MySQL
	$var = santizeString($var);
	return $var; }
	
// Random String @since masterninja 1.1.2
function genRandomString() {
    $length = 5;
    $characters = "0123456789abcdefghijklmnopqrstuvwxyz";
        
    for ($p = 0; $p < $length; $p++) {
        $string .= $characters[rand(0, strlen($characters))];
    }
    return $string;
}