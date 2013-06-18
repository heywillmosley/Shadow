<?php

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


// Sample Function B @since superamazing 1.1.4
function responsive_page($type) { ?>
	
	<?php if ($type == "320") : ?>
    
    <?php elseif ($type == "480") : ?>
    
    <?php elseif ($type == "600") : ?>
    
    <?php elseif ($type == "768") : ?>
    
    <?php elseif ($type == "992") : ?>
    
    <?php elseif ($type == "1382") : ?>
    	
   	<?php elseif ($type == "rs") : ?>
    	<!-- actionbar -->
        <div 
            data-r320='<?php page("320"); ?>'
            data-r320='<?php page("480"); ?>'
            data-r320='<?php page("600"); ?>'
            data-r320='<?php page("768"); ?>'
            data-r320='<?php page("992"); ?>'
            data-r320='<?php page("1382"); ?>'
        > 
            
        </div><!-- end actionbar -->
    <?php else : endif; ?>
		
	<?php return true;
}

