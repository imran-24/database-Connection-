
<?php

$con = mysqli_connect('localhost', 'root', '', 'coupon');

if(!$con){
	die('Connection failed' . mysqli_connect_error());
}

?>