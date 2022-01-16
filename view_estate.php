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
  <link rel="stylesheet" type="text/css" href="style\search.css">
</head>


<body>



<?php
$vh_id = $_GET['vh_id'];

$data = [];
    $sql_fetch_compair = "SELECT * from `house` INNER JOIN `user` ON `house`.`u_id` = `user`.`id` WHERE `house`.`h_id` = '$vh_id'; ";
    $data = mysqli_query( $connect, $sql_fetch_compair);

    foreach ($data as $key => $value){
        echo '<div class="card card-inverse card-info mb-3" style="padding:1%;">          
                        <div class="card-block">';
            echo   '<div class="row row_style">
                            <div class="col-4">
                            <h4 class="text-center text-uppercase">Owner Details</h4>';
            echo '<p><b>Owner Name: </b>' . $value['name'] . '</p>';
            echo '<p><b>Mobile Number: </b>' . $value['phone'] . '</p>';
            echo '<p><b>Email: </b>' . $value['email'] . '</p>';


            echo '</div>
                            <div class="col-5">
                            <h4 class="text-center text-uppercase">' . $value['h_type'] . ' Details</h4>';
            echo '<p><b>House Number: </b>' . $value['house_no'] . '</p>';

            if (isset($value['cost'])) {
              echo '<p><b>Rent Fare: </b>' . $value['cost'] . '</p>';
            }


            echo '<p><b>Available Rooms: </b>' . $value['total_room'] . '</p>';
            echo '<p><b>Size: </b>' . $value['size'] . '</p>';
            echo '<p><b>Address: </b>' . $value['address'] . '</p>';
            echo '</div>
                            <div class="col-3">
                            <h4 class="text-center text-uppercase">Other Details</h4>';
            //echo '<p><b>Accommodation: </b>'.$value['accommodation'].'</p>';
            echo '<p><b>Description: </b>' . $value['additional_info'] . '</p>';



            echo '</div>
           
                        
                          </div>
                          
                          <a class=" button_edit_and_update btn btn-warning float-right" href="compair.php">Back to Compair</a>

                         </div>
                      </div>';
          }
          ?>

</body>
</html>