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

<html>
	<head>
		<link href="resources/css/style.css" rel="stylesheet" type="text/css" />
		<title> My Problem </title>
	</head>
	<body>
	
		<div class="container <?php if ($problem) { echo $problem; }?>">
		
			<div class="header">
			
				<input type="button" id="main-button" value="Have a problem?" />
				<div class="fb-like" data-href="http://www.patrickkeaveny.com/MyProblem" data-send="true" data-width="450" data-show-faces="true"></div><!--.fb-like-->
				
				<div id="problem" >
					
					<?php if (!$problem) { ?>
						
						My Problem is...<input type="text" name="problem-input" id="problem-input" />
							<div class="red-alert">This field can not be empty</div><!--/.red-alert-->
						<br />
						
						<form> 
							<input type="checkbox" name="anonymous" value="anonymous" id="anonymous" checked> Remain Anonymous	
						</form><!--checkbox-->		
						<br />
						<form id="id-form" class="hidden opacity" style="margin: 0;">
						
							@<input type="text" name="twitter-handle" id="twitter-handle" placeholder="Twitter Handle" /><!--twitter-handle-->
							<br />
							<input type="text" name="email-address" id="email-address" placeholder="Email Address" /><!--email-address-->
							<br />
							<div id="twitter-box"></div><!--/#twitter-box-->
							
							<a href="#" id="facebook-link">Post To Facebook</a>
							<div id="facebook-box"></div><!--/#facebook-box-->
							
							<a href="#" id="tumblr-link"> Post on Tumblr</a> <br />
								<input type="text" placeholder="Tumblr Blog" id="tumblr-name" />
								<div class="red-alert">This field can not be empty</div>
							<div id="tumblr-box"></div><!--/#tumblr-box-->
							
						</form><!--#id-form-->
						
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
					
					<input type="button" value="Submit" name="submit-problem" id="submit-problem" />
					
				</div><!--/#problem-->
			</div><!--/#header-->
			
			<div class="button-group hidden" id="problem-buttons"></div><!--#problem-buttons--> 
			
			<hr>
			
			<h1> My Problem is... </h1>
			
			<div id="display" class="">
  				<div id="display-problems"></div><!--#display-problems-->
  			</div><!--#display-->
  			
		</div><!--container-->
		
	<script type="text/javascript" src="resources/js/functions.js"></script>	
	
	<input type="hidden" name="ip-address" id="ip-address" value="<?php echo $client_IP; ?>" />	
	<input type="hidden" name="last_entry" id="last_entry" value="" />
	<input type="hidden" name="problem_param" id="problem_param" value="<?php echo $problem; ?>" />
	<input type="hidden" name="q" id="q" value="<?php echo $q; ?>" />
	<div id="unique-id-div"></div>
	</body>
</html>
