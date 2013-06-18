<?php

# Check if form has been posted
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
	
	# Clean Data
	_cleanData($_POST);
	
	# Begin Error array
	$errors = array();
	
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
			
		} else { $errors[] = 'Please enter a valid username. Username must be at least 4 characters long.'; }
		
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
				# Set Password from POST variable
				$p = $p1;
				
				# Create a random salt
				$random_salt = hash('sha512', uniqid(mt_rand(1, mt_getrandmax()), true ) );
				
				# Create salted password ( Careful not to over season)
				$p = hash ('sha512', $p.$random_salt);
				
				
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
		$r = mysqli_query( $db, $q );
		if ( mysqli_num_rows( $r ) != 0 )
		{
			$errors[] = 'Email address already registered. <a href="'. ROOTURL.'login">Login</a> or use a different email.</a>';
			
		} // end if

	} // end if
	
	# Check if username already exists in database
	if ( empty( $errors ) ) {
		
		# Select email from database if it exists
		$q = "SELECT user_id FROM users WHERE username='$un'";
		$r = mysqli_query( $db, $q );
		if ( mysqli_num_rows( $r ) != 0 )
		{
			$errors[] = 'Username already registered. <a href="'. ROOTURL.'login">Login</a> or choose a new username.';
			
		} // end if

	} // end if
	
	if ( empty( $errors ) )
	{
		# Insert user information into the database
		$q = "INSERT INTO users
			 (first_name, last_name, username, email, pass, dob, sex, reg_date)
			 VALUES ('$fn', '$ln', '$un', '$e', SHA1('$p'), '$bd', '$sx', NOW() )";
		$r = mysqli_query( $db, $q );
		if ( !$r ) { echo mysqli_error( $db ); exit; }
		
		# If data was entered correctly, Registered!
		if ( $r )
		{
			# Start Sec Session
			sec_session_start();
			
			# Set Session Varibles
			$_SESSION['user_id'] = $un;
			$_SESSION['first_name'] = $fn;
			$_SESSION['last_name'] = $ln;
			
			
			# Redirect to homepage
			load("home");
			
		} // end if
		
	} // end if
	else {
		
		# Call error messages
		echo '
			<div class="alert panel">';
				foreach ( $errors as $msg ) {
					echo "- $msg<br/>";
				} // end foreach
			echo '</div>';
				mysqli_close( $db );
		
	} // end else
	
} // end if
?>

<?php # includes header.php
app_header(); ?>

<div class="row">
    <h3>Join <?php echo SITE_NAME; ?></h3>
    <p>It's free and forever will be.</p>
</div><!-- end row -->
<form action="<?php echo ROOTURL; ?>register" method="POST" class="custom">
    <div class="row">
    	<div class="small-12 large-6 columns">
        	<label>Full Name</label>
            <div class="row">
        		<input class="small-6 columns" type="text" name="first_name" value="<?php if ( isset( $_POST['first_name'] ) ) echo $_POST['first_name']; ?>" placeholder="First Name" />
                <input class="small-6 columns" type="text" name="last_name" value="<?php if ( isset( $_POST['last_name'] ) ) echo $_POST['last_name']; ?>" placeholder="Last Name" />
         	</div><!-- end row -->
        </div><!-- end small-12 large-6 -->
    </div><!-- end row -->
    <div class="row">
    	<div class="small-12 large-6 columns">
        	<label>Username</label>
        <input class="small-12 columns" type="text" name="username" value="<?php if ( isset( $_POST['username'] ) ) echo $_POST['username']; ?>" placeholder="tsmith" />
        </div><!-- end small-12 large-6 -->
    </div><!-- end row -->
     <div class="row">
    	<div class="small-12 large-6 columns">
        	<label>Your Email</label>
        <input class="small-12 columns" type="text" name="email" value="<?php if ( isset( $_POST['email'] ) ) echo $_POST['email']; ?>" placeholder="tsmith@outlook.com" />
        </div><!-- end small-12 large-6 -->
    </div><!-- end row -->
    <div class="row">
    	<div class="small-12 large-6 columns">
            <div class="row">
            	<div class="small-6 columns">
                	<label>Enter a password</label>
                	<input type="password" name="password1" />
                </div><!-- end small-6 columns -->
        		<div class="small-6 columns">
                	<label>Re-enter your password</label>
                	<input type="password" name="password2" />
                </div><!-- end small-6 columns -->
         	</div><!-- end row -->
        </div><!-- end small-12 large-6 -->
    </div><!-- end row -->
    <div class="row pbs">
    	<div class="small-12 large-6 columns">
            <label>Birthday</label>
            <div class="row">
            	<div class="small-4 columns">
                	<select name="bd_month" id="bd_month columns" class="small">
                        <option value="0" SELECTED>Month:</option>
                        <option value="jan">Jan</option>
                        <option value="feb">Feb</option>
                        <option value="mar">Mar</option>
                        <option value="apr">Apr</option>
                        <option value="may">May</option>
                        <option value="jun">Jun</option>
                        <option value="jul">Jul</option>
                        <option value="aug">Aug</option>
                        <option value="sep">Sep</option>
                        <option value="oct">Oct</option>
                        <option value="nov">Nov</option>
                        <option value="dec">Dec</option>
                      </select>
                </div><!-- end small-4 -->
                <div class="small-4 columns">
                	<select name="bd_day" id="bd_day" class="small">
                    	<option value="0" SELECTED>Day:</option>
                        
						<?php # Keeps birth days up to date
						
						# Create day option
                        for ( $i = 1; $i <= 31; $i++ )
                        {
                            echo "<option value='$i'>$i</option>";
							
                        } // end for
                        ?>
                      </select>
                </div><!-- end small-4 -->
                <div class="small-4 columns">
                	<select name="bd_year" id="bd_year" class="small">
                    	<option value="0" SELECTED>Year</option>
                        
						<?php # Keeps birth year up to date
						# Set current year
                        $cur_year = date("Y");
						
						# Set how many years to go back
						$min_year = $cur_year - 120;
						
						# Create a year option for the number of years to go back
                        for ( $i = $cur_year; $i > $min_year; $i-- )
                        {
                            echo "<option value='$i'>$i</option>";
							
                        } // end for
                        ?>
                        
                      </select>
                </div><!-- end small-4 -->
            </div><!-- end row -->
        </div><!-- end small-12 large-6 -->
        <div class="small-12 large-6 columns">
            <a href="#" class="small">Why do I need to provide my birthday?</a>
        </div><!-- end small-12 large-6 -->
    </div><!-- end row -->
    <div class="row pbm">
    	<div class="small-12 large-6 columns">
        	<label for="sex" class="inline prs">
            	<input name="sex" type="radio" value="female" id="sex" style="display:none;"><span class="custom radio "></span> Female
            </label>
      		<label for="sex" class="inline">
            	<input name="sex" type="radio" value="male" id="sex" style="display:none;"><span class="custom radio"></span> Male
          	</label>
        </div><!-- end small-12 large-6 -->
    </div><!-- end row -->
    <div class="row pbm">
    	<div class="small-12 large-6 columns">
        	<div class="caption">By clicking Join, you agree to our <a href="#">Terms</a> and that you have read our <a href="#">Data Use Policy</a>, including our <a href="#">Cookie Use</a>.</div>
        </div><!-- end small-12 large-6 -->
    </div><!-- end row -->
    <div class="row">
    	<div class="small-12 columns">
    		<input type="submit" value="Join" class="join button" />
      	</div><!-- end small-12 columns -->
   	</div><!-- end row -->
</form>

<?php # includes header.php
app_footer(); ?>
