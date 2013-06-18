<?php 

/*$q = <<<SQL
	SELECT *
	FROM `users`
	WHERE `role` = 'master'
SQL;

if (!$r = $db->query($q) )
{
	die('There was an error runing the query [' . $db->error . ']');
}

while ($row = $r->fetch_assoc() )
{
	echo $row['first_name'] . '<br/>';
	
} // end while

# Returns # of results
echo 'Total results: ' . $r->num_rows . "<br/>";

# Returns # of affected rows
echo "Total rows updated " . $db->affected_rows . "<br/>";

# Free Results
$r->free();

# Make safe to put into database
$db->escape_string('This is an unescaped "string"');

# Close database connection
$db->close;


$statement = $db->prepare("SELECT `last_name` FROM `users` WHERE `username` = ?");

# Set parameter
$name = `wmosley`;

# Bind name to parameter
$statement->bind_param('s', $name);

# Execute the statment so we can play with results
$statement->execute();

#Bind result to a variable
$statement->bind_result($returned_name);

while ($statement->fetch() )
{
	echo $returned_name . '<br/>';
	
}

$statement->free_result();




	



# Our custom secure way of starting a php session
sec_session_start();

# Login Success
echo 'Success: You have been logged in!<br/>';
echo $_SESSION["user_id"]."<br/>";
echo $_SESSION["username"]."<br/>";
echo $_SESSION['login_string'],"<br/>";


echo login_check($db);


if( login_check($db) == true)
{
	<div class="row">
	<div class="twelve columns">
		<p>You are now logged in, <?php echo $_SESSION['first_name'].' '.$_SESSION['last_name'].'.'; ?></p>
	</div><!-- end twelve columns -->
</div><!-- end row -->
		
	
} else { echo "You are not authorized to access this page, please login."; }*/

# includes header.php
app_header(); 

?>

<section class="phm">
	<div class="row">
    	<div class="small-12 large-3 columns">
        	<img class="plm prl mrl hide-for-small" src="<?php echo APPURL; ?>img/DKNM_CHILDREN_Chicken Pox Symptom Relief.jpg" />
        </div><!-- end small-12 large-3 columns -->
        <div class="small-12 large-9 columns">
        	<div class="product_category cat_childrens">Chicken Pox Symptom Relief</div>
            <div class="headline">Get them better and back to doing what they do best</div>
            <p>For temporary relief of nultiple symptoms including intense itching from skin rash and vesicles (blisters), headached, fever, swollen glands, cough, sore throat, tummy ache, irritability, restlessness, fatigue, and losse of appetite.</p>
            <img class="plm prl mrl pvl mxw200 mCenter hide-for-medium-up" src="<?php echo APPURL; ?>img/DKNM_CHILDREN_Chicken Pox Symptom Relief.jpg" />
            <div class="price">$19.99 <span class="euro">&euro;17.39</span></div>
            <a href="#" class="childrens button split">Buy Now<span></span></a>
            <a href="#" class="button">Details</a>
        </div><!-- end small-12 large-9 -->
    </div><!-- end row -->
</section>

<?php 
# includes footer.php
app_footer();

