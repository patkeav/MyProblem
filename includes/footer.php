				<div id="footer" class="row">
					<div class="col-lg-12">
						<ul id="site-footer" role="contentinfo">
							<li><h1> Copyright </h1>
								<br />
								<p>&copy; <?php echo date('Y'); ?> Patrick Keaveny & Morgan Braaten</p>
							<li><h1> Brought to you by... </h1>
								<br />
								<p> Built by: <a href="http://www.patrickkeaveny.com" target="_blank">Patrick C.</a> and Designed by: <a href="http://morganbraaten.com/" target="_blank">MBraat</a></p>
							</li>
						</ul><!--/#site-footer-->
					</div><!--/.col-lg-12-->
				</div><!--/#footer.row-->
		<script type="text/javascript" src="resources/js/functions.js"></script>	
		<input type="hidden" name="ip-address" id="ip-address" value="<?php echo $client_IP; ?>" />	
		<input type="hidden" name="last_entry" id="last_entry" value="" />
		<input type="hidden" name="problem_param" id="problem_param" value="<?php echo $problem; ?>" />
		<input type="hidden" name="q" id="q" value="<?php echo $q; ?>" />
		
	</body><!--/.container-fluid-->
</html>

