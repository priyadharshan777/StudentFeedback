<?php

error_reporting(0);
session_start();
$username=$_REQUEST['uname'];
$password=$_REQUEST['psw'];
//echo $username ."<br>";
//echo $password ."<br>";
if($username&&$password)
{
    $con=  mysqli_connect("localhost","root","","feed") or die(mysql_error());
   // $db=  mysqli_select_db("feed")or die(mysql_error());
    $q=mysqli_query($con,"SELECT username,password FROM login WHERE username='$username' AND password='$password'");
    $num=  mysqli_num_rows($q);
    //echo $num;
    if($num==1)
    {
        
        $_SESSION['username']=$username;
        echo "Please wait...";
        header("refresh:3;url=details.php");
    }
    else
    {
        echo "Invalid username or password";
                header("refresh:3;url=view.php");

    }
}

else{
    die("Enter the username and the password");
}



