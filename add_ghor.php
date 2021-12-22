<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Ghor</title>
    
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<?php
    
    include('nevigation.php');
	require 'con2database.php';
	
    ?>

<!-- <div class="row"> -->			
  <div class="col-md-11 col-xs-12 col-sm-12">
  	<div class="alert alert-info" role="alert">
  		<?php
			if(isset($errMsg)){
				echo '<div style="color:#FF0000;text-align:center;font-size:17px;">'.$errMsg.'</div>';
			}
		?>
  		<h2 class="text-center">Register Room</h2>
  		<form action="" enctype="multipart/form-data" method="post">
		  	 <div class="row">
		  	 	<div class="col-md-4">
			  	  <div class="form-group">
				    <label for="house_no">House No</label>
				    <input type="text" class="form-control" id="house_no" placeholder="House Number" name="house_no" required>
				  </div>
				 </div>

				<div class="col-md-4">
				  <div class="form-group">
				    <label for="total_room">Available Rooms</label>
				    <input type="text" class="form-control"  id="total_room" title="Available Rooms" placeholder="Available Rooms" name="total_room" required>
				  </div>
				 </div>

				 <div class="col-md-4">
			  <div class="form-group">
			    <label for="city">City</label>
			    <input type="city" class="form-control" id="city" placeholder="City" name="city" required>
			  </div>
			  </div>
			 </div>

			<div class="row">
		  	 	<div class="col-md-4">
				  <div class="form-group">
				    <label for="address">Address</label>
				    <input type="address" class="form-control" id="address" placeholder="address" name="address" required>
				  </div>
				 </div>

				 <div class="col-md-4">
				  <div class="form-group">
				    <label for="rent_fare">Rent Fare</label>
				    <input type="text" class="form-control" id="rent_fare" placeholder="Rent Fare" name="rent_fare" required>
				  </div>
				 </div>

				<div class="col-md-4">
			  <div class="form-group">
			    <label for="additional_info">Additional Information</label>
			    <input type="text" class="form-control" id="additional_info" placeholder="Additional Information" name="additional_info" required>
			  </div>
			  </div>
			    </div>				  
			  
			   <div class="row">
			   	
				<div class="col-md-4">
			  <div class="form-group">
			    <label for="image">Image</label>
			    <input type="file" name="image" id="image">
				

			  </div>
			  </div>
			  </div>
			  <div>		
			  <button type="submit" class="btn btn-primary" id="register_new_ghor" name='register_new_ghor' value="register_new_ghor">Submit</button>
			  </div>	
			</form>	
			</div>			
  	</div>
<!-- </div> -->

</body>
</html>

<?php
	if(isset($_POST['house_no'])){
		$u_id = $_SESSION['u_id'];
		$u_email = $_SESSION['u_email'];
		//$u_phone = $_SESSION['u_phone'];
		//$u_name = $_SESSION['u_name'];
		$house_no = $_POST['house_no'];
		$total_room = $_POST['total_room'];
		$city = $_POST['city'];
		$address = $_POST['address'];
		$rent_fare = $_POST['rent_fare'];
		$additional_info = $_POST['additional_info'];
		$image = "";


		//$tmpFile = $_FILES['image'];
		//$newFile = 'C:/xampp/htdocs/project-ghor-bari/images/houses/'.$_FILES['image'];
		//$result = move_uploaded_file($tmpFile, $newFile);

		$sql_enter_new_ghor = "INSERT INTO `house` (`u_id`, `house_no`,`total_room`, `address`, `city`, `cost`, `image`, `additional_info`) VALUES ('$u_id', '$house_no', '$total_room', '$address',  '$city', '$rent_fare', '$image', '$additional_info');";

		if (mysqli_query($connect, $sql_enter_new_ghor)) {
			echo "New record created successfully";
		  } else {
			echo "Error: " . $sql_enter_new_ghor . "<br>" . mysqli_error($connect);
		  }

 	}
?>