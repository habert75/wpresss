<?php
//my filter 
add_filter('wp_title','my_f');
function my_f($title){
	$string="- yes  i can do it!!!";
	return $title.$string;
	
}
