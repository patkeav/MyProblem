<?php /** Updates the entries in the Database **/
include('connect_to_db.php');

$problem = $_POST["problem"];
$IP = $_POST["IP"];
$twitter = $_POST["twitter"];
$email = $_POST["email"];

$IP = cleanAndSanitize($IP);	
$twitter = cleanAndSanitize($twitter);
$email = cleanAndSanitize($email);
$problem = cleanAndSanitize($problem);
$unique_id = generate_ID();

function generate_ID( $length = 24 ) {
	$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
	$password = substr( str_shuffle( $chars ), 0, $length );
	return $password;
}

$bad_words = array();
$file = fopen('../text_files/strip_words.txt', 'r');

while (!feof($file)) {
	$entry = fgets($file);
	$newstring = substr_replace($entry, '@', 0) . substr_replace($entry, '@', (strlen($entry) - 1));
	array_push($bad_words, $newstring);
}

fclose($file);

$new_key_words = array();

$key_words_stripped = preg_replace($bad_words, '', $problem);

$key_words = explode(' ', $key_words_stripped);

$tags = '';

foreach ($key_words as $word) {
	if ((strlen($word)) > 2) {
		$tags = $tags . " tag-" . $word;
	}
}
 
function cleanAndSanitize($input) {	
	$search = array(
    '@<script[^>]*?>.*?</script>@si',   // Strip out javascript
    '@<[\/\!]*?[^<>]*?>@si',            // Strip out HTML tags
    '@<style[^>]*?>{}:.*?</style>@siU',    // Strip style tags properly
    '@<![\s\S]*?--[ \t\n\r]*>@'         // Strip multi-line comments
  );

 	if (get_magic_quotes_gpc()) {
            $input = stripslashes($input);
        }
        $output  = preg_replace($search, '', $input);
    
    return $output;
}

$query_default = 'SELECT * FROM `Problem_beta`  
					ORDER BY Date DESC;';
$query_result = $con->prepare($query_default);
$query_result->execute();	
			
$num_rows = $query_result->rowCount();
$new_index = $num_rows + 1;

//prepares a sql statement to be inserted into the DB (protection from sql injection)    
$query_result = $con->prepare('INSERT INTO `Problem_beta`(c1, Problem, keywords, twitter_handle, email_address, IP, unique_id) 
									VALUES(:new_index, :problem, :key_words, :twitter, :email, :IP, :unique)');
			
//executes sql statement
$query_array = array(
			'new_index' => $new_index,
			'problem' => $problem,
			'key_words' => $tags,
			'twitter' => $twitter,
			'email' => $email,
			'IP' => $IP,
			'unique' => $unique_id 
			);
$query_result->execute($query_array);

//close pdo connection
$con = null;

?>