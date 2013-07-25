<?php

$host = DB_HOST;
$dbname = DB_NAME;
$user = DB_USER;
$pass = DB_PASSWORD;

/**
 * connect to the database  
 */
	try 
	{  
		# Connect to mysql using credentials
		$DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);  		
		# Set Error handling method
		$DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );  
	  
	}  
	catch(PDOException $e) {  
		echo "Could not connect to database";  
		file_put_contents('PDOErrors.txt', $e->getMessage(), FILE_APPEND);  
	} 


/**
 * Insert into a new row 
 */
	try {  
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


/**
 * Update existing content
 */
	try {  
		$data = array( 'The best mug in the Shadowverse yeah', 'bestmug2.jpg' );
		$stmt = "INSERT INTO shdw_non_coffee_products ( description, image )
								VALUES ( ?, ? )";
		$STH = $DBH->prepare( "UPDATE shdw_non_coffee_products
								SET description= ?, image= ?
								WHERE Id=3"); 
		$STH->execute( $data );  
		
	}  
	catch(PDOException $e) {  
		echo "Could not update row.";  
		file_put_contents('PDOErrors.txt', $e->getMessage(), FILE_APPEND);  
	}  
	
#########################
##### Fetching Data #####

/**
 * FETCH_ASSOC
 *
 * This fetch type creates an associative array, indexed by column name.
 */
	try 
	{  
		# using the shortcut ->query() method here since there are no variable  
		# values in the select statement.  
		$STH = $DBH->query('SELECT name, description, price from shdw_non_coffee_products');  
		  
		# setting the fetch mode  
		$STH->setFetchMode(PDO::FETCH_ASSOC);  
		  
		while($row = $STH->fetch()) 
		{  
			echo $row['name'] . "<br/>";  
			echo $row['description'] . "<br/>";  
			echo $row['price'] . "<br/><br/>";  
		}  
		
	}  
	catch(PDOException $e) {  
		echo "Could not fetch data.";  
		file_put_contents('PDOErrors.txt', $e->getMessage(), FILE_APPEND);  
	} 
	
	
/**
 * FETCH_OBJ
 *
 * This fetch type creates an object of std class for each row of fetched data.
 */
	try 
	{  
		# using the shortcut ->query() method here since there are no variable  
		# values in the select statement.  
		$STH = $DBH->query('SELECT name, description, price from shdw_non_coffee_products');  
		  
		# setting the fetch mode  
		$STH->setFetchMode( PDO::FETCH_OBJ );  
		  
		while( $row = $STH->fetch( ) ) 
		{  
			echo $row->name . "<br/>";  
			echo $row->description . "<br/>";  
			echo $row->price . "<br/><br/>";  
		}  
		
	}  
	catch(PDOException $e) {  
		echo "Could not fetch data.";  
		file_put_contents('PDOErrors.txt', $e->getMessage(), FILE_APPEND);  
	}
	

/**
 * FETCH_CLASS
 *
 * This fetch method allows you to fetch data directly into a class
 * of your choosing. When you use FETCH_CLASS, the properties of your
 * object are set BEFORE the constructor is called. Read that again,
 * it’s important. If properties matching the column names don’t exist, those properties will be created (as public) for you.
 *
 * This means if your data needs any transformation after it comes out
 * of the database, it can be done automatically by your object as each
 * object is created.
 *
 * As an example, imagine a situation where the address needs to be
 * partially obscured for each record. We could do this by operating
 * on that property in the constructor. Here’s an example:
 */
 	class secret_mug {  
		public $name;  
		public $description;  
		public $price;  
		public $other_data;  
	  
		function __construct($other = '') {  
			$this->name = preg_replace('/[a-z]/', 'x', $this->name);  
			$this->other_data = $other;  
		}  
	}  
 	
	try 
	{  
		$STH = $DBH->query('SELECT name, description, price from shdw_non_coffee_products');  
		$STH->setFetchMode(PDO::FETCH_CLASS, 'secret_mug');  
		  
		while($obj = $STH->fetch()) {  
			echo $obj->name . '<br/>';  
		}  
		
	}  
	catch(PDOException $e) {  
		echo "Could not fetch data.";  
		file_put_contents('PDOErrors.txt', $e->getMessage(), FILE_APPEND);  
	} 
	

##### Fetching Data #####	    
#########################


#################################
##### Other Helpful Methods #####

/**
 * The ->lastInsertId() method is always called on the database handle,
 * not statement handle, and will return the auto incremented id of the 
 * last inserted row by that connection.
 */
 	try 
	{  
		echo $DBH->lastInsertId(); 
	}  
	catch(PDOException $e) {  
		echo "Could not get last inserted id.";  
		file_put_contents('PDOErrors.txt', $e->getMessage(), FILE_APPEND);  
	} 
	
/**
 * The ->exec() method is used for operations that can not return data
  *other then the affected rows. The above are two examples of using the
 * exec method.
 */
 	try 
	{  
		$DBH->exec('DELETE FROM shdw_non_coffee_products WHERE Id = 7');
	}  
	catch(PDOException $e) {  
		echo "Could not delete row(s).";  
		file_put_contents('PDOErrors.txt', $e->getMessage(), FILE_APPEND);  
	}
	
	
/**
 * The ->quote() method quotes strings so they are safe to use in 
 * queries. This is your fallback if you’re not using prepared <br />
 * statements.
 */ 
 	$safe = $DBH->quote($unsafe); 
	
	
/**
 * The ->rowCount() method returns an integer indicating the number of
 * rows affected by an operation. In at least one known version of PDO,
 * according to [this bug report](http://bugs.php.net/40822) the method
 * does not work with select statements.
 */
 	try 
	{  
		echo $rows_affected = $STH->rowCount(); 
	}  
	catch(PDOException $e) {  
		echo "Could not count rows effected by last statement.";  
		file_put_contents('PDOErrors.txt', $e->getMessage(), FILE_APPEND);  
	}
	
	
 	 