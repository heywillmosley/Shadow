<div class="row">
	<h1>Let's set up your database.</h1>
	<h5 class="pbm">Please enter your production/live database credentials and optionally your development/local credientials. If you're unsure, please contact your host or webmaster.</h5>
    <p>
    	You can modify your database configuration after installation at<br/>
    	<code><?php echo ROOTPATH; ?></code><br/>
        Production/Live Settings: <code>live-config.php</code><br/>
        Development/Local Settings: <code>local-config.php</code>
        
    </p>

<?php $page_title = "New Database";

if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {

	# Clean Data
	_cleanData($_POST);
	
	# Begin Error array
	$errors = array();
	
	# --------------------------
	# Database Name Required
	# --------------------------
	
	# Database name required
	if ( !empty($_POST['live_db_name'])) {
		
		# Validate email
		if ( vDBName($_POST['live_db_name']) ) {
			
			# Set variable
			$live_dbn = $_POST['live_db_name'];
			
		} else { $errors[] = "Please enter a valid production/live database name. Characters allowed: <code>a-z</code>, <code>0-9</code>, <code>-</code>, and <code>_</code>."; }
		
	} else { $errors[] = "Please enter a name for your production/live database."; }
	
	
	# --------------------------
	# Database Username Required
	# --------------------------
	
	# Database name required
	if ( !empty($_POST['live_db_username'])) {
		
		# Validate
		if ( vDBName($_POST['live_db_username']) ) {
			
			# Set variable
			$dbun = $_POST['live_db_username'];
			
		} else { $errors[] = "Enter a valid production/live MySql username."; }
		
	} else { $errors[] = "Please enter your production/live MySQL Username."; }
	
	# --------------------------
	# Database Password Required
	# --------------------------
	
	# Database name required
	if ( !empty($_POST['live_db_pass'])) {

		# Set variable
		$live_dbp = $_POST['live_db_pass'];
		
	} else { $errors[] = "Please enter your production/live MySQL Password."; }
	
	# --------------------------
	# Database Host Required
	# --------------------------
	
	# Database name required
	if ( !empty($_POST['live_db_host'])) {
		
		# Validate
		if ( vDBName($_POST['live_db_host']) ) {
			
			# Set variable
			$live_dbh = $_POST['live_db_host'];
			
		} else { $errors[] = "Please enter a valid production/live database host. Most likely <code>localhost</code>."; }
		
	} else { $errors[] = "Please enter your production/live database host. Most likely <code>localhost</code>."; }
	

	
	# --------------------------
	#  Local Database Name Required if any input
	# --------------------------
	
	# Check if any local fields are filled in
	if ( !empty($_POST['local_db_name']) or !empty($_POST['local_db_user']) or !empty($_POST['local_db_pass']) or !empty($_POST['local_db_host']) ) 
	{
		# Local Database name required
		if ( !empty($_POST['local_db_username'])) {
			
			# Validate
			if ( vDBName($_POST['local_db_username']) ) {
				
				# Set variable
				$dbun = $_POST['local_db_username'];
				
			} else { $errors[] = "Enter a valid development/local MySQl username."; }
			
		} else { $errors[] = "Please enter your development/local MySQL Username."; }
		
	} else { $local_dbu = $_POST['local_db_user']; }
	
	# --------------------------
	# Local Database Password Required if any input
	# --------------------------
	
	if ( !empty($_POST['local_db_name']) or !empty($_POST['local_db_user']) or !empty($_POST['local_db_pass']) or !empty($_POST['local_db_host']) ) 
	{
		# Database name required
		if ( !empty($_POST['local_db_pass'])) {
	
			# Set variable
			$local_dbp = $_POST['local_db_pass'];
			
		} else { $errors[] = "Please enter your development/local MySQL Password."; }
		
	} else { $local_dbp = $_POST['local_db_pass']; }
	
	# --------------------------
	# Local Database Host Required if any input
	# --------------------------
	
	if ( !empty($_POST['local_db_name']) or !empty($_POST['local_db_user']) or !empty($_POST['local_db_pass']) or !empty($_POST['local_db_host']) ) 
	{
		# Database name required
		if ( !empty($_POST['local_db_host'])) {
			
			# Validate
			if ( vDBName($_POST['local_db_host']) ) {
				
				# Set variable
				$local_dbh = $_POST['local_db_host'];
				
			} else { $errors[] = "Please enter a valid development/local database host. Most likely <code>localhost</code>."; }
			
		} else { $errors[] = "Please enter your development/local database host. Most likely <code>localhost</code>."; }
		
	} else { $local_dbh = $_POST['local_db_host']; }
	
	# ----------------------------
	# Database Enviroment Required
	# ---------------------------
	
	# Check if enviroment was selected
	if ( $_POST['db_env'] != '0' )
	{
		# Validate Enviroment selection
		if ( $_POST['db_env'] == "local" or $_POST['db_env'] == "live")
		{
			# Set Portfolio Product
			$dbe = $_POST['db_env'];
		}
			
		else { $errors[] = "Please select a valid site enviroment."; }
		
	} else { $errors[] = "Please select your current working enviroment."; }
		
	
	# Submit form if no errors
	if ( empty( $errors ) ) {
		
		 $checkConnection = @mysql_connect($live_dbh, $dbun, $live_dbp) ;
		
		if ($checkConnection) 
		{
			$db = mysql_connect($live_dbh, $dbun, $live_dbp) ;
		
			# Check if Database name already exists
			if (!mysql_select_db($live_dbn, $db)) {
				
				/*# Create Database
				$q = "CREATE DATABASE IF NOT EXISTS $live_dbn";
				$r = mysql_query( "$q" );
				
				# Create Database Connection
				$db = mysqli_connect($live_dbh, $dbun, $live_dbp, $live_dbn) 
				or die( mysqli_connect_error() );
				
				# Create local-config file with content
				$file = ROOTPATH."local-config.php";
				$handle = fopen($file, 'w');
				
				$data = "<?php # Local database configuration. Define live setup in sw-config.php
				
				# Your database name
				define( 'live_db_name', '$live_dbn' );
				
				# Your database username
				define( 'DB_USER', '$dbun' );
				
				# Your database user password
				define( 'live_db_passWORD', '$live_dbp' );
				
				# Your databases's connection type
				define( 'live_db_host', '$live_dbh' ); // Probably 'localhost'";
				
				# Write Data to File
				fwrite( $handle, $data );
				
				# Close File
				fclose($handle);*/
				
				# Go Home
				
				header(ROOTURL);
			
			} else
			{	
				$errors[] = "The database already exists. Please input a database name not already in use.";	
				# Call error messages
				echo '
					<div class="row">
						<div class="alert panel">';
							foreach ( $errors as $msg ) {
								echo "- $msg<br/>";
							} // end foreach
						echo '</div></div>';
						# mysqli_close( $db );
			}

		} 
		else
		{
			$errors[] = "We couldn't connect you to your database with the credentials provided. Please check credentials.";	
			
			# Call error messages
			echo '
				<div class="row">
					<div class="alert panel">';
						foreach ( $errors as $msg ) {
							echo "- $msg<br/>";
						} // end foreach
					echo '</div></div>';
					# mysqli_close( $db );
		}
	
	} // end if
	else {
		
		# Call error messages
		echo '
			<div class="row">
				<div class="alert panel">';
					if ( !empty($_POST['local_db_name']) or !empty($_POST['local_db_user']) or !empty($_POST['local_db_pass']) or !empty($_POST['local_db_host']) ) 
					{
						# If development fields have input w/errors
						echo "- If you don't need to set development/local database settings, please check that all local database fields are empty before continuing. <br/>";
					}
						
					foreach ( $errors as $msg ) {
						echo "- $msg<br/>";
					} // end foreach
				echo '</div></div>';
				# mysqli_close( $db );
	} // end else
	
} // end if
?>


	<form action="<?php BASEPATH."new_database.php"; ?>" method="POST" name="new_database" class="custom">
    	<div class="row">
        	<h4 class="pbs">Production/Live database settings</h4>
        	<div class="small-12 large-6 columns">
                <label>MySQL Database Name</label>
                <input type="text" name="live_db_name" value="<?php if ( isset( $_POST['live_db_name'] ) ) echo $_POST['live_db_name']; ?>" placeholder="awesome_database" />
          	</div><!-- end small-12 columns -->
            <div class="small-12 large-6 columns">
                <p>The name of the database you want to run Shadow on.</p>
          	</div><!-- end small-12 columns -->
      	</div><!-- end row -->
     	<div class="row">
        	<div class="small-12 large-6 columns">
                <label>MySQL User Name</label>
                <input type="text" name="live_db_username" value="<?php if ( isset( $_POST['live_db_username'] ) ) echo $_POST['live_db_username']; ?>"  placeholder="root"/>
          	</div><!-- end small-12 columns -->
            <div class="small-12 large-6 columns">
                <p>Your MySQL username</p>
          	</div><!-- end small-12 columns -->
      	</div><!-- end row -->
        <div class="row">
        	<div class="small-12 large-6 columns">
                <label>Password</label>
                <input type="password" name="live_db_pass" value="<?php if ( isset( $_POST['live_db_pass'] ) ) echo $_POST['live_db_pass']; ?>" />
          	</div><!-- end small-12 columns -->
            <div class="small-12 large-6 columns">
                <p>Your MySQL password</p>
          	</div><!-- end small-12 columns -->
      	</div><!-- end row -->
        <div class="row">
        	<div class="small-12 large-6 columns">
                <label>Database Host</label>
                <input type="text" name="live_db_host" value="<?php if ( isset( $_POST['live_db_host'] )  ) { echo $_POST['live_db_host']; } else { echo "localhost"; } ?>"  placeholder="localhost"/>
          	</div><!-- end small-12 columns -->
            <div class="small-12 large-6 columns">
                <p>You should be able to get this info from your web host if <code>localhost</code> does not work.</p>
          	</div><!-- end small-12 columns -->
      	</div><!-- end row -->
        <div class="row">
        	<h4 class="pbs">Development/Local database settings <span class="caption">Optional</span></h4>
        	<div class="small-12 large-6 columns">
                <label>MySQL Database Name</label>
                <input type="text" name="local_db_name" value="<?php if ( isset( $_POST['local_db_name'] ) ) echo $_POST['local_db_name']; ?>" placeholder="awesome_database" />
          	</div><!-- end small-12 columns -->
            <div class="small-12 large-6 columns">
                <p>The name of the database you want to run Shadow on.</p>
          	</div><!-- end small-12 columns -->
      	</div><!-- end row -->
     	<div class="row">
        	<div class="small-12 large-6 columns">
                <label>MySQL User Name</label>
                <input type="text" name="local_db_username" value="<?php if ( isset( $_POST['local_db_username'] ) ) echo $_POST['local_db_username']; ?>"  placeholder="root"/>
          	</div><!-- end small-12 columns -->
            <div class="small-12 large-6 columns">
                <p>Your MySQL username</p>
          	</div><!-- end small-12 columns -->
      	</div><!-- end row -->
        <div class="row">
        	<div class="small-12 large-6 columns">
                <label>Password</label>
                <input type="password" name="local_db_pass" value="<?php if ( isset( $_POST['local_db_pass'] ) ) echo $_POST['local_db_pass']; ?>" />
          	</div><!-- end small-12 columns -->
            <div class="small-12 large-6 columns">
                <p>Your MySQL password</p>
          	</div><!-- end small-12 columns -->
      	</div><!-- end row -->
        <div class="row">
        	<div class="small-12 large-6 columns">
                <label>Database Host</label>
                <input type="text" name="local_db_host"  placeholder="localhost"/>
          	</div><!-- end small-12 columns -->
            <div class="small-12 large-6 columns">
                <p>You should be able to get this info from your web host if <code>localhost</code> does not work.</p>
          	</div><!-- end small-12 columns -->
      	</div><!-- end row -->
        <div class="row">
        	<div class="small-12 large-6 columns">
                <label>Currenty in local or live enviroment?</label>
                <select name="db_env" value="<?php if ( isset( $_POST['db_env'] ) ) echo $_POST['db_env']; ?>">
                    <?php 
                    # Set Options for work enviroment
                    $dbe_options = array(
                        'local' => 'Development/Local',
                        'live' => 'Production/Live');
                    
                    # Get Options and set if selected
                    echo createOptions($dbe_options, $_POST['db_env']); 
                    ?>
                  </select>
            </div><!-- end small-6 -->
        </div><!-- end row -->
        <input type="submit" class="small button" />
    </form><!-- end form -->

</div><!-- end row -->