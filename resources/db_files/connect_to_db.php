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

?>