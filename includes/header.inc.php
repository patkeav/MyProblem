<?php
session_start();
  
$client_IP = $_SERVER['REMOTE_ADDR'];
$problem = $_POST["problem"];

if ($_GET['q']) {
	$q = true;
}

if ($_GET['problem']) {
	$problem = $_GET['problem'];
}

$problem_tags = explode(' ', $problem);
$problem_tags_array = explode(' ', (preg_replace('@tag-@', '', $problem)));

if (isset($_SESSION['value_text'])) {
	$_SESSION['value_text'] = $problem_tags;
}
else {
	$_SESSION['value_text'] = $problem_tags;
}

$value_text = '';

?>

<!-- The Internet Way -->
<!--
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script type="text/javascript" src="http://www.google.com/jsapi"></script> 
-->

<!-- The MAMP Way -->
<script src="resources/js/google-ajax.min.js" type="text/javascript"></script>
<script src="resources/js/google-ajax-10.min.js" type="text/javascript"></script>
<script src="resources/js/jquery-ur.min.js" type="text/javascript"></script>
<script src="resources/js/google-js-api.min.js" type="text/javascript"></script>
<script src="http://www.google.com/jsapi" type="text/javascript"></script> 
<script src='resources/js/bootstrap.min.js'></script>

<html>
	<head>
		<link href="resources/css/style.css" rel="stylesheet" type="text/css" />
		<link href='resources/css/bootstrap/css/bootstrap.css' rel='stylesheet' />
		<link href='resources/css/bootstrap/css/bootstrap-theme.min.css' rel='stylesheet' />
		<title> My Problem </title>
	</head>
	<body class="container <?php if ($problem) { echo $problem; }?>">
		
		<div id="header" class="row-fluid">
			<h1 class="problem-title"> My Problem is... </h1>
			<input type="button" id="main-button" value="Have a problem?" />
			<div class="col-lg-12">
		
				<div class="fb-like" data-href="http://www.patrickkeaveny.com/MyProblem" data-send="true" data-width="450" data-show-faces="true"></div><!--.fb-like-->
				
				<div id="problem" >
			
					<?php if (!$problem) { ?>
				
						<br />
						<input type="text" name="problem-input" id="problem-input" />
							<div class="red-alert">This field can not be empty</div><!--/.red-alert-->
						<br />
				
						<form id="anonymous-check"> 
							<input type="button" name="anonymous" value="anonymous" id="anonymous" data-toggle="modal" data-target="#modal-media"> 
							<label for="anonymous">Remain Anonymous</label>	
						</form><!--checkbox-->		
						<br />
						
					<?php } else { ?>
						<div id="problem-header">
							<h1>
								<?php
									for ($i=0; $i< (count($problem_tags)); $i++) {
										echo "<a href='.?problem=$problem_tags[$i]'>" . $problem_tags_array[$i] . "</a>, ";
										$value_text = $value_text . $problem_tags_array[$i] . ' ';
									} ?>
								<h3> <a href=".?q=true">See All</a></h3>
							</h1>
						</div>
						<input type="text" name="problem-input" id="problem-input" value="<?php echo $value_text ?>"/>
					<?php } ?>
			
					<button name="submit-problem" id="submit-problem">Submit</button>
			
				</div><!--/#problem-->
				<hr>
			</div><!--/.col-lg-12-->
		</div><!--/#header.row-fluid-->
		<br />