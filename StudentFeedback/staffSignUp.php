<?php
$con = mysqli_connect("localhost","root","","feed");
//mysqli_select_db("feed", $con);

$s="INSERT INTO staff(user_name,password,department,section) VALUES('$_POST[name]','$_POST[password]','$_POST[dept]','$_POST[sec]')";
mysqli_query($con,$s);
include './home1.php';
mysqli_close($con);
?>
