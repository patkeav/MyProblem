<?php /**Table buttons script, for making buttons **/
?>
<h4>See Problems From:</h4>
<br />

<hr>

<button class="today">Today</button>
<button class="this-week">This Week</button>
<button class="this-month">This Month</button>
<button class="all">All</button>
<h2> Or. </h2>
<h3>Select a <br />date:</h3>
<select id="option-month" >
	<?php 
		$months = array(
		'January',
		'February',
		'March',
		'April',
		'May',
		'June',
		'July',
		'August',
		'September',
		'October',
		'November',
		'December',
		);
	for ($i=0;$i<count($months);$i++) { ?>
	<option value="<?php echo $months[$i]; ?>"><?php echo $months[$i]; ?></option>
	<?php } ?>
</select>
<br />
<select id="option-day">
	<?php for ($i=1;$i<=30;$i++) { ?>
	<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
	<?php } ?>
</select>
<br />
<select id="option-year">
	<?php 
		$years = array(
		'2013',
		'2014'
		);
	for ($i=0;$i<count($months);$i++) { ?>
	<option value="<?php echo $years[$i]; ?>"><?php echo $years[$i]; ?></option>
	<?php } ?>
</select>
<br />
<input type="button" value="Go" id="specific-date" />
<br />

