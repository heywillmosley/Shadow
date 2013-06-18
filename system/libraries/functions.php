<?php

# Load Function @since 1.1.5
function load($page = 'login') {
	$url = ROOTURL;
	$url = rtrim( $url, '/\\');
	$url .= '/' . $page;	
	
	header("Location: $url");
	exit();
}

# Load Path Function @since 1.1.5
function load_path($page = 'login') {
	$path = ROOTPATH;
	$path = rtrim( $url, '/\\');
	$path .= '/' . $page;	
	
	header("Location: $path");
	exit();
}

# -------------------------------
# FORM VALIDATION FUNCTIONS
# -------------------------------

# Validate Email @since 1.1.5
function vEmail($email)
{
  return filter_var($email, FILTER_VALIDATE_EMAIL);
}

# Sanitize Email @since 1.1.5
function sEmail($url)
{
  return filter_var($url, FILTER_SANITIZE_EMAIL);
}

# Validate Email Exist @since 1.1.5
function vName($name) 
{
      $name = preg_replace('/[\s]+/is', ' ', $name);
      $name = trim($name);
	  $name = ucfirst($name);
      return preg_match('/^[a-z\s]+$/i', $name);            
}

# Validate Numbers Only @since 1.1.5
function vNumber($value)
{
	#return filter_var($value, FILTER_VALIDATE_FLOAT); // float
	return filter_var($value, FILTER_VALIDATE_INT); # int
}

# Sanitize Numbers Only @since 1.1.5
function sNumber($value)
{
	#return filter_var($value, FILTER_SANITIZE_NUMBER_FLOAT); // float
	return filter_var($value, FILTER_SANITIZE_NUMBER_INT); # int
}

# Validate Alphanumeric Characters @since 1.1.5
function vAlphanumeric($string)
{
        return ctype_alnum ($string);
}

# Sanatize Alphanumeric Characters @since 1.1.5
function sAlphanumeric($string)
{
        return preg_replace('/[^a-zA-Z0-9]/', '', $string);
}

# Validate URL Exists @since 1.1.5
function url_exist($url)
{

}

# Validate URL Format @since 1.1.5
function vUrl($url)
{
  return filter_var($url, FILTER_VALIDATE_URL);
}

# Sanatize URL @since 1.1.5
function sUrl($url)
{
  return filter_var($url, FILTER_SANITIZE_URL);
}

# Validate Image Exists @since 1.1.5
function image_exist($url) 
{
	if(@file_get_contents($url,0,NULL,0,1)){return 1;}else{ return 0;}
}

# Validate IP Address @since 1.1.5
function vIP($ip)
{
  return filter_var($ip, FILTER_VALIDATE_IP);
}

# Validate Proxy @since 1.1.5
function fnValidateProxy(){
        if ($_SERVER['HTTP_X_FORWARDED_FOR']
           || $_SERVER['HTTP_X_FORWARDED']
           || $_SERVER['HTTP_FORWARDED_FOR']
           || $_SERVER['HTTP_VIA']
           || in_array($_SERVER['REMOTE_PORT'], array(8080,80,6588,8000,3128,553,554))
           || @fsockopen($_SERVER['REMOTE_ADDR'], 80, $errno, $errstr, 30))
        {
                exit('Proxy detected');
        }
}

# Validate Username @since 1.1.5
function vUsername($username)
{
        #alphabet, digit, @, _ and . are allow. Minimum 4 character. Maximum 50 characters (email address may be more)
        return preg_match('/^[a-zA-Z\d_@.]{4,50}$/i', $username);
}


# Validate Strong Password @since 1.1.5
function vPassword($password){
        #must contain 8 characters, 1 uppercase, 1 lowercase and 1 number
        return preg_match('/^(?=^.{8,}$)((?=.*[A-Za-z0-9])(?=.*[A-Z])(?=.*[a-z]))^.*$/', $password);
}

function vPassword2() {
	# Check password strength
	$p = $p1;
	
	if( strlen($p) < 8 ) {
		$errors[] = "Password too short! 
	";
	}
	
	if( strlen($p) > 20 ) {
		$errors[] = "Password too long! 
	";
	}
	
	if( !preg_match("#[0-9]+#", $p) ) {
		$errors[] = "Password must include at least one number! 
	";
	}
	
	
	if( !preg_match("#[a-z]+#", $p) ) {
		$errors[] = "Password must include at least one letter! 
	";
	}
	
	
	if( !preg_match("#[A-Z]+#", $p) ) {
		$errors[] = "Password must include at least one CAPS! 
	";
	}
	
	/* if( !preg_match("#\W+#", $p) ) {
		$errors[] = "Password must include at least one symbol! 
	";
	} */	
}

# Validate US Phone Number @since 1.1.5
function vUSPhone($phoneNo)
{
        return preg_match('/\(?\d{3}\)?[-\s.]?\d{3}[-\s.]\d{4}/x', $phoneNo);
}

# Validate US Social Security Numbers @since 1.1.5
function vUS_SSC($ssb)
{
        #eg. 531-63-5334
        return preg_match('/^[\d]{3}-[\d]{2}-[\d]{4}$/',$ssn);
}

# Validate Credit Card @since 1.1.5
function vCC($cc)
{
        #eg. 718486746312031
        return preg_match('/^(?:4[0-9]{12}(?:[0-9]{3})?|5[1-5][0-9]{14}|6011[0-9]{12}|3(?:0[0-5]|[68][0-9])[0-9]{11}|3[47][0-9]{13})$/', $cc);
}

# Validate Date @since 1.1.5
function vDate($date){
        #2009/12/11
        #2009-12-11
        #2009.12.11
        #09.12.11
        return preg_match('#^([0-9]?[0-9]?[0-9]{2}[- /.](0?[1-9]|1[012])[- /.](0?[1-9]|[12][0-9]|3[01]))*$#', $date);
}

# Validate Hexadecimal Colors @since 1.1.5
function vColor($color)
{
        #CCC
        #CCCCC
        #FFFFF
        return preg_match('/^#(?:(?:[a-f0-9]{3}){1,2})$/i', $color);
}

# Make Query Safe @since 1.1.5
function _cleanQuery($str)
{
return is_array($str) ? array_map('_cleanQuery', $str) : str_replace('\\', '\\\\', htmlspecialchars((get_magic_quotes_gpc() ? stripslashes($str) : $str), ENT_QUOTES));
}

# Make Data Safe @since 1.1.5
function _cleanData($str)
{
return is_array($str) ? array_map('_cleanData', $str) : str_replace('\\', '\\\\', strip_tags(trim(htmlspecialchars((get_magic_quotes_gpc() ? stripslashes($str) : $str), ENT_QUOTES))));
}

# Validate MySQL Database Name @since 1.1.5
function vDBName ($db) 
{
	
	return !preg_match('/[^a-z_\-0-9]/i', $db);
}

# Validate Sex @since 1.1.5
function vSex ($sex) 
{
	$sex = strtolower(substr($sex, 0, 1));
	if ( $sex != "f" OR $sex != "m"  )
		$sex = true;
	else { $sex = false; }
	
	return $sex;
}

# Sanitize Sex @since 1.1.5
function sSex ($sex) 
{
	$sex = strtolower(substr($sex, 0, 1));
	return $sex;
}

# Isset Form Field Name @since 1.1.5
function kv($name) {
	
	if ( isset( $name ) ) {echo $name;}
	
	return true;
}

# Get Days in Month @since 1.1.5
function get_days_in_month($month, $year)
{
   return $month == 2 ? ($year % 4 ? 28 : ($year % 100 ? 29 : ($year %400 ? 28 : 29))) : (($month - 1) % 7 % 2 ? 30 : 31);
}

# Is Leap Year @since 1.1.5
function is_leap_year($year)
{
	return ((($year % 4) == 0) && ((($year % 100) != 0) || (($year %400) == 0)));
}

# Get Age @since 1.1.5
function getAge($birthday){
    
    list($year,$month,$day) = explode("-",$birthday);
    $year_diff  = date("Y") - $year;
    $month_diff = date("m") - $month;
    $day_diff   = date("d") - $day;
    if ($day_diff < 0 || $month_diff < 0)
      $year_diff--;
    return $year_diff;      
}


# Page 404 @since 1.1.5
function page404 ()
{
	# Check if there's a 404.php file in application directory
	if ( !file_exists( APPPATH. '404.php' ) )
	{
		# Check if there's a 404.html file in application directory
		if ( !file_exists( APPPATH. '404.html' ) )
		{
			# Include System 404
			include ( BASEPATH.'404.php' );
		} // end if
		
		else
		{
			# Load Application 404.php
			include ( APPPATH.'404.html' );
		
		} // end else
		
	} // end if
	else {
		
		# Load Application 404.php
		include ( APPPATH.'404.php' );
		
	} // end else
	
} // end page404


# Framework Head @since 1.1.5
function sys_header() 
{
	?>
    <div class="sw_wrapper pas">
		<header class="shadow-header">
			<div class="row">
				<div class="twelve columns">
					<h1>Shadow</h1>
				</div><!-- end twelve columns -->
			</div>
		</header><!-- end shadow-header -->
    
    <?php return true;
}

# Framework Foot @since 1.1.5
function sys_footer() 
{
	?>
    </div><!-- end sw_wrapper pas -->
    
    <?php return true;
}


# Creates Options and set value if already posted
function createOptions($optionsArray, $selectValue=false)
{
$optionsHTML = '';
foreach($optionsArray as $value => $label)
{
	    $label = htmlspecialchars($label);
	    $selected = ($selectValue === $value) ? ' selected="selected"' : '';
	    $optionsHTML .= "<option value='{$value}'{$selected}>{$label}</option>\n";
}
return $optionsHTML;
}

