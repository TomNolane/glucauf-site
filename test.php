<?php
 
$value = isset( $_POST['value'] ) ? $_POST['value'] : false;
if ($value === false) {
	die('bad!');
}
else {
	print 'good! value = '.$value;
}
?>

