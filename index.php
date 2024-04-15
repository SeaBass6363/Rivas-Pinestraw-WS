<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./js/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="./foundation/css/foundation.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./index.css">
    
    <title>Rivas Pinestraw</title>
    
    <script>
        $( document ).ready(function() {
            $("#alert").on("click", createAlert);
            $("#update").on("click", changeBodyText);
             
            function createAlert() {
                alert("Hello World!");
            }
            function changeBodyText() {
                $("#body").html("<h2 id=text>I have changed!<h2>");
            }
                     
        });
    </script>

    <?php
        require("./src/functions.php")   
    ?>
</head>

<body>
    <div id="entire">
        <div class="topnav" id="myTopnav">
                <a href="./index.php" class="active">RIVAS PINESTRAW</a>
                <a href="#about">About Us</a>
                <a href="#order">Order Form</a>
                <a href="#checklist">Checklist</a>
                <a href="#contact">Contact Us</a>
                <a href="#signin">Sign In</a>
                <a href="javascript:void(0);" class="icon" onclick="hideNav()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
        <div class="grid-x">
            <div id="header" class="cell small-12 medium-12 large-12 text-right">
                <img id = img1 
                src=./public/p_long_img1.jpg>
            </div>
        </div>

        <div class="grid-x">
            <div id="sidebar" class="cell small-12 medium-4 large-4 text-right">
                <p id="text">
                    
                </p>
            </div>
            <div id="body" class="cell small-12 medium-8 large-8 text-right">
                <h2 id="text">Content Page 1</h2>
                <p id="text">This is the current time and date (Refresh to get new current time and date):<br><?php currentDateTime(); ?></p>
            </div>
        </div>
        <div class="grid-x">
            <div id="footer" class="cell small-12 medium-12 large-12 text-right">
                <p id="text">©2024 Hardwood Vazquez, All Rights Reserved</p>
                <p id="text">Design by Hardwood Vazquez</p>
            </div>
        </div>
    </div>
    <script>
function hideNav() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
</body>
</html>