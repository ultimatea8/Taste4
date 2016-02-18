<?php
function QrealEscape($input){
	$con = $GLOBALS['con'];
	$output = mysqli_real_escape_string($con,$input);
	return $output;
}

function Qquery($input){
	$con = $GLOBALS['con'];
	$output = mysqli_query($con,$input);
	return $output;
}

function QfetchArray($input){
	$output = mysqli_fetch_array($input);
	return $output;
}

function Qrows($input){
    $output = mysqli_num_rows($input);
    return $output;
}
?>