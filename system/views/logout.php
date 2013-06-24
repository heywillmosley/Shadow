<?php # Logout page

# Our custom secure way of starting a php session
sec_session_start();

# Unset all session values
$_SESSION = array();

# Get Session parameters
$params = session_get_cookie_params();

# Delete the actual cookie
setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"], $params["httponly"]);

# Destroy Session
session_destroy();

# Include application header
app_header();

?>

<div class="row">
	<div class="small-12">
    	<div data-alert class="alert-box success">
          <!-- Your content goes here -->
          You have been successfully logged out.
        </div>
        <a href="<?php echo ROOTURL.'login'; ?>" class="primary button">Login</a>
    </div><!-- end small-12 -->
</div><!-- end row -->

<?php
# Include application footer
app_footer();