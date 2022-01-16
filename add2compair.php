<?php

    require 'con2database.php';

    $house_id = $_GET['id'];

    if (isset($_COOKIE["compair_values"])){
        $compair = json_decode($_COOKIE["compair_values"],true);
       
    }

    else{
        $compair = array();
        
    }
    
    array_push($compair, $house_id);
    setcookie("compair_values", json_encode($compair), time() + (86400 * 30), "/" );   

    //echo $compair[0];

    //echo $test;
	header("Location: search.php" );
		

?>