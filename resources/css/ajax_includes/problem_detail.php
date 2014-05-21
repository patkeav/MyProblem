<?php /** This file is the template for the problem detail **/ 

$problem = $_GET["problem"];
$date = $_GET["date"];
$IP = $_GET["IP"];

if ($IP !== "0.0") {
	$same = true;
}
else {
	$same = false; 
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
	<hr>
	<?php if ($same) { ?>
		<div> 
		<h4>Care to explain further?</h4>
		<br />
			<input type="textarea" name="details" id="details" class="form-control" />
		</div>
	<?php } ?>
	</body>
</html>