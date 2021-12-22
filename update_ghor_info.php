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

	$house_id = $_GET['id'];
	echo $house_id;

	$sql_get_room_info = "SELECT * FROM `house` where `house`.`h_id` = '$house_id';";
	$data = mysqli_query($connect, $sql_get_room_info);
	
	foreach($data as $key => $value){
		$u_id = $value['u_id'];
		//$u_email = $value['u_email'];
		//$u_phone = $_SESSION['u_phone'];
		//$u_name = $_SESSION['u_name'];
		$house_no = $value['house_no'];
		$total_room = $value['total_room'];
		$city = $value['city'];
		$address = $value['address'];
		$rent_fare = $value['cost'];
		$additional_info = $value['additional_info'];
		$image = $value['image'];
	}
	
	
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
				    <input type="text" class="form-control" id="house_no" value = "<?php echo $house_no ?>" name="house_no" required>
				  </div>
				 </div>

				<div class="col-md-4">
				  <div class="form-group">
				    <label for="total_room">Available Rooms</label>
				    <input type="text" class="form-control"  id="total_room" title="Available Rooms" value = "<?php echo $total_room ?>" name="total_room" required>
				  </div>
				 </div>

				 <div class="col-md-4">
			  <div class="form-group">
			    <label for="city">City</label>
			    <input type="city" class="form-control" id="city" value = "<?php echo $city ?>" name="city" required>
			  </div>
			  </div>
			 </div>

			<div class="row">
		  	 	<div class="col-md-4">
				  <div class="form-group">
				    <label for="address">Address</label>
				    <input type="address" class="form-control" id="address" value = "<?php echo $address ?>" name="address" required>
				  </div>
				 </div>

				 <div class="col-md-4">
				  <div class="form-group">
				    <label for="rent_fare">Rent Fare</label>
				    <input type="text" class="form-control" id="rent_fare" value = "<?php echo $rent_fare ?>" name="rent_fare" required>
				  </div>
				 </div>

				<div class="col-md-4">
			  <div class="form-group">
			    <label for="additional_info">Additional Information</label>
			    <input type="text" class="form-control" id="additional_info" value = "<?php echo $additional_info ?>" name="additional_info" required>
			  </div>
			  </div>
			    </div>				  
			  
			   <div class="row">
			   	
				<div class="col-md-4">
			  <div class="form-group">
			    <label for="image">Image</label>
			    <input type="file" name="image" id="image" value="<?php echo $image ?>">
				

			  </div>
			  </div>
			  </div>
			  <div>		
			  <button type="submit" class="btn btn-primary" id="update_ghor" name='update_ghor' value="update_ghor">Submit</button>
			  </div>	
			</form>	
			</div>			
  	</div>
<!-- </div> -->

</body>
</html>

<?php

if(isset($_POST['update_ghor'])){

	$house_no = $_POST['house_no'];
	$total_room = $_POST['total_room'];
	$city = $_POST['city'];
	$address = $_POST['address'];
	$rent_fare = $_POST['rent_fare'];
	$additional_info = $_POST['additional_info'];
	//$image = $_POST['image'];
	

	$sql_update_ghor = "UPDATE `house` SET `total_room` = '$total_room', `address`='$address', `city`='$city', `cost`='$rent_fare', `additional_info`='$additional_info', `image` = '$image' WHERE `house`.`h_id` = '$house_id';";
	//echo $sql_update_ghor;
	if (mysqli_query($connect, $sql_update_ghor)) {
		//echo "Updated successfully";
		header("Location: owner_registered_ghor.php" );
		//header('location:owner_registered_ghor.php'); 
	  } else {
		echo "Error: " . $sql_update_ghor . "<br>" . mysqli_error($connect);
	  }

	}
?>
