<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Feedback details</title>
        <link rel="stylesheet" href="css.css" type="text/css"/>
        <link rel="shortcut icon" href="ski.ico">
    </head>
    <body>
        <div id="n1" style="width: 1350px;height: 500px"> 

            <header>
                <img src="cit eight.png" width=100px" style="float: left">
                <h1 style="font-size: xx-large;color: steelblue"><center> COIMBATORE INSTITUTE OF TECHNOLOGY </center></h1>
                <h3 style="font-size: medium;color: steelblue"><center>Avinashi Road, Civil Aerodrome Post, Peelamedu, Coimbatore,<br> Tamil Nadu 641014, India</center></h3>
                <div style="height: 40px;background-color: cadetblue"><h1 style="font-size: 30px;color: white;float: inside"><center>ONLINE FEEDBACK SYSTEM</center></h1></div>
                
            </header><br>

            
            <div class="bd">
                <br>
                <div class="slideshow-container">
                    <div class="mySlides fade">
                        <div class="numbertext">1 / 3</div>
                        <img src="CIT one.jpg" style="width:100%;height: 400px">
                    </div>
                    <div class="mySlides fade">
                        <div class="numbertext">2 / 3</div>
                        <img src="cit three.jpg" style="width:100%;height: 400px">
                    </div>
                    <div class="mySlides fade">
                        <div class="numbertext">3 / 3</div>
                        <img src="cit two.jpg" style="width:100%;height: 400px">
                    </div>
                    <a class="prev" onclick="plusSlides(-1)" style="font-size: 50px; font-family: batang"><</a>
                    <a class="next" onclick="plusSlides(1)" style="font-size: 50px; font-family: batang">></a>
                </div>
                <br>
                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span> 
                    <span class="dot" onclick="currentSlide(2)"></span> 
                    <span class="dot" onclick="currentSlide(3)"></span> 
                </div>
                <script>
                    var slideIndex = 1;
                    showSlides(slideIndex);
                    function plusSlides(n) {
                        showSlides(slideIndex += n);
                    }
                    function currentSlide(n) {
                        showSlides(slideIndex = n);
                    }
                    function showSlides(n) {
                        var i;
                        var slides = document.getElementsByClassName("mySlides");
                        var dots = document.getElementsByClassName("dot");
                        if (n > slides.length) {
                            slideIndex = 1
                        }
                        if (n < 1) {
                            slideIndex = slides.length
                        }
                        for (i = 0; i < slides.length; i++) {
                            slides[i].style.display = "none";
                        }
                        for (i = 0; i < dots.length; i++) {
                            dots[i].className = dots[i].className.replace(" active", "");
                        }
                        slides[slideIndex - 1].style.display = "block";
                        dots[slideIndex - 1].className += " active";
                    }

                </script>
                <center><button onclick="document.getElementById('id01').style.display = 'block'" style="width:auto;">LOG IN</button></center>

 <div id="id01" class="modal">

     <form class="modal-content animate" action="login.php" style="width: 500px">
                    <div class="container" >
                        <label><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" name="uname" required>
                        <label><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="psw" required>
                        <button type="submit">Login</button>
                    </div>

                    <div class="container" style="background-color:#f1f1f1">
                        <a href="signup.php">
                            <button type="button" onclick="document.getElementById('id01').style.display = 'none'" class="cancelbtn">New User</button></a>
                            <a href="staff.php" id="centerstaff">
                             <button type="button" onclick="document.getElementById('id01').style.display = 'none'" class="cancelbtn">Staff Login</button></a>
                        <a href="view.php">
                            <button type="button" onclick="document.getElementById('id01').style.display = 'none'" class="cancelbtn" style="float: right">Admin login</button></a>
                    </div>
                </form>
            </div>

            <script>
            // Get the modal
                var modal = document.getElementById('id01');

            // When the user clicks anywhere outside of the modal, close it
                window.onclick = function (event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }
            </script>
        </div> 
            </div>
    </body>
</html>

