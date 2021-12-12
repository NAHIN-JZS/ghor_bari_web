<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="style\logIn\login.css">

</head>
<body>




<div class="container">
<?php
        include("nevigation.php");
        require 'con2database.php';
            ?> 
	<div class="d-flex justify-content-center h-100">
    
		<div class="card">
			<div class="card-header">
				<h3>Registration</h3>
				
			</div>
			<div class="card-body">
				<form action="index.php" method ="post">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-envelope"></i></span>
						</div>
						<input type="email" class="form-control" placeholder="email" name='email'>
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="User Name" name='user_name'>
					</div>

                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="password" name='password'>
					</div>

                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-phone"></i></span>
						</div>
						<input type="number" class="form-control" placeholder="Phone Number" name='phone_number'>
					</div>

                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-address-card"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Address" name='address'>
					</div>
					
					<div class="form-group">
						    <input type="submit"  name="sign_up" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Have an account?<a href="http://localhost/project-ghor-bari/login.php" class="text-decoration-none">Login</a>
				</div>
			</div>
		</div>
	</div>
</div>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){

$email = $_POST['email'];
$name = $_POST['user_name'];
$password = $_POST['password'];
$phone_number = $_POST['phone_number'];
$address = $_POST['address'];


$sql_enter_new_user = "INSERT INTO `user` (`name`, `phone`,`permanent_address`, `email`, `password`) VALUES ('$name', '$phone_number', '$address', '$email',  '$password');";

//$connect->query($sql_enter_new_user);

if (mysqli_query($connect, $sql_enter_new_user)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql_enter_new_user . "<br>" . mysqli_error($connect);
  }


}

?>
    


 <!-- Bootstrap core JavaScript -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


</body>
</html>

