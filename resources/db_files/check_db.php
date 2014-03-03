<?php /** Checks the Database for new entries **/
require_once('get_query_result.php');

$date = $_POST["date"];

$last_display_date = date_create($date);

$row = $query_resut->fetch();

$last_entry_date = date_create($row['Date']);

$diff = date_diff($last_display_date, $last_entry_date);

if ($diff->format('%s') > 0) {
		$problem_string = $row['Problem'];
			$time_stamp = $row['Date'];  
			$key_words = explode(' ', ($row['keywords']));
			$parsed = date_parse($time_stamp);
			?>
			<tr class="hidden 
				<?php 
					$i = 1;
					$keyword_string = '';
					foreach ($key_words as $word) {
						if (($i++ != 1) or ($i++ != count($key_words))) {
							if (strlen($word) > 2) {
									$keyword_string = $keyword_string . $word . ' '; 
								}
							}
						}
					echo $keyword_string;
				?>">
				<td class="hidden time-stamp"><?php echo $time_stamp; ?></td>
				<td class="date 
				<?php
				$date_diff = $now - (strtotime($time_stamp));
				if ($date_diff < 2592000) { //for things posted this week
					if ($date_diff < 604800) { //for things posted this month
						if ($date_diff < 86400) { //for things posted longer than this month
							echo "today ";
						}
						echo "this-week ";
					}
					echo "this-month ";
				} 
			//for things posted today
				?>all
				<?php echo $months[$parsed['month']] . '-' . $parsed['day']; ?>">
				<?php echo date("M jS, 'y @ g:ia(T)", strtotime($time_stamp)); ?></td>
				<td>
					<h3> 
						<a href=".?problem=<?php 
						echo $keyword_string  ?>">
							My Problem is <?php echo $problem_string ?>
						</a>
					</h3>
				</td>
				<td>
					<a target='_blank' href='https://www.twitter.com/<?php echo $row['twitter_handle'] ?>'>
						<?php echo $row['twitter_handle'] ?>
					</a>
				</td>
				<td>
					<a target='_blank' href='mailto:<?php echo $row['email_address'] ?>'>
						<?php echo $row['email_address'] ?>
					</a>
				</td>
			</tr>
			<?php
		  }
		  ?>
