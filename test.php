<?php
header("access-control-allow-origin: *");
error_reporting(0);
$file='data1.txt';
if( $_GET['data']) {
	file_put_contents($file, $_GET['data']);
	echo "success";
}
else if( $_GET['show']){
	$c = file_get_contents($file);
	echo $c;
}
?>