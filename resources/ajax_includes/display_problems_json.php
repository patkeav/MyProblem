<?php /** Displays the entries from the Database **/
include('../db_files/connect_to_db.php'); 

if ($query_params) {
	$query_result = $con->prepare("SELECT * FROM `Problem_beta`  
									WHERE (keywords LIKE " . $query_alternate . ")
									ORDER BY Date DESC;");
	
	$query_result->execute($execute_array);
}

else {
	$query_default = 'SELECT * FROM `Problem_beta`  
					ORDER BY Date DESC;';
	$query_result = $con->prepare($query_default);
	$query_result->execute();	
}
	
//fetches data from individual rows in the query 
$i = 0;
$problem_array = array();
while($row = $query_result->fetch()) {
	$i++;
	$problem_string = $row['Problem'];
	$time_stamp = $row['Date'];  
	$key_words = explode(' ', ($row['keywords']));
	$parsed = date_parse($time_stamp);
	
	$problem_row = array(
		$problem_string,
		$time_stamp,
		$key_words,
	);
	echo "row: ";
	print_r($problem_row);
	echo "<br />";
	array_push($problem_array, $problem_row);
	
	//print json_encode($problem_row); 
}

//print_r(json_encode($problem_array));