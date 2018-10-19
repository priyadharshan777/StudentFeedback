<html>
    <head>
        <title>Sign up</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <style>
            .button {
                border-radius: 4px;
                background-color: #888;
                border: none;
                color: white;
                text-align: center;
                font-size: 28px;
                padding: 20px;
                width: 200px;
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
        <div id="n1" style="width: 1350px;height: 500px"> 
            <header>
          <img src="cit eight.png" width=100px" style="float: left">
                <h1 style="font-size: xx-large;color: steelblue"><center> COIMBATORE INSTITUTE OF TECHNOLOGY </center></h1>
                <h3 style="font-size: medium;color: steelblue"><center>Avinashi Road, Civil Aerodrome Post, Peelamedu, Coimbatore,<br> Tamil Nadu 641014, India</center></h3>
                <div style="height: 40px;background-color: cadetblue"><h1 style="font-size: 30px;color: white;float: inside"><center>ONLINE FEEDBACK SYSTEM</center></h1></div>
                  </header>
            <center>
                <form style="width: 450px;padding-top: 50px" action="1.php" method="POST">
                    <fieldset>
                        <legend><h3>NEW USER</h3></legend>
                        <div style="width: 200px;float: left">
                            <h3>User Name:</h3> 
                            <h3>Password:</h3>
                            <h3>Email: </h3>
                            <h3>Phone No:</h3>
                            <h3>Department:</h3>
                            <h3>Section:</h3>
                        </div>
                        <div style="width: 200px;float: left">
                            <h3><input type="text" name="name"></h3>
                            <h3><input type="password" name="password"></h3>
                            <h3><input type="email" name="email"></h3>
                            <h3><input type="text" name="number"></h3>
                            <h3><input type="text" name="dept" value="CSE"></h3>
                            <h3><input type="text" name="sec"></h3>
                        </div>
                        <div class="container" style="width: 450px;float: left">
                            <button class="button"  ><span>REGISTER</span></button>
                        </div>
                    </fieldset>
                </form>
                      
                <form style="width: 450px;padding-top: 50px" action="staffSignUp.php" method="POST">
                    <fieldset>
                        <legend><h3>NEW USER</h3></legend>
                        <div style="width: 200px;float: left">
                            <h3>User Name:</h3> 
                            <h3>Password:</h3>
                            <h3>Department:</h3>
                            <h3>Section:</h3>
                        </div>
                        <div style="width: 200px;float: left">
                            <h3><input type="text" name="name"></h3>
                            <h3><input type="password" name="password"></h3>
                            <h3><input type="text" name="dept" value="CSE"></h3>
                            <h3><input type="text" name="sec"></h3>
                        </div>
                        <div class="container" style="width: 450px;float: left">
                            <button class="button"  ><span>REGISTER</span></button>
                        </div>
                    </fieldset>
                </form>    
           
            </center>
        </div>
    </body>
</html>
