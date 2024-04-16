<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="../../js/jquery-3.7.1.min.js"></script>
  <link rel="stylesheet" href="../../foundation/css/foundation.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../../index.css">
  <title>Orders</title>
</head>
<?php


define( 'DB_NAME', 'rivas-lands' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', 'CoolCat2024' );
define( 'DB_HOST', 'localhost' );
?>
<body id="entire">
  <div class="topnav" id="myTopnav">
      <a href="../../index.php" class="active">RIVAS PINESTRAW</a>
      <a href="./about.php">About Us</a>
      <a href="./order-form.php">Order Form</a>
      <a href="./checklist.php">Checklist</a>
      <a href="./description.php">Description</a>
      <a href="./sign-on.php">Sign In</a>
      <a href="javascript:void(0);" class="icon" onclick="hideNav()">
          <i class="fa fa-bars"></i>
      </a>
  </div>
  <br>
  <?php 
    if(!isset($_COOKIE['userid'])) {
        header("Location: ./sign-on.php");
      } else {
        echo "<h5 style='margin: 30px'>Welcome: {$_COOKIE['userid']}</h5><br>";
      }
  ?>
  <br><br>
  
    <h4>
        Orders Recieved
    </h4>
    <br>
  <div id=showOrders></div>

  <script>
        function hideNav() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }

        function deleteOrder(id) {
                $.get("../ajax.php",{"cmd": "delete", "id" : id}, function(data) {
                    $("#showOrders").html(data);
                });
                return(false);
            }
            function showOrders() {
                $.get("../ajax.php",{"cmd": "show"}, function(data) {
                    $("#showOrders").html(data);
                });
                return(false);
            }
            showOrders();
    </script>
</body>
</html>