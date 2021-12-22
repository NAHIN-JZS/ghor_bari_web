<?php

    session_start();
    require 'con2database.php';
    $house_id = $_GET['id'];
    //echo $house_id;

    $sql_delete_ghor = "DELETE FROM `house` WHERE `house`.`h_id` = '$house_id';";
    if (mysqli_query($connect, $sql_delete_ghor)) {
		//echo $house_id." deleted successfully";
		header("Location: owner_registered_ghor.php" );
		//header('location:owner_registered_ghor.php'); 
	  } else {
		echo "Error: " . $sql_delete_ghor . "<br>" . mysqli_error($connect);
	  }

?>