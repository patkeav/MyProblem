<?php
// This file is the template for the problem detail

$problem = $_GET["problem"];
$date = $_GET["date"];
$IP = $_GET["IP"];

if ($IP == "0.0") {
	$IP = $IP . "not the same";
}
else {
	$IP = "the same";
}

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
	<?php if ($IP == "the same") { ?>
		<div> Care to explain further? <br />
			<input type="textarea" name="details" id="details" />
		</div>
	<?php } ?>
	</body>
</html>