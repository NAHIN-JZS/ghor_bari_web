<?php

session_start();

$ServerName = "localhost";
$Username = "root";
$passward = "";
$dbName = "ghor_bari";

$connect = mysqli_connect($ServerName, $Username, $passward, $dbName);
//echo "Connected to Database";


?>