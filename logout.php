<?php 

session_start();
session_unset();
session_status();
header ("Location : index.php");
exit();



?>

