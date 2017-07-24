<?php
header("access-control-allow-origin: *");
error_reporting(0);

$file = "file.txt";

if($_GET ['data']){
	file_put_contents($file,$_GET ['data']);
	echo "success";
}
else if($_GET ['show']){
	$current = file_get_contents($file);
	echo $current;
}
else if($_GET['clear']){
	file_put_contents($file, '');

}
?>
