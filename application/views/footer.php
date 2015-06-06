<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<div class = "container-fluid footer">
			<div class = "row">
				<div class = "col-md-3">
					Page rendered in <strong>{elapsed_time}</strong> seconds.
				</div>
				<div class = "col-md-3">
					<?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?>
				</div>
				<div class = "col-md-3">
					Created for UW Parkside
					Powered by the UWP Appfactory
				</div>
				<div class = "col-md-3">
					Created by: Andrew Foxworth
				</div>
			</div>
		</div>
	</body>	
	
</html>