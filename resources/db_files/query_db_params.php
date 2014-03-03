<?php /** Checks the Database for new entries **/

$params = $_POST["params"];

$params = explode(' ', $params);

$query_alternate = '';

$execute_array = array();
$i = 0;

foreach ($params as $param) {
	++$i;
	if (!$param == '') {
		$sql_string = '';
		$param = cleanAndSanitize($param);
		$sql_string = $sql_string . ":tag" . $i;
		$string_key = "tag" . $i;
		$execute_array[$string_key] = "%" . $param . "%";
		$query_alternate = $query_alternate . $sql_string;
		if ($i != count($params)) {
		$query_alternate = $query_alternate . " OR keywords LIKE ";
		}
	}
}

function cleanAndSanitize($input) {	
	$search = array(
    '@<script[^>]*?>.*?</script>@si',   // Strip out javascript
    '@<[\/\!]*?[^<>]*?>@si',            // Strip out HTML tags
    '@<style[^>]*?>{}:.*?</style>@siU',    // Strip style tags properly
    '@<![\s\S]*?--[ \t\n\r]*>@',         // Strip multi-line comments
    "/@?@siU/"
  );

 	if (get_magic_quotes_gpc()) {
            $input = stripslashes($input);
        }
        $output  = preg_replace($search, '', html_entity_decode($input, ENT_QUOTES));
        
    
    return utf8_encode($output);
}	

$query_params = true;


include('../ajax_includes/display_problems.php');
