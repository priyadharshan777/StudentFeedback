<?php


$con = mysqli_connect("localhost","root","","feed");
/* if (!$con) {
  die("could not connect:" . mysql_error());
  }
  if (mysql_query("CREATE DATABASE feed", $con)) {
  echo 'Database created';
  } else { 
  echo 'Error' . mysql_error();
  } */
//create table1
//mysqli_select_db("feed", $con);
//$q = "CREATE TABLE feedbacks(Reg_no varchar(50),Department varchar(10),Sem varchar(3),Sec varchar(2),Sub_code varchar(10),c1 varchar(10),c2 varchar(10),c3 varchar(10),c4 varchar(10),c5 varchar(10),c6 varchar(10),c7 varchar(10),c8 varchar(10),c9 varchar(10),c10 varchar(10),c11 varchar(10),c12 varchar(10),c13 varchar(10),c14 varchar(50))";
//$w = "CREATE TABLE details(Department varchar(10),Year varchar(4),Sem varchar(3),Sec varchar(2))";
//$w = "CREATE TABLE details2(Sub_code varchar(10))";
//$w = "CREATE TABLE details(username varchar(25),password varchar(25),email varchar(25),phone_no varchar(10),department varchar(25),sec varchar(5))";

$a=$_POST['name1'];
$b=$_POST['name2'];
$c=$_POST['name3'];
$d=$_POST['name4'];
$e=$_POST['name5'];
$f=$_POST['remarks'];
$g=$_POST['remarks1'];
$h=$_POST['remarks2'];
$i=$_POST['remarks3'];
$j=$_POST['remarks4'];
$k=$_POST['remarks5'];
$l=$_POST['remarks6'];
$m=$_POST['remarks7'];
$n=$_POST['remarks8'];
$o=$_POST['remarks9'];
$p=$_POST['remarks10'];
$q=$_POST['remarks11'];
$r=$_POST['remarks12'];
$s=$_POST['remarks13'];

//$value=array();

//for($i=0;$i<18;$i++)
//{
    //if($POST[$i+5] == "agree")
    //{ $value[] = 3;
    //}
    //elseif($POST[$i+5]=="neutral")
        //{
        //$value[] = 2;
    //}
    //else{
        //$value[] = 1;
//}

    //}
$s="insert into feedbacks(Reg_no,Department,Sem,Sec,Sub_code,c1,c2,c3,c4,c5,c6,c7,c8,c9,c10,c11,c12,c13,c14) values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o','$p','$q','$r','$s')";
//$s1="insert into finalreport(Reg_no,Department,Sem,Sec,Sub_code,c1,c2,c3,c4,c5,c6,c7,c8,c9,c10,c11,c12,c13,c14) values('$a','$b','$c','$d','$e','$f1','$g2','$h3','$i4','$j5','$k6','$l7','$m8','$n9','$o10','$p11','$q12','$r13','$s14')";

mysqli_query($con,$s);
echo "Your RECORD Created !!";
//include './logout.php';
//mysql_query($q,$con);
mysqli_close($con);
echo "Please wait...";
        header("refresh:3;url=home.php");
?>
