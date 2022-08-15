<?php 

session_start();

require 'dbcon.php';

if(isset($_POST['apply'])){
	$price = mysqli_real_escape_string($con, $_POST['price']);
	$coupon_code = mysqli_real_escape_string($con, $_POST['coupon']);

	$query = "SELECT * FROM `coupon_code` WHERE 1";
	
	$query_run = mysqli_query($con, $query);
	
	if ($query_run){
		$result = mysqli_fetch_all($query_run, MYSQLI_ASSOC);
		if($result[0]["coupon_code"] == $coupon_code && 
				$result[0]["value"] > $price && 
				$result[0]["status"] == "1");{

			$_SESSION['message'] = 'Promocode applied successfully';
			header('location: index.php'); 
		    exit(0);
		}

		
	}
	else{
		$_SESSION['message'] = 'Pormocode did not applied';
		header('location: index.php');
		exit(0);
	}
}
