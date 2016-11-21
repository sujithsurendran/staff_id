<?php
function print_alerts() {
global $arr_alert;
		if(count($arr_alert) > 1) { 
		echo '<div class="alert alert-info" role="alert"> <button type="button" class="close" data-dismiss="alert">×</button>
			<strong>'. print_array_in_lines($arr_alert) . '</strong> 
		</div>';
		}


}
/* Functions START */
function print_array_in_lines($arr){

	$str_array = "";
	foreach($arr as $value) {
		$str_array .= "$value<br />";
	}
	
	// remove last and first <br>
	return substr($str_array,6,strlen($str_array)-7);
	
}?>