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

  <link rel="stylesheet" type="text/css" href="style\profile.css">

</head>



<?php

if (empty($_SESSION['u_name']))
  header('Location: index.php');

$uid = $_SESSION['u_id'];
$sql_total_user_ghor = "SELECT count(*) as total_user_rent FROM `house` WHERE `house`.`u_id` = '$uid' ;";
$result = mysqli_query($connect, $sql_total_user_ghor);



foreach ($result as $row)
  $total_auth_user_rent = $row['total_user_rent'];


?>

<center>
  <h1 class="text-uppercase">Your Profile</h1>
</center>
<div class="container">
  <?php

  $u_idd = $_SESSION['u_id'];
  //$sql_user_profile = "SELECT * from `user` WHERE `id` = '$u_idd';";
  //$data = mysqli_query($connect, $sql_user_profile);
  //foreach($data as $key => $value)
  //{


  //echo '<div class="card">';
  //echo '<div style = "text-align: center";>';
  echo '<p><b> Name:</b> ' . $_SESSION['u_name'] . '</p>';
  echo '<p ><b>Email:</b> ' . $_SESSION['u_email'] . '</p>';
  echo '<p><b>Phone No.: </b>' . $_SESSION['u_phone'] . '</p>';
  echo '<p><b>Address: </b>' . $_SESSION['u_address'] . '</p>';
  //echo '<p><b>ID: </b>'.$_SESSION['u_id'].'</p>';

  //<p><img src=" //echo $value['id_photo']; " height="100px"></p> -->
  //}
  ?>

<!-- </div> -->
<!-- side-nav -->
<br>
<center>
  <section class="wrapper">
    <div class="container">
      <!-- <div class="row"> -->
      <div class="col-md-12 ">
        <h1 style='background-color:#FFFFFF;'>Dash board</h1>
        <div class="row">
          <div class="col-md-6">
            <a href="owner_registered_ghor.php">
              <div class="alert alert-warning" role="alert">
                <?php echo '<b>Total Registered Rooms: <span class="badge badge-pill badge-success" style="background-color:#212529";>' . $total_auth_user_rent . '</span></b>'; ?>
              </div>
            </a>

          </div>
          <div class="col-md-6">
            <a href="add_ghor.php">
              <div class="alert alert-warning" role="alert">
                <b>Register New Room </b>
              </div>
            </a>
          </div>



        </div>
        <center>
          <div class="row">


            <div class="col-md-12">
              <a href="update_owner_profile.php">
                <div class="alert alert-warning" role="alert">
                  <b>Update Your Profile </b>
                </div>
              </a>
            </div>


          </div>
        </center>
      </div>
      <!-- </div> -->
    </div>
  </section>
</center>