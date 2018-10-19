<html>
    <head>
        <title>View</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css.css" type="text/css"/>
        <link rel="shortcut icon" href="ski.ico">
        <style>
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
        <div id="n1" style="width: 1350px;"> 
            <header>
           <img src="cit eight.png" width=100px" style="float: left">
                <h1 style="font-size: xx-large;color: steelblue"><center> COIMBATORE INSTITUTE OF TECHNOLOGY </center></h1>
                <h3 style="font-size: medium;color: steelblue"><center>Avinashi Road, Civil Aerodrome Post, Peelamedu, Coimbatore,<br> Tamil Nadu 641014, India</center></h3>
                <div style="height: 40px;background-color: cadetblue"><h1 style="font-size: 30px;color: white;float: inside"><center>ONLINE FEEDBACK SYSTEM</center></h1></div>
                  </header>

            <center>
                <form style="width: 400px;padding-top: 50px" action="bydept.php" method="POST">
                    <fieldset>
                        <legend><h3>VIEW DETAILS BY DEPARTMENT</h3></legend>
                        <div style="width: 200px;float: left">
                            
                            <h3>Department:</h3>                            
                                                        
                        </div>
                        <div style="width: 200px;float: left">
                            <h3><select name="name8" required>
                                            <option value="MCA" >MCA</option> 
                                            <option value="CSE" >CSE</option>
                                            <option value="MECH">MECH</option>
                                            <option value="EEE" >EEE</option>
                                            <option value="ECE" >ECE</option>
                                        </select></h3>
                            
                           
                        </div>
                        <div class="container" style="width: 450px;float: left">
                            <button class="button" type="submit" ><span>SUBMIT</span></button>
                        </div>
                    </fieldset>
                </form> 
                </center>
            <center>
                <form style="width: 400px;padding-top: 50px" action="bycode.php" method="POST">
                    <fieldset>
                        <legend><h3>VIEW DETAILS BY SUBJECT CODE</h3></legend>
                        <div style="width: 200px;float: left">
                            <br>
                            <h3>Subject Code:</h3>                            
                                                        
                        </div>
                        <div style="width: 200px;float: left">
                            <br>
                            <h3><select name="name9" required>
                                            <option value="15MCA41">15MCA41</option>
                                            <option value="15MCA42">15MCA42</option>
                                            <option value="15MCA43">15MCA43</option>    
                                            <option value="15MCA44">15MCA44</option>
                                            <option value="15MCA45">15MCA45</option>
                                            <option value="11UCK506">11UCK506</option>
                                            <option value="11UCK507">11UCK507</option>
                                        </select></h3>
                            
                           
                        </div>
                        <div class="container" style="width: 450px;float: left">
                            <button class="button" type="submit" ><span>SUBMIT</span></button>
                        </div>
                    </fieldset>
                </form>
            </center>    
                <center>
                <form style="width: 400px;padding-top: 50px" action="byclass.php" method="POST">
                    <fieldset>
                        <legend><h3>VIEW DETAILS BY CLASS</h3></legend>
                        <div style="width: 200px;float: left">
                            
                            <h3>Department:</h3>        
                            <h3>Section:</h3>                            
                                                        
                        </div>
                        <div style="width: 200px;float: left">
                            <h3><select name="name10" required>
                                            <option value="ECE" >MCA</option>
                                            <option value="CSE" >CSE</option>
                                            <option value="MECH">MECH</option>
                                            <option value="EEE" >EEE</option>
                                            <option value="ECE" >ECE</option>
                                        </select></h3>
                            <h3><select name="name11" required>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                        </select></h3>
                        </div>
                        <div class="container" style="width: 450px;float: left">
                            <button class="button" type="submit" ><span>SUBMIT</span></button>
                        </div>
                    </fieldset>
                </form> 
                </center>
            <center>
                 <form style="width: 400px;padding-top: 50px" action="bysem.php" method="POST">
                    <fieldset>
                        <legend><h3>VIEW DETAILS BY SEMESTER</h3></legend>
                        <div style="width: 200px;float: left">
                            
                            <h3>Semester:</h3>
                                                                             
                        </div>
                        <div style="width: 200px;float: left">
                            <h3>
                                <select name="name19" required>
                                            <option value="1" >1</option>
                                            <option value="2" >2</option>
                                            <option value="3" >3</option>
                                            <option value="4" >4</option>
                                            <option value="5" >5</option>
                                            <option value="6" >6</option>
                                            <option value="7" >7</option>
                                            <option value="8" >8</option>
                                </select>
                            </h3>
                        </div>
                        <div class="container" style="width: 450px;float: left">
                            <button class="button" type="submit" ><span>SUBMIT</span></button>
                        </div>
                    </fieldset>
                </form> 
                </center>
            <center><a href="logout.php" style="padding-left: 85px"><button type="button" style="width: 100px;background-color: #bbb;">LOG OUT</button></a>  &nbsp;<a href="analyze.php" style="padding-left: 85px"><button type="button" style="width: 100px;background-color: #bbb;">Analyze</button></a> </center>
        </div>
    </body>
</html>
