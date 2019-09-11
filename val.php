<?php
include_once 'connect.php';


$time =$_POST["time"];

$c = $_POST["b"];
$response =strip_tags( $_POST["a"]);
 $t = mysqli_query($con, "INSERT INTO task VALUES('','$time','$c','$response')");
?>
