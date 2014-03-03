<?php
/** Connects to Database **/
$host = 'localhost';
$db = 'patrickk_test';
$username = 'patrickk_k2';
$password = 'WrjFcHmdKLvvVT78';
// the PDO way

// Using a server
/*
try {
	$con = new PDO("mysql:host=$host;dbname=$db","$username","$password");
	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
catch (PDOException $e) {
	echo "Failed: " . $e->getMessage();
}
*/

// Using MAMP

try {
	$con = new PDO("mysql:host=$host;dbname=$db","root","root");
	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
catch (PDOException $e) {
	echo "Failed: " . $e->getMessage();
}



// the mysqli way
/**$con = mysqli_connect('localhost','patrickk_testuse','Calvinand77!!','patrickk_test');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
$stmt = $dbConnection->prepare("SELECT * FROM `Problem_beta`  
								ORDER BY Date DESC;");
$stmt->bind_param('s',$name);

$stmt->execute();
/*creates a variable to store a SQL statement   
$query = "SELECT * FROM `Problem_beta`  
			ORDER BY Date DESC;";
//creates a variable to store the SQL query to the db
$query_result = mysqli_query($con,$query);
$query_result = $stmt->get_result();
if (!$query_result)
  	{
	die('Error' . mysqli_error($con));
	};
 **/

?>