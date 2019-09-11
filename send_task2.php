<?php
include_once 'connect.php';

$answer = 0;
$time =$_POST["time"];
$response =$_POST["a"];
$id = $_POST["b"];
$ar = array("300","400","500", "600","700","800","900");
foreach ($ar as $ans ) {
	if($id == $ans){
		$answer = 1;
	}
}
$r = strip_tags($response);
 $t = mysqli_query($con, "INSERT INTO task2 VALUES('','$time','$r','$answer')");
?>
