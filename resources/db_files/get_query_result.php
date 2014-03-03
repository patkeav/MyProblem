<?php

include('connect_to_db.php');
	
$query_default = 'SELECT * FROM `Problem_beta`  
					ORDER BY Date DESC;';
$query_result = $con->prepare($query_default);
$query_result->execute();				


?>