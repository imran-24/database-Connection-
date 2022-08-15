<?php

session_start();
require 'dbcon.php';

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Coupon</title>
	<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

	<div class="container mt-5">
     
      <div class="row">
        <div class="col-12-sm">
          <div class="card">
            <div class="card-body w-75 m-auto px-5">
                <form action="code.php" method="POST">  
                  <div class="mb-3">
                    <label for="price"> Total Price</label>
                    <input type="text" class="form-control" id="price" name="price">
                  </div>
                  <div class="mb-3">
                    <label for="coupon"> Apply Promocode</label>
                    <input type="text" class="form-control" id="coupon" name="coupon">
                  </div>
                  <?php include('message.php'); ?>
                  <div class="mb-3">
                    <button type="submit" name="apply" class="btn btn-primary btn-sm px-5 ">Apply</button>
                  </div> 
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>