<?php /** Deletes the entries from the Database **/
include('../db_files/connect_to_db.php'); 

$id = $_GET['id'];

$query_delete = 'DELETE FROM `Problem_beta`  
					WHERE unique_id = :id;';
$query_array = array('id' => $id); 
$query_result = $con->prepare($query_delete);
$execute = $query_result->execute($query_array);

if ($execute == true) {
	echo "Row Deleted";
}
else {
	echo $execute->errorInfo();
}
					
$con = null; 