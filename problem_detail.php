<?php

$problem = $_GET["problem"];
$date = $_GET["date"];

?>


<html>
	<head>
		<link href="resources/css/style.css" rel="stylesheet" type="text/css" />
		<title> My Problem </title>
	</head>
	<body>
	<div>
		<h2> <?php echo $problem; ?> </h2>
	</div>
	<div> This problem was posted on <?php echo $date; ?> </div>
	</body>
</html>