		<div id="footer" class="row">
			<div class="col-lg-12">
				<ul id="site-footer" role="contentinfo">
					<li><h1> Copyright </h1>
						<br />
						<p>&copy; <?php echo date('Y'); ?> Patrick Keaveny & Morgan Braaten</p>
					<li><h1> Brought to you by... </h1>
						<br />
						<p> built by: <a href="http://www.patrickkeaveny.com" target="_blank">Patrick C.</a>, designed by: <a href="http://morganbraaten.com/" target="_blank">MBraat</a></p>
					</li>
				</ul><!--/#site-footer-->
			</div><!--/.col-lg-12-->
		</div><!--/#footer.row-->
		
		<!--social-media modal, courtesy of Twitter Bootstrap-->
		<div class="modal fade" id="modal-media" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">  
						<h4 class="modal-title">Share to...</h4>
					</div><!--/modal-header--> 
					<div class="modal-body">
				
						<div class="input-group input-group-lg">
							<div class="input-group-btn ">
								<button  type="button" class="btn ">@</button>
							</div><!--/.input-group-btn-->
							<input type="text" name="twitter-handle" id="twitter-handle" placeholder="Twitter Handle" class="form-control" /><!--twitter-handle-->
						</div><!--/.input-group input-group-lg-->
						<br />
						<form class="form-inline" id="email-form">
							<div class="form-group input-group-lg">
								<input type="text" name="email-address1" id="email-address1" placeholder="email" class="form-control" /><!--email-address-->
								<label for="email-address1">@</label> 
								<input type="text" name="email-address2" id="email-address2" placeholder="address" class="form-control" />
								<label for="email-address2">.com</label>
							</div><!--/.input-group input-group-lg-->
						</form>
						<br />
						<div class="input-group input-group-lg">
							<div id="twitter-box"></div><!--/#twitter-box-->
						</div><!--/.input-group input-group-lg-->
						<br />
						<div class="input-group input-group-lg">
							<a href="#" id="facebook-link">Post To Facebook</a>
							<div id="facebook-box"></div><!--/#facebook-box-->
						</div><!--/.input-group input-group-lg-->
						<br />
						<div class="input-group input-group-lg">
							<a href="#" id="tumblr-link"> Post on Tumblr</a> 
						</div><!--/.input-group input-group-lg-->
						<br />
						<div class="input-group input-group-lg">
							<input type="text" placeholder="Tumblr Blog" id="tumblr-name" class="form-control" />
							<div class="red-alert">This field can not be empty</div>
							<div id="tumblr-box"></div><!--/#tumblr-box-->
						</div><!--/.input-group input-group-lg-->
						
					</div><!--modal-body-->
					<div class="modal-footer"> 
						<!-- The below form needs to be thought through before i put it in 
						<form id="anonymous-check"> 
							<input type="checkbox" name="anonymous-remain" value="Use info, but remain anonymous" id="anonymous" > 
							<label for="anonymous-remain">Use my information, but remain anonymous</label>	
						</form>
						-->	 
						<a href="#" id="media-modal-nevermind" class="btn btn-danger" data-dismiss="modal">Eh, nevermind.</a> 
						<a href="#" id="media-modal-dismiss" class="btn btn-danger" data-dismiss="modal">Submit</a>  
					</div><!--/modal-footer--> 
				</div><!--/modal-content--> 
			</div><!--/modal-dialog--> 
		</div><!--/#modal-media--> 
				
		<!--modal for specific problem detail, courtesy of Twitter Bootstrap-->
		<div class="modal fade" id="detail-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">  
						<h4 class="modal-title">Specific Details for this problem:</h4>
					</div><!--/modal-header--> 
					<div class="modal-body"></div><!--modal-body-->
					<div class="modal-footer"> 
						<a href="#" id="media-modal-nevermind" class="btn btn-danger" data-dismiss="modal">Close</a> 
					</div><!--/modal-footer--> 
				</div><!--/modal-content--> 
			</div><!--/modal-dialog--> 
		</div><!--/#modal-media--> 		
		
		<!--some hidden inputs for javascript/php communication-->
		<script type="text/javascript" src="resources/js/functions.js"></script>	
		<input type="hidden" name="ip-address" id="ip-address" value="<?php echo $client_IP; ?>" />	
		<input type="hidden" name="last_entry" id="last_entry" value="" />
		<input type="hidden" name="problem_param" id="problem_param" value="<?php echo $problem; ?>" />
		<input type="hidden" name="q" id="q" value="<?php echo $q; ?>" />
		

	</body><!--/.container-fluid-->
</html>

