<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>


		<div class = "jumbotron">
			<h1>Thank you for using QuickDar</h1>
			<p> This web service summarises a University of Wisconsin Parkside Degree Audit Reoport (DAR)</p>
		</div>
		<div class = "container">
			 	<div class ="row">
			 		<div class = "col-md-9">
			 			<h2>To start, open your UWP DAR and save the document </h2>
						 <p><kbd>ctrl+s</kbd>on Windows or <kbd>command+s</kbd> on Mac</p>
					<form class="dropzone dz-clickable" action="<?php echo site_url("../data_submitted"); ?>" method="POST" enctype="multipart/form-data">
						<div class="dz-message">
							<h3>Drop files here or click to upload.</h3>
						</div>
					</form>
				</div>
				<div class = "col-md-3">
					<h2>Next click submit to see your sumary</h2>
					<br>
					<br>
					<a href="<?php echo site_url("../data_submitted"); ?>" button class = "btn btn-primary start">
						<i class="glyphicon glyphicon-upload"></i>
						<span>Upload Files</span>
					</button></a>
					
				</div>
				</div>
		</div>
		