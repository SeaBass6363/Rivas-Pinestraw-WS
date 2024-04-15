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
        function hideNav() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>
</head>

<body>
    <div class="topnav" id="myTopnav">
        <a href="./index.php" class="active">RIVAS PINESTRAW</a>
        <a href="./src/pages/about.php">About Us</a>
        <a href="./src/pages/order-form.php">Order Form</a>
        <a href="./src/pages/checklist.php">Checklist</a>
        <a href="./src/pages/contact.php">Contact Us</a>
        <a href="./src/pages/sign-on.php">Sign In</a>
        <a href="javascript:void(0);" class="icon" onclick="hideNav()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <div id="entire">
        <div class="grid-x">
            <div id="header" class="cell small-12 medium-12 large-12 text-right">
                <img id = img1 
                src=./public/p_long_img1.jpg>
            </div>
        </div>

        <div class="grid-x">
            <div id="sidebar" class="cell small-12 medium-4 large-4 text-right">
                <h2>For all your landscaping needs!</h2>
                <p id="text">
                    Rivas Pinestraw and landscaping services is located at 3063 Braselton Hwy, Dacula, GA 30519
                </p>
                <p id="text">
                    Call 7 days a week 7 am to 7 pm for pinestraw or mulch installation
                </p>
                <br>
                <div id="map-container" >
                    <div id="map" class="cell small-12 medium-4 large-4 text-right"></div>
                </div>
            </div>
            <div id="body" class="cell small-12 medium-8 large-8 text-right">
                <h1 id="text">Products</h1>
                <div id="products" class="cell small-12 medium-4 large-4 text-right">
                    <a target="_blank" href="./src/pages/order-form.php">
                        <img src="./public/pinestraw.png" width="600" height="400">
                    </a>
                    <div id="desc">Pine Straw</div>
                </div>
                <div id="products" class="cell small-12 medium-4 large-4 text-right">
                    <a target="_blank" href="./src/pages/order-form.php">
                        <img src="./public/black-mulch.png" width="600" height="400">
                    </a>
                    <div id="desc">Black Mulch</div>
                </div>
                <div id="products" class="cell small-12 medium-4 large-4 text-right">
                    <a target="_blank" href="./src/pages/order-form.php">
                        <img src="./public/brown-mulch.png" width="600" height="400">
                    </a>
                    <div id="desc">Brown Mulch</div>
                </div>
                <div id="products" class="cell small-12 medium-4 large-4 text-right">
                    <a target="_blank" href="./src/pages/order-form.php">
                        <img src="./public/red-mulch.png" width="600" height="400">
                    </a>
                    <div id="desc">Red Mulch</div>
                </div>
                <div id="products" class="cell small-12 medium-4 large-4 text-right">
                    <a target="_blank" href="./src/pages/order-form.php">
                        <img src="./public/pinestraw.png" width="600" height="400">
                    </a>
                    <div id="desc">Mini Nuggets</div>
                </div>
                <div id="products" class="cell small-12 medium-4 large-4 text-right">
                    <a target="_blank" href="./src/pages/order-form.php">
                        <img src="./public/top-soil.png" width="600" height="400">
                    </a>
                    <div id="desc">Top Soil</div>
                </div>
            </div>
        </div>
        <div class="grid-x">
            <div id="footer" class="cell small-12 medium-12 large-12 text-right">
                <p id="text">©2024 Hardwood Vazquez, All Rights Reserved</p>
                <p id="text">Design by Hardwood Vazquez</p>
            </div>
        </div>
    </div>
    <script src="./src/map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkW0iGM8DniteJO7xa_yEuJseeFGQJLBM&libraries=geometry&callback=initMap" async defer></script>

</body>
</html>