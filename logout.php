<?php   
session_start(); 
session_destroy(); 

setcookie("compair_values", "", time() - 3600, "/" );
setcookie("loc", "", time() - 3600, "/" );
setcookie("h_type", "", time() - 3600, "/" );

header("location:index.php"); 

?>