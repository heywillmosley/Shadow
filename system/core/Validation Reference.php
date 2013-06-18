<?php

# -----------------
# Email Required
# -----------------

# Email required
if ( !empty($_POST['email'])) {
	
	# Validate email
	if ( vEmail($_POST['email']) ) {
		
		# Sanitize email and set variable
		$e = sEmail($_POST['email']);
		
	} else { $errors[] = "Please enter a valid email address."; }
	
} else { $errors[] = "Please enter your email address."; }


# --------------------------
# Database Name Required
# --------------------------

# Database name required
if ( !empty($_POST['db_name'])) {
	
	# Validate email
	if ( vDBName($_POST['db_name']) ) {
		
		# Sanitize email and set variable
		$dbn = $_POST['db_name'];
		
	} else { $errors[] = "Please enter a valid database name. Characters allowed: <code>a-z</code>, <code>0-9</code>, <code>-</code>, and <code>_</code>."; }
	
} else { $errors[] = "Please enter a name for your database."; }
	

# --------------------------
# Site Name Required
# --------------------------

# Check if site name is empty
if ( !empty( $_POST['site_name'] ) ) 
{
	# Set site name and sanitize
	$sn = $_POST[ 'site_name'];
	
} else { $errors[] = 'Enter the name of your site.'; }

# --------------------------
# Tagline Required
# --------------------------

# Check if site name is empty
if ( !empty( $_POST['tagline'] ) ) 
{
	# Set site name and sanitize
	$tl = $_POST[ 'tagline'];
	
} else { $errors[] = 'Enter your site\'s tagline.'; }
	
# --------------------------
# First Name Required
# --------------------------

# Check if first name is empty
if ( !empty( $_POST['first_name'] ) ) 
{
	# Check if first name is valid name
	if ( vName($_POST['first_name']) )
	{
		# Set first name
		$fn = $_POST[ 'first_name'];
		
	} else { $errors[] = 'Please enter a valid first name.'; }
	
} else { $errors[] = 'Enter your first name.'; }

# --------------------------
# Last Name Required
# --------------------------

# Check if last name is empty
if ( !empty( $_POST['last_name'] ) ) 
{
	# Check if last name is valid name
	if ( vName($_POST['last_name']) )
	{
		# Set last name
		$ln = $_POST[ 'last_name'];
		
	} else { $errors[] = 'Please enter a valid last name.'; }
	
} else { $errors[] = 'Enter your last name.'; }


# --------------------------
# Username Required
# --------------------------

# Check if username name is empty
if ( !empty( $_POST['username'] ) ) 
{
	# Check if username is valid name
	if ( vUsername($_POST['username']) )
	{
		# Set username
		$un = $_POST[ 'username'];
		
	} else { $errors[] = 'Please enter a valid username.'; }
	
} else { $errors[] = 'Enter a username.'; }

# -----------------
# Email Required
# -----------------

# Email required
if ( !empty($_POST['email'])) {
	
	# Validate email
	if ( vEmail($_POST['email']) ) {
		
		# Sanitize email and set variable
		$e = sEmail($_POST['email']);
		
	} else { $errors[] = "Please enter a valid email address."; }
	
} else { $errors[] = "Please enter your email address."; }

# -----------------
# Password Required
# -----------------

# Check if pass1 is empty
if ( !empty( $_POST['password1'] ) ) 
{
	# Set email and sanitize
	$p1 = $_POST[ 'password1'];
		
} else { $errors[] = 'Enter a password.'; };

# Check if pass2 is empty
if ( empty( $_POST['password2'] ) ) {
	$errors[] = 'Please reenter your password.';
	
} // end if
else {
	
	# Set email and sanitize
	$p2 = mysqli_real_escape_string( $db, $_POST[ 'password2'] );
	
} // end else

# Check if passwords are the same
if ( !empty($p1) && !empty($p2) ) {
	
	if ( $p1 == $p2 ) {
		
		# Validate Password
		if ( vPassword($p1) )
		{
			$p = $p1;
			
		} else { $errors[] = "Password must contain at least 8 characters, 1 uppercase, 1 lowercase and 1 number."; }
		
	} else { $errors[] = 'Your passwords aren\'t the same. Please try again.'; }
	
} // end if


# -----------------
# Birthday Required
# -----------------

# Check if month was selected
if ( $_POST['bd_month'] != '0' )
{
	# Set bdm variable
	switch ( $_POST['bd_month'] )
	{
		case 'jan' : $bdm = '01'; break;
		case 'feb' : $bdm = '02'; break;
		case 'mar' : $bdm = '03'; break;
		case 'apr' : $bdm = '04'; break;
		case 'may' : $bdm = '05'; break;
		case 'jun' : $bdm = '06'; break;
		case 'jul' : $bdm = '07'; break;
		case 'aug' : $bdm = '08'; break;
		case 'sep' : $bdm = '09'; break;
		case 'oct' : $bdm = '10'; break;
		case 'nov' : $bdm = '11'; break;
		case 'dec' : $bdm = '12'; break;
		default : $errors[] = "Invalid month, please select a valid month.";
		
	} // end switch
	
} else { $errors[] = "Please select the month you were born."; }

# Check if day was selected
if ( $_POST['bd_day'] != '0' )
{
	# Set bdm variable
	$bdd = $_POST['bd_day'];
	
	# Check if day is before the 10th
	if ( $bdd < 10 ) {
		
		#Append 0 to the end of day
		$bdd = "0$bdd";	
	}
	
} else { $errors[] = "Please select the day you were born."; }

# Check if day was selected
if ( $_POST['bd_year'] != '0' )
{
	# Set bdm variable
	$bdy = $_POST['bd_year'];
	
} else { $errors[] = "Please select the year you were born."; }

# If all dates entries are filled in
if ( !empty($bdd) AND !empty($bdm) AND !empty($bdy) )
{
	# Set number of days in combination given
	$days_in_month = get_days_in_month($bdm, $bdy);
	
	# Check invalid date combinations
	if ( $bdd > $days_in_month )
	{
		# Change numerical months to names
		switch ( $bdm )
		{
			case '01' : $tbdm = 'January'; break;
			case '02' : $tbdm = 'February'; break;
			case '03' : $tbdm = 'March'; break;
			case '04' : $tbdm = 'April'; break;
			case '05' : $tbdm = 'May'; break;
			case '06' : $tbdm = 'June'; break;
			case '07' : $tbdm = 'July'; break;
			case '08' : $tbdm = 'August'; break;
			case '09' : $tbdm = 'September'; break;
			case '10' : $tbdm = 'October'; break;
			case '11' : $tbdm = 'November'; break;
			case '12' : $tbdm = 'December'; break;
			default : $errors[] = "Invalid month, please select a valid month.";
			
		} // end switch
	
		$errors[] = "There are only $days_in_month days in $tbdm ($bdy). Please enter a valid date.";
	} // end if
	
	# Get Birthday in Format - YYYYMMDD
	$birthday = "$bdy$bdm$bdd";
	
	# Get Birthday in Format - YYYY-MM-DD for age check validation
	$vBirthday = "$bdy-$bdm-$bdd";
	
	# Validate Birthday
	if ( vDate($vBirthday) )
	{
		# Checks if user is under 13
		if ( getAge($vBirthday) < 13 )
		{
			?>
			<script>
	
				// Set desired url name
				var url = '<?php echo 'underage'; ?>';
				
				// Change browser url without refreshing
				window.history.replaceState('Object', 'Title', url);
				
			</script>
			<?php
			
			# Include installation
			 include( APPPATH.'underage.php');
			 exit;
		   
		} // end if
		
		$bd = $birthday;
		
	} else { $errors[] = 'Please enter a valid birthday.'; }

} // end if

# --------------------------
# Sex Required
# --------------------------

# Check if sex is empty
if ( !empty( $_POST['sex'] ) ) 
{
	# Check if sex is empty
	if ( vSex( $_POST['sex'] ) ) 
	{
		# Set sex
		$sx = sSex($_POST[ 'sex']);
			
	} else { $errors[] = 'Please enter a valid sex.'; }
		
} else { $errors[] = 'Please select your sex.'; }


# ---------------------------------------
# Check if email is already in database
# ---------------------------------------

# Check if email already exists in database
if ( empty( $errors ) ) {
	
	# Select email from database if it exists
	$q = "SELECT user_id FROM users WHERE email='$e'";
	$stmt = mysqli_query( $db, $q );
	if ( mysqli_num_rows( $stmt ) != 0 )
	{
		$errors[] = 'Email address already registered. <a href="'. ROOTURL.'login">Login</a> or use a different email.</a>';
		
	} // end if

} // end if

# Check if username already exists in database
if ( empty( $errors ) ) {
	
	# Select email from database if it exists
	$q = "SELECT user_id FROM users WHERE username='$un'";
	$stmt = mysqli_query( $db, $q );
	if ( mysqli_num_rows( $stmt ) != 0 )
	{
		$errors[] = 'Username already registered. <a href="'. ROOTURL.'login">Login</a> or choose a new username.';
		
	} // end if

} // end if