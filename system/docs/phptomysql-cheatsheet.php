<?php

$host = DB_HOST;
$dbname = DB_NAME;
$user = DB_USER;
$pass = DB_PASSWORD;

# connect to the database  
try {  
  	$DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);  
  	$DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );  
  
}  
catch(PDOException $e) {  
    echo "Could not connect to database";  
    file_put_contents('PDOErrors.txt', $e->getMessage(), FILE_APPEND);  
} 


# Insert into a new row 
try {  
	# Insert a new row
	$data = array( 'Another Mug', 'The best mug in the world', 'bestmug.jpg' );
	$stmt = "INSERT INTO shdw_non_coffee_products ( name, description, image )
							VALUES ( ?, ?, ? )";
  	$STH = $DBH->prepare( $stmt );  
	$STH->execute( $data );  
  	
}  
catch(PDOException $e) {  
    echo "Could not insert new row.";  
    file_put_contents('PDOErrors.txt', $e->getMessage(), FILE_APPEND);  
} 


# Update existing content
try {  
	$STH = $DBH->prepare( "UPDATE shdw_non_coffee_products
SET description='The best mug in the Shadowverse', image='bestmug.jpg'
WHERE Id=3"); 
	$STH->execute();  
  	
}  
catch(PDOException $e) {  
    echo "Could not update row.";  
    file_put_contents('PDOErrors.txt', $e->getMessage(), FILE_APPEND);  
} 