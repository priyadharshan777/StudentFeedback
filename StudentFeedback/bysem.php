<html>
    <head>
        <title>View</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css.css" type="text/css"/>
        <link rel="shortcut icon" href="ski.ico">
        <style>
            table {
                border-collapse: collapse;
                width: 100%;
            }

            th, td {
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even){background-color: #f2f2f2}

            th {
                background-color: #b9d7ee;
                color: white;
            }

            a:hover {
                color: red;
            }
            form {

                alignment-adjust: central;
            }

            input[type=text], input[type=password] {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
            }
            button {
                background-color: cadetblue;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 100%;
            }


            .imgcontainer {
                text-align: center;
                margin: 24px 0 12px 0;
            }

            .container {
                padding: 5px;
            }

            span.psw {
                float: right;
                padding-top: 16px;
            }
            .button {
                border-radius: 4px;
                background-color: #888;
                border: none;
                color: white;
                text-align: center;
                font-size: 18px;
                padding: 20px;
                width: 150px;
                transition: all 0.5s;
                cursor: pointer;
                margin: 5px;
            }

            .button span {
                cursor: pointer;
                display: inline-block;
                position: relative;
                transition: 0.5s;
            }

            .button span:after {
                content: '»';
                position: absolute;
                opacity: 0;
                top: 0;
                right: -20px;
                transition: 0.5s;
            }

            .button:hover span {
                padding-right: 25px;
            }

            .button:hover span:after {
                opacity: 1;
                right: 0;
            }
            .container {
    padding: 16px;
}
        </style>
    </head>
    <body>
         <div id="n1" style="width: 1350px;height: 500px;">
            <header>
           <img src="cit eight.png" width=100px" style="float: left">
                <h1 style="font-size: xx-large;color: steelblue"><center> COIMBATORE INSTITUTE OF TECHNOLOGY </center></h1>
                <h3 style="font-size: medium;color: steelblue"><center>Avinashi Road, Civil Aerodrome Post, Peelamedu, Coimbatore,<br> Tamil Nadu 641014, India</center></h3>
                <div style="height: 40px;background-color: cadetblue"><h1 style="font-size: 30px;color: white;float: inside"><center>ONLINE FEEDBACK SYSTEM</center></h1></div>
                 </header>

            <br>
<?php
$con = mysqli_connect("localhost","root","","feed");
//mysqli_select_db("feed",$con);
@$ab=$_POST['name19'];

echo "<table border='1'>".
       "<tr><th>Register No</th>"."<th>Department</th>"."<th>Semester</th>"."<th>Section</th>"."<th>Sub_Code</th>"."<th>C1</th>"."<th>C2</th>"."<th>C3</th>"."<th>C4</th>"."<th>C5</th>"."<th>C6</th>"."<th>C7</th>"."<th>C8</th>"."<th>C9</th>"."<th>C10</th>"."<th>C11</th>"."<th>C12</th>"."<th>C13</th>"."<th>C14</th></tr>";
       $i="SELECT * from feedbacks where Sem='$ab'";
       $q=mysqli_query($con,$i);
       while($a=  mysqli_fetch_array($q)){
           echo "<tr><td>".$a['Reg_no']."</td><td>".$a['Department']."</td><td>".$a['Sem']."</td><td>".$a['Sec']."</td><td>".$a['Sub_code']."</td><td>".$a['c1']."</td><td>".$a['c2']."</td><td>".$a['c3']."</td><td>".$a['c4']."</td><td>".$a['c5']."</td><td>".$a['c6']."</td><td>".$a['c7']."</td><td>".$a['c8']."</td><td>".$a['c9']."</td><td>".$a['c10']."</td><td>".$a['c11']."</td><td>".$a['c12']."</td><td>".$a['c13']."</td><td>".$a['c14']."</td></tr>";
       }
       echo "</table>";
?>
             <br><br>
            <center>
                <a href="details.php"><input type="submit" name="submit" value="BACK"></a></center>
         </div>
    </body>
</html>
