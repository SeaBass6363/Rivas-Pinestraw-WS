<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="../../js/jquery-3.7.1.min.js"></script>
  <link rel="stylesheet" href="../../foundation/css/foundation.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../../index.css">
  <title>Checklist Page</title>
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
      <a href="./orders.php">Admin</a>
      <a href="./sign-on.php">Sign In</a>
      <a href="javascript:void(0);" class="icon" onclick="hideNav()">
          <i class="fa fa-bars"></i>
      </a>
  </div>
  <br><br>
  <h2>Order Form</h2>
         
        <form onsubmit="return(insertPerson())">
            Name for Order: <input type="texty" id="ordername"><br>
            Address: <input type="texty" id="address"><br>
            Phone: <input type="texty" id="phone"><br>
            
            <label for="product">Products</label>
            <select name="product" id="product" onchange="makeDisable(this)">
            <option value="" selected disabled hidden>Choose here</option>
            <option value="Pinestraw">Pinestraw</option>
            <option value="Black Mulch">Black Mulch</option>
            <option value="Brown Mulch">Brown Mulch</option>
            <option value="Red Mulch">Red Mulch</option>
            <option value="Top Soil">Top Soil</option>
            </select>
                
            <label for="service">Service</label>
            <select name="service" id="service">
            <option value="" selected disabled hidden>Choose here</option>
            <option value="Delivery">Delivery</option>
            <option value="Installation">Installation</option>
            </select><br><br>

            <label for="quantity">Quantity (min: 20):</label>
            <input type="number" id="quantity" name="quantity" min="20"><br><br>

            Total: $<output name="total" id="total" value="0"></output><br><br>
                    <input type="submit" value="Submit">
        </form>
  <script src="../functions.js"></script>
  <script>
        function hideNav() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
        function insertPerson() {
                ordername = $("#ordername").val();
                address = $("#address").val();
                phone = $("#phone").val();
                product = $("#product").val();
                quantity = $("#quantity").val();
                service = $("#service").val();
                total = $("#total").val();
                // timestamp = $("#timestamp").val();

                if(ordername != '' && address != '' && phone != '' && product != ''&& quantity != ''&& service != ''){
                    $.get("../ajax.php",{"cmd": "create", "ordername" : ordername, "address" : address, "phone" : phone, "product" : product, "quantity" : quantity, "service" : service, "total" : total}, function(data) {
                    $("#showOrders").html(data);
                    });
                    alert("The form was submitted");
                    return(false);
                }
                else{
                    window.alert("Missing Information")
                }
            }
    </script>
</body>
</html>