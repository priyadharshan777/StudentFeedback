<html>
    <head>
        <title>Entry</title>
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
                font-size: 20px;
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

            select:focus {
  width: 900px;
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
            <h1 style="text-align: center;font-size: 26px;color: slategray;text-decoration: underline ">ENTER THE DETAILS</h1>
            <div style="width: 1000px;float: inside">
                <form style="padding-top: 50px" action="creating.php" method="POST">
                    <center>
                        <div style="width: 900px;padding-left: 150px;height: 400px">
                            <table border="0" style="width: 900px">
                                <tr>
                                    <td><h3>Register No:</h3></td>
                                    <td><input type="text" name="name1" placeholder="Enter the Register Number" required></td>
                                </tr>
                                <tr><td><h3>Department:</h3></td>
                                    <td>    
                                        <select name="name2" required>
                                            <option value="MCA" >MCA</option>
                                            <option value="CSE" >CSE</option>
                                            <option value="MECH">MECH</option>
                                            <option value="EEE" >EEE</option>
                                            <option value="ECE" >ECE</option>
                                        </select>
                                </td>
                                </tr>
                                <tr>
                                    <td><h3>Semester:</h3></td>
                                    <td><select name="name3" required>
                                            <option value="1" >1</option>
                                            <option value="2" >2</option>
                                            <option value="3" >3</option>
                                            <option value="4" >4</option>
                                            <option value="5" >5</option>
                                            <option value="6" >6</option>
                                            <option value="7" >7</option>
                                            <option value="8" >8</option>
                                        </select></td>
                                </tr>
                                <tr>
                                    <td><h3>Section:</h3></td>
                                    <td><select name="name4" required>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><h3>Subject Code:</h3></td>
                                    <td><select name="name5" required>
                                            <option value="15MCA41">15MCA41</option>
                                            <option value="15MCA42">15MCA42</option>
                                            <option value="15MCA43">15MCA43</option>    
                                            <option value="15MCA44">15MCA44</option>
                                            <option value="15MCA45">15MCA45</option>
                                            <option value="11UCK506">11UCK506</option>
                                            <option value="11UCK507">11UCK507</option>
                                            
                                        </select></td>
                                </tr>
                            </table>
                        </div>
                        </div>
                        <div style="width: 1000px;padding-left: 150px">
                            <h1 style="color: #999">Enter your suggestion's:*</h1>
                            <table border="1" style="font-size: 16px;width: 1000px">
                                <tr>
                                    <th>Characteristics</th>
                                    <th>Agree</th>
                                    <th>Neutral</th>
                                    <th>Disagree</th>
                                </tr>
                                <tr>
                                    <td><b>Was the syllabus challenging?</b></td>
                                    <td><input type="radio" name="remarks" value="3"></td>
                                    <td><input type="radio" name="remarks" value="2"></td>
                                    <td><input type="radio" name="remarks" value="1"></td>
                                </tr>
                                <tr>
                                    <td><b>Was the course easy to understand?</b></td>
                                    <td><input type="radio" name="remarks1" value="3"></td>
                                    <td><input type="radio" name="remarks1" value="2"></td>
                                    <td><input type="radio" name="remarks1" value="1"></td>
                                </tr>
                                <tr>
                                    <td><b>Was the syllabus fully covered by the teacher?</b></td>
                                    <td><input type="radio" name="remarks2" value="3"></td>
                                    <td><input type="radio" name="remarks2" value="2"></td>
                                    <td><input type="radio" name="remarks2" value="1"></td>
                                </tr>
                                <tr>
                                    <td><b>Was the teacher well prepared for class?</b></td>
                                    <td><input type="radio" name="remarks3" value="3"></td>
                                    <td><input type="radio" name="remarks3" value="2"></td>
                                    <td><input type="radio" name="remarks3" value="1"></td>
                                </tr>
                                <tr>
                                    <td><b>Was the teacher able to communicate at your level of understanding?</b></td>
                                    <td><input type="radio" name="remarks4" value="3"></td>
                                     <td><input type="radio" name="remarks4" value="2"></td>
                                    <td><input type="radio" name="remarks4" value="1"></td> 
                                </tr>
                                <tr>
                                    <td><b>Did the teacher encourage student participation in class?</b></td>
                                    <td><input type="radio" name="remarks5" value="3"></td>
                                    <td><input type="radio" name="remarks5" value="2"></td>
                                    <td><input type="radio" name="remarks5" value="1"></td> 
                                </tr>
                                 <tr>
                                    <td><b>Did the teacher encourage question, discussion inside/outside class?</b></td>
                                    <td><input type="radio" name="remarks6" value="3"></td>
                                    <td><input type="radio" name="remarks6" value="2"></td>
                                    <td><input type="radio" name="remarks6" value="1"></td> 
                                </tr>
                                 <tr>
                                    <td><b>Does the teacher provide feedback on your performance?</b></td>
                                    <td><input type="radio" name="remarks7" value="3"></td>
                                    <td><input type="radio" name="remarks7" value="2"></td>
                                    <td><input type="radio" name="remarks7" value="1"></td> 
                                 </tr>
                                 <tr>
                                    <td><b>Is the smart board presentation is useful?</b></td>
                                    <td><input type="radio" name="remarks8" value="3"></td>
                                    <td><input type="radio" name="remarks8" value="2"></td>
                                    <td><input type="radio" name="remarks8" value="1"></td> 
                                 </tr>
                                 <tr>
                                    <td><b>Does the internal assessment improve your course</b></td>
                                    <td><input type="radio" name="remarks9" value="3"></td>
                                    <td><input type="radio" name="remarks9" value="2"></td>
                                    <td><input type="radio" name="remarks9" value="1"></td> 
                                </tr>
                                 <tr>
                                    <td><b>Can you apply the theoretical knowledge inside our college?</b></td>
                                    <td><input type="radio" name="remarks10" value="3"></td>
                                    <td><input type="radio" name="remarks10" value="2"></td>
                                    <td><input type="radio" name="remarks10" value="1"></td> 
                                </tr>
                                 <tr>
                                    <td><b>Can you solve the real world problem with this knowledge?</b></td>
                                    <td><input type="radio" name="remarks11" value="3"></td>
                                    <td><input type="radio" name="remarks11" value="2"></td>
                                    <td><input type="radio" name="remarks11" value="1"></td> 
                                </tr>
                                <tr>
                                    <td><b>Are you satisfied with the course?</b></td>
                                    <td><input type="radio" name="remarks12" value="3"></td>
                                    <td><input type="radio" name="remarks12" value="2"></td>
                                    <td><input type="radio" name="remarks12" value="1"></td> 
                                </tr>
                                
                            </table>
                            <h3>
                                    Comment:<input type="text" name="remarks13" required>  
                                </h3>
                        </div>
                        <br><center>
                            <div class="container" style="width: 450px;">
                                <button class="button1" type="submit"><span>SUBMIT</span></button>
                            </div>
                        </center>
                </form> 
            </div> 
    </body>
</html>

