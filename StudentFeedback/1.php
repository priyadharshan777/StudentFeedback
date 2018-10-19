<?php
$con = mysqli_connect("localhost","root","","feed");
//mysqli_select_db("feed", $con);

$s="INSERT INTO details(username,password,email,phone_no,department,sec) VALUES('$_POST[name]','$_POST[password]','$_POST[email]','$_POST[number]','$_POST[dept]','$_POST[sec]')";
mysqli_query($con,$s);
include './home1.php';
mysqli_close($con);
?>
