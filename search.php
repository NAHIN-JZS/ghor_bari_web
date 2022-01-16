<?php

include("nevigation.php");
require 'con2database.php';

$data = [];

function is_added_in_compare($h_id){
  if (isset($_COOKIE["compair_values"])){
  $added_id = json_decode($_COOKIE["compair_values"],true);
  

  return in_array($h_id,$added_id);
  }

  return false;

}

if (isset($_POST['search']) or isset($_COOKIE['loc'])) {

  if (isset($_POST['search'])){
     // Get data from FORM
  $location = $_POST['location'];
  $h_type = $_POST['h_type'];
  }
 else{
   $location = $_COOKIE['loc'];
   $h_type = $_COOKIE['h_type'];
 }




  $sql_search_ghor = "SELECT * from `house` INNER JOIN `user` ON `house`.`u_id` = `user`.`id` WHERE `house`.`city` = '$location' AND `house`.`h_type` = '$h_type'; ";
  $data = mysqli_query($connect, $sql_search_ghor);

  if (isset($errMsg)) {
    echo '<div style="color:#FF0000;text-align:center;font-size:17px;">' . $errMsg . '</div>';
  }
  if ($location == 'no_city' or $h_type == 'no_type') {
    if ($location == 'no_city' and $h_type == 'no_type') {
      echo "<h2 class='text-center'> Please select the location and type of estate </h2>";
    } else if ($h_type == 'no_type') {
      echo "<h2 class='text-center'> Please select type of estate </h2>";
    } else {
      echo "<h2 class='text-center'> Please select a location </h2>";
    }
  } else if (mysqli_num_rows($data) > 0) {
    echo "<h2 class='text-center text-uppercase'>List of " . $h_type . " in " . $location . "</h2>";
  } else {
    echo "<h2 class='text-center' style='color:red;'>Sorry no " . $h_type . " is  available in " . $location . "</h2>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style\search.css">
</head>


<body>

  <section id="search">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <?php

          if (empty($_SESSION['u_name']))
          header('Location: index.php');

          if (!isset($_POST['search']) and !isset($_COOKIE['loc'])) {
            echo '<h2 class="section-heading text-uppercase">Search</h2> <h3 class="section-subheading text-muted">Search house, office or market place for hire.</h3>';
          }
          ?>

        </div>
      </div>
      <div class="row ">
        <div class="col-md-12">
          <form action="" method="POST" class="center" novalidate>
            <div class="row">


              <div class="col-md-10">
                <div class="form-group">

                  <select class="form-control form-control-sm" id="location" name="location" size="1" required>
                    <option value="no_city">Please select location for rent purposes</option>
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
                  <br>
                  <select class="form-control form-control-sm" id="h_type" name="h_type" size="1" required>
                    <option value="no_type">Please select house type</option>
                    <option value="house">House</option>
                    <option value="office">Office</option>
                    <option value="market_place">Market place</option>
                  </select>

                  <p class="help-block text-danger"></p>
                </div>
              </div>

              <div class="col-md-2">
                <div class="form-group">
                  <button id="" class="btn btn-success btn-md text-uppercase" name="search" value="search" type="submit">Search</button>
                </div>
              </div>
            </div>
          </form>

          <?php
          foreach ($data as $key => $value) {
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
           
                        
                          </div>';
                          if(! is_added_in_compare($value['h_id']))
                          {
                            echo '<a class=" button_edit_and_update btn btn-warning float-right" href="add2compair.php?id='.$value['h_id'] .'&amp; loc='.$value["city"] .'&amp;h_typ='.$value['h_type'] .'">Add to Compair</a>';
                          
                          }
                          
                          else{
                            echo '<a class=" button_edit_and_update btn btn-warning float-right" >Added</a>';
                          

                          }
                          echo '<a class=" button_edit_and_update btn btn-warning float-right" href="compair.php" " style = "background-color: #008000;" >Compair Now</a>

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