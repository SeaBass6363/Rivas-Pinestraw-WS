<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="../../js/jquery-3.7.1.min.js"></script>
  <link rel="stylesheet" href="../../foundation/css/foundation.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../../index.css">
  <title>Description</title>
</head>

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
  <h2>Description</h2>
  <form>
    <h5>Who are the Users</h5>
    <p>
      Clients who want to buy landscaping products or have them 
      delivered or installed
    </p>
    <br><br>
    <h5>What is it that you want your users to get out of using the site?</h5>
    <p>
      Landscape Supply information: If they are in an area that we 
      serve; they can fill out a form to request a delivery or 
      installation of our supplies. Which we can log in to get the 
      orders to call them back and schedule a date for the service. 
      They will also get a static overview of the products and services 
      we provide.
    </p>
    <br><br>
    <h5>What problem are you trying to solve for the users of the site?</h5>
    <p>
      The site clients can see all the products and services the company 
      provides to better assess if they want to go with us or another 
      company. This site will take a lot the guesswork out of what is 
      provided at the company and whether or not we service their 
      location for delivery or installation. They can also set up a 
      service without even having to call or go to the location in person. 
    </p>
    <br><br>
    <h5>What are the actions that you want the users to take once they have used your site?</h5>
    <p>
        The actions the users must take are: Seeing an overview of the 
        products and services provided. Getting directions to the 
        company (if wanting to pick up) or choosing a product to be 
        delivered and/or installed at their location Get an alert if 
        they are not within of radius of the service. Fill out a form 
        to set up the service.
    </p>
    <br><br>

  </form>
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