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
		<!--do this at the end for speed-->

		<!--this removes unwanted elements from the dars report-->
		<script type ="text/javascript">

		$(document).ready(function(){
		// remove css style	
    	$('style').remove();
    	// remove images
    	$('img').remove();
    	// remove title
    	$('.title').remove();
    	// remove page title
    	$('title').remove();
    	// remove links
    	$('td a').remove();
    	// remove brs
    	$('br').remove();
    	// remove old js
    	$('div script').remove();
    	//remove empty table data
    	$("tbody tr:lt(2)").remove();
    	// remove dar meta data
    	$('meta').remove();
    	//remove underlines
    	$('.underline').remove();
    	// remove spans with class spacer
    	$('.spacer').remove();
    	// remove div border;
    	$('td div').css('border','');

    	// remove all spans that are not red
    	//$( "span[color!='rgb(138,41,8)']" ).remove();
    	
    	// removes plaintext
    	$('pre').contents().filter(function(){
   			return this.nodeType == 3
		}).remove();
		// change spans to block elements
		$('span').css('display','block');
    	//removes some unwanted stuff
    	$('#item0').remove();

    	$('span[id*=item]').remove();

        $('table').css('width','75%')


		});
		





		</script>
</html>