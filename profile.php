<?php
    include("nevigation.php");
	require 'con2database.php';
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_SESSION['u_name'] ?></title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>



<?php

	if(empty($_SESSION['u_name']))
		header('Location: index.php');


    $sql_total_user_ghor = "SELECT count(*) as total_user_rent FROM `house` WHERE u_id = `house`.`u_id`;";
    $result = mysqli_query($connect, $sql_total_user_ghor);

    foreach($result as $row) 
        $total_auth_user_rent = $row['total_user_rent'];
    

?>
 <!-- side-nav -->
 <!-- <br>
<nav class="navbar navbar-expand-sm navbar-default sidebar" style="background-color:#212529;" >
      <div class="container">
      	<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive1">
          <ul class="navbar-nav text-center" style="    flex-direction: column;">      
            
            <li class="nav-item">
            	            
            </li>
            <li class="nav-item">
	        	<a href="../app/list.php" class="nav-link">Details/Update</a>
            </li>

            <li class="nav-item">
              
            </li>

            <li class="nav-item">
              
            </li>
          </ul>
        </div>
      </div>
    </nav> -->

<!-- side-nav -->
	<section class="wrapper" style="margin-left: 16%;">
		<div class="container">
			<!-- <div class="row"> -->
				<div class="col-md-12 ">
					<h1  style='background-color:#FFFFFF;' >Dash board</h1>
					<div class="row">								
            <div class="col-md-3">
              <a href="owner_registered_ghor.php">
                <div class="alert alert-warning" role="alert">
                  <?php echo '<b>Total Registered Rooms: <span class="badge badge-pill badge-success" style="background-color:#212529";>'.$total_auth_user_rent.'</span></b>'; ?>
                </div>
              </a>
          </div>
							
						

					</div>
                    <div class="row">

                        <div class="col-md-3">
                        <a href="../app/list.php"><div class="alert alert-warning" role="alert">
                        <b>Update Exsiting Room </b>
                        </div></a>
                        </div>

                        <div class="col-md-3">
                        <a href="add_ghor.php"><div class="alert alert-warning" role="alert">
                        <b>Register New Room </b>
                        </div></a>
                        </div>
                    </div>
				</div>
			<!-- </div> -->
		</div>
	</section>
