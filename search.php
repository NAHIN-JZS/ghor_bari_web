

<?php
  
  include("nevigation.php");
  require 'con2database.php';
  
  $data = [];
  
  if(isset($_POST['search'])) {
    // Get data from FORM
    $location = $_POST['location'];
  
    $sql_search_ghor = "SELECT * from `house` INNER JOIN `user` ON `house`.`u_id` = `user`.`id` WHERE `house`.`city` = '$location'; ";
    $data = mysqli_query($connect, $sql_search_ghor);

    if(isset($errMsg)){
      echo '<div style="color:#FF0000;text-align:center;font-size:17px;">'.$errMsg.'</div>';
    }
    if(mysqli_num_rows($data) > 0){
      echo "<h2 class='text-center'>List of Apartment Details</h2>";
    }else{
      echo "<h2 class='text-center' style='color:red;'>Try Some other keywords</h2>";
    }
    
  }
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

<section id="search">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Search</h2>
            <h3 class="section-subheading text-muted">Search rooms or homes for hire.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <form action="" method="POST" class="center" novalidate>
              <div class="row">
                

                <div class="col-md-10">
                  <div class="form-group">
                    <!-- <input class="form-control" id="location" type="text" name="location" placeholder="Location" required data-validation-required-message="Please enter location."> -->
                    
                    <select id="location" name="location" size="1">
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
  