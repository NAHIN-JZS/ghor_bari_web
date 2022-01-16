<?php

    require 'con2database.php';

    $house_id = $_GET['id'];
    $location = $_GET['loc'];
    $h_typ = $_GET['h_typ'];

    if (isset($_COOKIE["compair_values"])){
        $compair = json_decode($_COOKIE["compair_values"],true);
       
    }

    else{
        $compair = array();
        
    }
    
    if(! in_array($house_id,$compair)){
        array_push($compair, $house_id);
    }

    
    setcookie("compair_values", json_encode($compair), time() + (86400 * 30), "/" );   

    setcookie("loc", $location, time() + 300, "/" ); 
    setcookie("h_type", $h_typ, time() + 300, "/" ); 

    //echo $_COOKIE['loc'];

    //echo $compair[0];

    //echo $test;
	header("Location: search.php" );
		

?>