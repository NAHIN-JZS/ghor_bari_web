<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="style\logIn\login.css">
</head>


<?php
	require 'con2database.php';
	
	if(isset($_POST['login'])) {

		// Get data from FORM
		$email = validate($_POST['email']);
		$password = validate($_POST['password']);

		try {
			$stmt = $connect->prepare('SELECT * FROM users WHERE email = :email');
			$stmt->execute(array(
				':username' => $username,
				':email' => $email
				));
			$data = $stmt->fetch(PDO::FETCH_ASSOC);

			if($data == false){
				$errMsg = "User $username not found.";
			}
			else {
				if(md5($password) == $data['password']) {
					$_SESSION['id'] = $data['id'];
					$_SESSION['username'] = $data['username'];
					$_SESSION['fullname'] = $data['fullname'];
					$_SESSION['role'] = $data['role'];
					header('Location: dashboard.php');
					exit;
				}
				else
					$errMsg = 'Password not match.';
			}
		}
		catch(PDOException $e) {
			$errMsg = $e->getMessage();
		}
	}
?>



<body>

<div class="container">
<?php
   include("nevigation.php")
    ?> 
	<div class="d-flex justify-content-center h-100">
    
		<div class="card">
			<div class="card-header">
				<h3>Sign In</h3>
				
			</div>
			<div class="card-body">
				<form action="" method ="post">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="email" name='email'>
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="password" name='password'>
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div>
					<div class="form-group">
						<input type="submit" value="Login" name="login" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="http://localhost/project-ghor-bari/registration.php">Sign Up</a>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>