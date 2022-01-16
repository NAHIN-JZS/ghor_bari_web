<?php
    
include("nevigation.php");

function to_fetch($com_id){
        
    require 'con2database.php';

    $data = [];
    $sql_fetch_compair = "SELECT * from `house` INNER JOIN `user` ON `house`.`u_id` = `user`.`id` WHERE `house`.`h_id` = '$com_id'; ";
    $data = mysqli_query( $connect, $sql_fetch_compair);

    foreach ($data as $key => $value){
        echo '<div class="card card-inverse card-info mb-3" style="padding:1%;">          
                        <div class="card-block">';
            echo   '<div class="row row_style">
                        <div class="col-1">
                        <p class="text-center">'.$value["h_id"].'</p>
                        </div>
                
                        <div class="col-2">
                        <p class="text-center ">'.$value["name"].'</p>
                        </div>
                        
                        <div class="col-2">
                        <p class="text-center">'.$value["cost"].'</p>
                        </div>
                
                        <div class="col-1">
                        <p class="text-center">'.$value["total_room"].'</p>
                        </div>
                
                        <div class="col-2">
                        <p class="text-center">'.$value["size"].'</p>
                        </div>

                        <div class="col-1">
                        <p class="text-center text-uppercase ">'.$value["h_type"].'</p>
                        </div>
                
                        <div class="col-2">
                        <p class="text-center text-uppercase">'.$value["city"].'</p>
                        </div>

                        <div class="col-1">
                        <a class=" button_edit_and_update btn btn-warning float-right" href="view_estate.php?vh_id=' . $value['h_id'] . '">Details</a>
                        </div>
                        
                          </div>
                         </div>
                      </div>';
    }

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Compair</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style\search.css">
</head>


<body>


<?php

if (empty($_SESSION['u_name']))
    header('Location: index.php');

    if(isset($_COOKIE["compair_values"])){

        
        echo '<div class="card card-inverse card-info mb-3" style="padding:1%;">          
        <div class="card-block">
        <div class="row row_style">

            <div class="col-1">
            <h5 class="text-center text-uppercase">House No</h5>
            </div>

            <div class="col-2">
            <h5 class="text-center text-uppercase">Owner Name</h5>
            </div>
            
            <div class="col-2">
            <h5 class="text-center text-uppercase">Rent Fare</h5>
            </div>

            <div class="col-1">
            <h6 class="text-center text-uppercase">Available Rooms</h6>
            </div>

            <div class="col-2">
            <h5 class="text-center text-uppercase">Size</h5>
            </div>

            <div class="col-1">
            <h5 class="text-center text-uppercase">Esate Type</h5>
            </div>

            <div class="col-2">
            <h5 class="text-center text-uppercase">City</h5>
            </div>

            
        </div>
        </div>';
            


        $comapir_ids = json_decode($_COOKIE["compair_values"],true);

        foreach($comapir_ids as $id){
            to_fetch($id);
        }
    
        echo '<div >
        <a class=" button_edit_and_update btn btn-warning float-right" href="search.php" >Continue Search</a>
        
        <a class=" button_edit_and_update btn btn-warning float-right" href="clear_all_compair.php" " style = "background-color: 	#FF00FF;">Clear All</a>
        </div>';
        
    
    }
    else{

        echo '<h3 class = "text-center" > Please go to search page to add in compair </h3><br>';
        echo '<div  style="text-align: center"; >
        <a class=" btn btn-warning"  href="search.php"  >Go to Search Page</a>
        </div>';
        // echo '<a class=" btn btn-warning" style="text-align: center"; href="search.php" >Go to Search</a>';
    

    }
?>

</body>
</html>
    