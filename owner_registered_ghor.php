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
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>


<body>

<section id="owner_ghor">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Your Registered Room</h2>
            <!-- <h3 class="section-subheading text-muted">Search rooms or homes for hire.</h3> -->
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            
            <?php 

            $data = [];
            
            // Get data from FORM
            $u_idd = $_SESSION['u_id'];

            $sql_search_ghor = "SELECT * from `house` INNER JOIN `user` ON `house`.`u_id` = `user`.`id` WHERE `house`.`u_id` = '$u_idd'; ";
            $data = mysqli_query($connect, $sql_search_ghor);

            if(isset($errMsg)){
            echo '<div style="color:#FF0000;text-align:center;font-size:17px;">'.$errMsg.'</div>';
            }
                foreach ($data as $key => $value) {           
                  echo '<div class="card card-inverse card-info mb-3" style="padding:1%;">          
                        <div class="card-block">';
                          // echo '<a class="btn btn-warning float-right" href="update.php?id='.$value['id'].'&act=';if(isset($value['ap_number_of_plats'])){ echo "ap"; }else{ echo "indi"; } echo '">Edit</a>';
                         echo   '<div class="row">
                            <div class="col-4">
                            <h4 class="text-center">Owner Details</h4>';
                              echo '<p><b>Owner Name: </b>'.$value['name'].'</p>';
                              echo '<p><b>Mobile Number: </b>'.$value['phone'].'</p>';
                              //echo '<p><b>Alternate Number: </b>'.$value['alternat_mobile'].'</p>';
                              echo '<p><b>Email: </b>'.$value['email'].'</p>';
                              //echo '<p><b>Country: </b>'.$value['country'].'</p><p><b> State: </b>'.$value['state'].'</p><p><b> City: </b>'.$value['city'].'</p>';
                              if ($value['image'] !== 'uploads/') {
                                # code...
                                echo '<img src="images/houses/'.$value['image'].'" width="100">';
                              }

                          echo '</div>
                            <div class="col-5">
                            <h4 class="text-center">Room Details</h4>';
                              // echo '<p><b>Country: </b>'.$value['country'].'<b> State: </b>'.$value['state'].'<b> City: </b>'.$value['city'].'</p>';
                              echo '<p><b>House Number: </b>'.$value['house_no'].'</p>';

                              if(isset($value['cost'])){
                                echo '<p><b>Rent Fare: </b>'.$value['cost'].'</p>';
                              } 
                              
                                //if(isset($value['apartment_name']))                         
                                  //echo '<div class="alert alert-success" role="alert"><p><b>Apartment Name: </b>'.$value['apartment_name'].'</p></div>';

                                //if(isset($value['ap_number_of_plats']))
                                  //echo '<div class="alert alert-success" role="alert"><p><b>Plat Number: </b>'.$value['ap_number_of_plats'].'</p></div>';

                              echo '<p><b>Available Rooms: </b>'.$value['total_room'].'</p>';
                              echo '<p><b>Address: </b>'.$value['address'].'</p>';
                              echo '<p><b>City: </b>'.$value['city'].'</p>';
                          echo '</div>
                            <div class="col-3">
                            <h4>Other Details</h4>';
                            //echo '<p><b>Accommodation: </b>'.$value['accommodation'].'</p>';
                            echo '<p><b>Description: </b>'.$value['additional_info'].'</p>';
                              //if($value['vacant'] == 0){ 
                                //echo '<div class="alert alert-danger" role="alert"><p><b>Occupied</b></p></div>';
                              //}else{
                               // echo '<div class="alert alert-success" role="alert"><p><b>Vacant</b></p></div>';
                             // } 
                            echo '</div>
                          </div>              
                         </div>
                      </div>';
                }
              ?>              
          </div>
        </div>
      </div>
      <br><br><br><br><br><br>
    </section>


</body>
</html>
  