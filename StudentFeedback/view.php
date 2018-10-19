<html>
    <head>
        <title>View</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css.css" type="text/css"/>
        <link rel="shortcut icon" href="ski.ico">
        <style>
form {
    border: 3px solid #f1f1f1;
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

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
.button1 {
  border-radius: 4px;
  background-color: darkcyan;
  border: none;
  color: #ccc;
  text-align: center;
  font-size: 26px;
  alignment-adjust: central;
  width: 100%;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button1 span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button1 span:after {
  content: '»';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button1:hover span {
  padding-right: 25px;
}

.button1:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
    </head>
    <body>
        <div id="n1" style="width: 1350px;height: 500px"> 
        <header>
       <img src="cit eight.png" width=100px" style="float: left">
                <h1 style="font-size: xx-large;color: steelblue"><center> COIMBATORE INSTITUTE OF TECHNOLOGY </center></h1>
                <h3 style="font-size: medium;color: steelblue"><center>Avinashi Road, Civil Aerodrome Post, Peelamedu, Coimbatore,<br> Tamil Nadu 641014, India</center></h3>
                <div style="height: 40px;width: 100%;background-color: cadetblue"><h1 style="font-size: 30px;color: white;float: inside"><center>ONLINE FEEDBACK SYSTEM</center></h1></div>
                    </header>
            
            <br><br>
            <center>
                <form action="login1.php" style="width: 500px;">
  
  <div class="container">
      <label><h3 style="float: left">Username</h3></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label><h3 style="float: left">Password</h3></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <a href=""><button type="submit">Login</button></a>
   
  </div>

  
</form>
              
   
  </div>

            </center>
        </div>    
    </body>
</html>


