<?php

// Enqueue scripts and styles -------------------------------
function _s_scripts() {
	// Styles
	wp_enqueue_style( "ninja_style", get_stylesheet_directory_uri() . "/style.css" );
	wp_enqueue_style( "webfont", "http://fonts.googleapis.com/css?family=Federo|Titillium+Web:300" );
	
	// Javascripts
	wp_enqueue_script( "modernizr" ,get_stylesheet_directory_uri() . "/js/vendor/custom.modernizr.js",false ,"v2.6.2" ,false );
	wp_enqueue_script( "foundation" ,get_stylesheet_directory_uri() . "/js/vendor/foundation/foundation.min.js", false ,"v4.0.3" ,true );
	wp_enqueue_script( "response" ,get_stylesheet_directory_uri() . "/js/vendor/response.js", false ,"v0.7.5" ,true );
	 wp_enqueue_script( "holder" ,get_template_directory_uri() . "/js/vendor/holder.js", false ,"v1.7" ,true );
	wp_enqueue_script( "html5" ,get_template_directory_uri() . "/js/vendor/html5.js",false ,"v3.6" ,true );
	 wp_enqueue_script( "vanilla masonry" ,get_template_directory_uri() . "/js/vendor/vanilla_masonry.js",false ,"v3.6" ,true );

}
add_action( 'wp_enqueue_scripts', '_s_scripts' );

/**
 * Implement the Custom Header feature
 */
//require( get_template_directory() . '/inc/custom-header.php' );





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




// ---- Site Info @since 1.1.3
function site_info($type) {
	// Site Information
	global $active_theme; $active_theme = "ninja_black_111"; // Current Child Theme
	global $active_parent_theme; $active_parent_theme = "master_ninja_113"; // Current Parent Theme
	
	global $site_name; $site_name = "Ninja Black"; // Site Name
	global $site_tagline; $site_tagline = "Child Theme to Master Ninja"; // Site Tagline
	global $site_short_description; $site_short_description = ""; // Site Short Description
	global $site_description; $site_description = ""; // Site Description
	global $admin_email; $admin_email = "will@livesuperamazing.com"; // Admin Email
	
	global $site_url; $site_url = "http://localhost/superamazing"; // Site URL
	global $site_shadow_url; $site_shadow_url = "http://localhost/superamzing/wp"; // Shadow URL
	
	global $style_dir; $style_dir = $site_shadow_url . "/wp-content/themes/" . $active_theme; // Stylesheet Directory
	global $style_url; $style_url = $site_shadow_url . "/wp-content/themes/" . $active_theme . "style.css"; // Stylesheet URL
	global $parent_dir; $parent_dir = $site_shadow_url . "/wp-content/themes/" . $active_parent_theme; // Parent Directory
	global $parent_style_url; $parent_style_url = $site_shadow_url . "/wp-content/themes/" . $active_parent_theme . "style.css"; // Parent Stylesheet URL
	
	global $site_meta; $site_meta = "life, better, connect, improve relationships, improve relations, things to do, trips, plans, asheville, cheap, free, inexpensive, social network, fix, fun, enjoy, sex, location, map, group, friends, family, girlfriend, boyfriend, parent, sibling, mom, dad, connecting, connection, connected, find, search, find relative, missing person, geneology, ancestory, match, find match, couple, date, dating, real, real life, memories, vacation, visit, happiness, calm, stress, problems, design, shadow, shadow framework, framework, streamline web design, responsive, mobile, tablet, easy, useful, better, best, love, care, special, reminder, task management, task manager, to do, todo, today, tomorrow, calendar, new releases, movies, music, calculator, notebook, journal, diary, matchmaking"; // Site Meta

	
	if ($type == "name") { $site_name; }
	elseif ($type == "tagline") { echo $site_tagline; }
	elseif ($type == "short_des") { echo $site_short_description; }
	elseif ($type == "description") { echo $site_description; }
	elseif ($type == "admin_email") { echo $admin_email; }
	
	elseif ($type == "url") { echo $site_url; }
	elseif ($type == "shadow url") { echo $site_shadow_url; }
	
	elseif ($type == "active_theme") { echo  $active_theme; }
	elseif ($type == "active_parent_theme") { echo $active_parent_theme; }
	elseif ($type == "style_dir") { echo $style_dir; }
	elseif ($type == "style_url") { echo $style_url; }
	elseif ($type == "parent_dir") { echo $parent_dir; }
	elseif ($type == "parent_style_url") { echo $parent_style_url; }
	
	elseif ($type == "meta") { echo $site_tagline; }
    else {} 	
    return true; 
}

// Sample Function @since superamazing 1.1.4
function sample_function() { ?>
	
	<?php return true;
}

// Sample Function B @since superamazing 1.1.4
function sample_function_b($type) { ?>

	<?php if ($type == "800+") : ?>
    
    <?php elseif ($type == "400+") : ?>
    	
   	<?php elseif ($type == "rs") : ?>
    	<!-- actionbar -->
        <div 
            data-r401='<?php sample_function_b("400+"); ?>' 
            data-r801='<?php sample_function_b("800+"); ?>'
        > 
            
        </div><!-- end actionbar -->
    <?php else : endif; ?>
		
	<?php return true;
}


// Sample Responsive Page @since Ninja Black 1.1.1
function sample_responsive_page($type) { ?>
	
    <?php if ($type == "480") : ?>
    	<?php include_once "homepage/480.php"; ?>
    <?php elseif ($type == "600") : ?>
    <?php include_once "homepage/600.php"; ?>
    <?php elseif ($type == "768") : ?>
    	<?php include_once "homepage/768.php"; ?>
    <?php elseif ($type == "992") : ?>
    	<?php include_once "homepage/992.php"; ?>
    <?php elseif ($type == "1382") : ?>
    	<?php include_once "homepage/1382.php"; ?>
   	<?php elseif ($type == "rs") : ?>
    	<!-- actionbar -->
        <div 
            data-r480='<?php sample_responsive_page("480"); ?>'
            data-r600='<?php sample_responsive_page("600"); ?>'
            data-r768='<?php sample_responsive_page("768"); ?>'
            data-r992='<?php sample_responsive_page("992"); ?>'
            data-r1382='<?php sample_responsive_page("1382"); ?>'
        > 
            <?php include_once "homepage/320.php"; ?>
        </div><!-- end actionbar -->
    <?php else : endif; ?>
		
	<?php return true;
}


// Responsive Homepage @since Ninja Black 1.1.1
function responsive_homepage($type) { ?>
	
    <?php if ($type == "480") : ?>
    	<?php include_once "homepage/480.php"; ?>
    <?php elseif ($type == "600") : ?>
    <?php include_once "homepage/600.php"; ?>
    <?php elseif ($type == "768") : ?>
    	<?php include_once "homepage/768.php"; ?>
    <?php elseif ($type == "992") : ?>
    	<?php include_once "homepage/992.php"; ?>
    <?php elseif ($type == "1382") : ?>
    	<?php include_once "homepage/1382.php"; ?>
   	<?php elseif ($type == "rs") : ?>
    	<!-- actionbar -->
        <div 
            data-r480='<?php responsive_homepage("480"); ?>'
            data-r600='<?php responsive_homepage("600"); ?>'
            data-r768='<?php responsive_homepage("768"); ?>'
            data-r992='<?php responsive_homepage("992"); ?>'
            data-r1382='<?php responsive_homepage("1382"); ?>'
        > 
            <?php include_once "homepage/320.php"; ?>
        </div><!-- end actionbar -->
    <?php else : endif; ?>
		
	<?php return true;
}
