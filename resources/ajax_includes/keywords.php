<?php 
//Keywords script!
// made this after a few Ales, not entirely sure what all's going on

$problem = $_GET["problem"];   

$bad_words = array();
$file = fopen('../text_files/strip_words.txt', 'r');

while (!feof($file)) {
	$entry = fgets($file);
	$newstring = substr_replace($entry, '@', 0) . substr_replace($entry, '@', (strlen($entry) - 1));
	array_push($bad_words, $newstring);
}

fclose($file);


$key_words = preg_replace($bad_words, '', $problem);

$keyword_array = array();

$keywords = str_word_count($key_words, 1);

for ($i=0; $i< count($keywords); $i++) {
	array_push($keyword_array, $keywords[$i]);
} ?>

<div class="keyword-search" id="reddit-search">
	Search Reddit for: 
	<a href="http://www.reddit.com/search?q=<?php echo $key_words; ?>" target="_blank">
		<?php echo $key_words; ?>
		
	</a>
	
	<br /> Or. <br /> Search by Keyword: <br />
		<?php
			for ($i=0; $i< count($keyword_array); $i++) {
				?> 
				<a href="http://www.reddit.com/search?q=<?php echo $keyword_array[$i]; ?>" target="_blank">
					<?php echo $keyword_array[$i] . ''; ?>	
				</a>,&nbsp;
			<?php	
			}
			?>
</div>
<div class="keyword-search" id="twitter-search">
	Search Twitter for: 
	<?php
		$full_tag = '';
		for ($i=0; $i< count($keyword_array); $i++) {
			$full_tag = $full_tag . $keyword_array[$i];
		}
		$search_url = http_build_query(array(
			'q' => '#' . $full_tag,
			'include_entities' => 'true',
		));
	?>
	<a href="http://www.reddit.com/search?q=<?php echo $search_url; ?>" target="_blank">
		<?php echo '#' . $full_tag;  ?>
	</a>
	
	<br /> Or. <br /> Search by Tag: <br />
		<?php
	
	for ($i=0; $i< count($keyword_array); $i++) {
		$search_url = '';
		$search_url = http_build_query(array(
			'q' => '#' . $keyword_array[$i],
			'include_entities' => 'true',
		));
		
		?>
		<a href="https://www.twitter.com/search?<?php echo $search_url; ?>" target="_blank">
			<?php echo '#' . $keyword_array[$i] . ' '; ?>
		</a>,&nbsp;
	<?php
	}
?>
</div>
<div class="keyword-search" id="tumblr-search">
	Search Tumblr for: 
	<a href="http://www.tumblr.com/search/blogs?q=<?php echo $problem; ?>" target="_blank">
		<?php echo $key_words; ?>
	</a>
	
	<br /> Or. <br /> Search by Tag: <br />
		<?php
			for ($i=0; $i< count($keyword_array); $i++) {
				?> 
				<a href="http://www.tumblr.com/tagged/<?php echo $keyword_array[$i]; ?>" target="_blank">
					<?php echo $keyword_array[$i] . ''; ?>	
				</a>,&nbsp;
			<?php	
			}
			?>
</div>
			
	
		.