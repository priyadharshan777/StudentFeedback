<html>
    <head>
        <title>Entry</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            .button {
                border-radius: 4px;
                background-color: #888;
                border: none;
                color: white;
                text-align: center;
                font-size: 20px;
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
        <div id="n1" style="width: 1350px;height: 500px;">
            <header>
            <img src="cit eight.png" width=100px" style="float: left">
                <h1 style="font-size: xx-large;color: steelblue"><center> COIMBATORE INSTITUTE OF TECHNOLOGY </center></h1>
                <h3 style="font-size: medium;color: steelblue"><center>Avinashi Road, Civil Aerodrome Post, Peelamedu, Coimbatore,<br> Tamil Nadu 641014, India</center></h3>
                <div style="height: 40px;background-color: cadetblue"><h1 style="font-size: 30px;color: white;float: inside"><center>ONLINE FEEDBACK SYSTEM</center></h1></div>
                 </header>

            <br>
            <h1 style="text-align: center;font-size: 26px;color: slategray;text-decoration: underline ">PROCEDURE TO BE FOLLOWED</h1>
            <ul type="none" style="text-align: center">

                <li><h3 style="color: #999">Choose the "DEPARTMENT" which you belong to.</h3></li>
                <li><h3 style="color: #999">Choose the "YEAR" of study which you are undergoing.</h3></li>
                <li><h3 style="color: #999">Choose the "SECTION" which you belong to.</h3></li>
                <li><h3 style="color: #999">Enter the "SUBJECT CODE" and "SUBJECT NAME".</h3></li>
                <li><h3 style="color: #999">In the next window choose the option between "Fair,Good&Excelent".</h3></li>
                <li><h3 style="color: #999">Fair represents the teaching of the staffs must be more improved.</h3></li>
                <li><h3 style="color: #999">Good represents the teaching of the staffs must be improved.</h3></li>
                <li><h3 style="color: #999">Excellent represents the teaching of the staffs must be maintained.</h3></li>
                <li><h3 style="color: #999">Click "SUBMIT" button to update the feedback.</h3></li>                

            </ul>
            <center>
                <div class="container" style="width: 450px;">
                    <a href="feeddetails.php"<button class="button"><span>PROCEED</span></button></a>
                </div>
            </center>
        </body>
</html>

