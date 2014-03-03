<?php /** Tweet Button **/

$problem = $_POST["problem"];

$problem = 'My Problem is ' . $problem;

$blog_name = $_POST["blogname"];
$blog_name = '' . $blogname;

$oauth_key = 'iWfUn5yxsyPcxUieblCKZuFOsx0NdaH2VnL76r0oYyLDjb3I39';
$secret_key = 'UXktwlUYNoEF2cifcNk4oBzR0wgwz8ALiQ2Za4nLi6RSgdJh8v';

$url_http = http_build_query(array(
	'url' => 'http://www.patrickkeaveny.com/MyProblem',
	'type' => 'text',
	'state' => 'published',
	'tags' => 'MyProblemIs',
	'title' => 'My Problem Is',
	'body' => $problem,
	'api_key' => $oauth_key
));

?>

 
<a href="http://api.tumblr.com/v2/blog/<?php echo $blog_name; ?>/post?<?php echo $url_http; ?>" class="tumblr-share-button" 
	id="tumblr_button">Post This To Tumblr</a>
	
