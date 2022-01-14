<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Ghor</title>
    
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style\add_ghor.css">


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
  		<h2 class="text-center">Register Your Estate</h2>
  		<form action="" enctype="multipart/form-data" method="post">
		  	 <div class="row">
		  	 	<div class="col-md-6">
			  	  <div class="form-group">
				    <label for="house_no">House No</label>
				    <input type="text" class="form-control" id="house_no" placeholder="House Number" name="house_no" required>
				  </div>
				 </div>

				<div class="col-md-6">
				  <div class="form-group">
				    <label for="total_room">Total Rooms</label>
				    <input type="text" class="form-control"  id="total_room" title="Available Rooms" placeholder="Available Rooms" name="total_room" required>
				  </div>
				 </div>
			   </div>

				 <div class="row">
		  	 	<div class="col-md-6">
				  <div class="form-group">
				    <label for="address">Address</label>
				    <input type="address" class="form-control" id="address" placeholder="address" name="address" required>
				  </div>
				 </div>

				 <div class="col-md-6">
				  <div class="form-group">
				    <label for="rent_fare">Rent Fare</label>
				    <input type="text" class="form-control" id="rent_fare" placeholder="Rent Fare" name="rent_fare" required>
				  </div>
				 </div>
				 </div>

				 <div class="row">
				 <div class="col-md-4">
				  <div class="form-group">
				    <label for="size">Total Size (Square feet)</label>
				    <input type="text" class="form-control" id="size" placeholder="size" name="size" required>
				  </div>
				 </div>

				 <div class="col-md-4">
			  <div class="form-group">
			    <label for="city">City</label><br>
			    <select class = "select_box form-control form-control-sm" id="city" name="city" size="1">
					<option value="---">Please select your city</option>
					<option value="Bagerhat">Bagerhat</option>
					<option value="Bandarban">Bandarban</option>
					<option value="Barguna">Barguna</option>
					<option value="Barisal">Barisal</option>
					<option value="Bhola">Bhola</option>
					<option value="Bogra">Bogra</option>
					<option value="Brahmanbaria">Brahmanbaria</option>
					<option value="Chandpur">Chandpur</option>
					<option value="Chittagong">Chittagong</option>
					<option value="Chuadanga">Chuadanga</option>
					<option value="Comilla">Comilla</option>
					<option value="Cox's Bazar">Cox's Bazar</option>
					<option value="Dhaka">Dhaka</option>
					<option value="Dinajpur">Dinajpur</option>
					<option value="Faridpur">Faridpur</option>
					<option value="Feni">Feni</option>
					<option value="Gaibandha">Gaibandha</option>
					<option value="Gazipur">Gazipur</option>
					<option value="Gopalganj">Gopalganj</option>
					<option value="Habiganj">Habiganj</option>
					<option value="Jaipurhat">Jaipurhat</option>
					<option value="Jamalpur">Jamalpur</option>
					<option value="Jessore">Jessore</option>
					<option value="Jhalakati">Jhalakati</option>
					<option value="Jhenaidah">Jhenaidah</option>
					<option value="Khagrachari">Khagrachari</option>
					<option value="Khulna">Khulna</option>
					<option value="Kishoreganj">Kishoreganj</option>
					<option value="Kurigram">Kurigram</option>
					<option value="Kushtia">Kushtia</option>
					<option value="Lakshmipur">Lakshmipur</option>
					<option value="Lalmonirhat">Lalmonirhat</option>
					<option value="Madaripur">Madaripur</option>
					<option value="Magura">Magura</option>
					<option value="Manikganj">Manikganj</option>
					<option value="Moulvibazar">Moulvibazar</option>
					<option value="Munshiganj">Munshiganj</option>
					<option value="Mymensingh">Mymensingh</option>
					<option value="Naogaon">Naogaon</option>
					<option value="Narail">Narail</option>
					<option value="Narayanganj">Narayanganj</option>
					<option value="Narsingdi">Narsingdi</option>
					<option value="Natore">Natore</option>
					<option value="Nawabganj">Nawabganj</option>
					<option value="Netrakona">Netrakona</option>
					<option value="Nilphamari">Nilphamari</option>
					<option value="Noakhali">Noakhali</option>
					<option value="Pabna">Pabna</option>
					<option value="Panchagarh">Panchagarh</option>
					<option value="Parbattya Chattagram">Parbattya Chattagram</option>
					<option value="Patuakhali">Patuakhali</option>
					<option value="Pirojpur">Pirojpur</option>
					<option value="Rajbari">Rajbari</option>
					<option value="Rajshahi">Rajshahi</option>
					<option value="Rangpur">Rangpur</option>
					<option value="Satkhira">Satkhira</option>
					<option value="Shariatpur">Shariatpur</option>
					<option value="Sherpur">Sherpur</option>
					<option value="Sirajganj">Sirajganj</option>
					<option value="Sunamganj">Sunamganj</option>
					<option value="Sylhet">Sylhet</option>
					<option value="Tangail">Tangail</option>
					<option value="Thakurgaon">Thakurgaon</option>
					
					
			</select>
			  
			
			  </div>
			  </div>

			  
			  <div class="col-md-4">
			  <div class="form-group">

			  <label for="h_type">Estate Type</label><br>
			<select class="select_box form-control form-control-sm" id="h_type" name="h_type" size="1">
				<option value="---">Please select house type </option>
				<option value="house">House</option>
				<option value="office">Office</option>
				<option value="market_place">Market place</option>
			</select>
			  </div>
			  </div>
			  
			 </div>

			

				<div class="col-md-6">
			  <div class="form-group">
			    <label for="additional_info">Additional Information</label><br>
			    <!-- <input type="textarea" class="form-control" id="additional_info" placeholder="Additional Information" name="additional_info" required> -->
				<textarea rows = "5" cols = "60" id = "additional_info" name = "additional_info" required placeholder="Enter additional information about your estate"></textarea><br>  
			</div>
			  </div>
			    </div>				  
			  
			   <!-- <div class="row">
			   	
				<div class="col-md-4">
			  <div class="form-group">
			    <label for="image">Image</label>
			    <input type="file" name="image" id="image">
				

			  </div>
			  </div>
			  </div> -->
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
		$h_type = $_POST['h_type'];


		//$tmpFile = $_FILES['image'];
		//$newFile = 'C:/xampp/htdocs/project-ghor-bari/images/houses/'.$_FILES['image'];
		//$result = move_uploaded_file($tmpFile, $newFile);

		$sql_enter_new_ghor = "INSERT INTO `house` (`u_id`, `house_no`,`total_room`, `address`, `city`, `cost`, `h_type`, `additional_info`) VALUES ('$u_id', '$house_no', '$total_room', '$address',  '$city', '$rent_fare', '$h_type', '$additional_info');";

		if (mysqli_query($connect, $sql_enter_new_ghor)) {
			echo "New record created successfully";
		  } else {
			echo "Error: " . $sql_enter_new_ghor . "<br>" . mysqli_error($connect);
		  }

 	}
?>