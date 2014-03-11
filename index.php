<?php include('includes/header.inc.php');
?>	
		<div id="main" class="row">
				<div id="display-problems" class="col-lg-12" >
					<div class=" button-group" id="problem-buttons"></div><!--#problem-buttons--> 
					<table class="table"> 
						<thead>
							<tr>
								<th class="hidden">id</th>
								<th class="hidden">TimeStamp</th>
								<th>Posted on:</th>
								<th>Problem</th>
								<th>Twitter</th>
								<th>Contact User</th>
								<th class="hidden">IP</th>
								<!--<th>Delete Problem</th>-->
							</tr>
						</thead>
						<tbody id="main-table"> 
						</tbody>
					</table>
				</div><!--#display-problems-->
			</div><!--/.col-lg-12-->
		</div><!--/.row-fluid-->
		
	<?php include('includes/footer.php');
