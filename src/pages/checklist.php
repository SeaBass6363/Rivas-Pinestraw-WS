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

<body>
  <div class="topnav" id="myTopnav">
      <a href="../../index.php" class="active">RIVAS PINESTRAW</a>
      <a href="./about.php">About Us</a>
      <a href="./order-form.php">Order Form</a>
      <a href="./checklist.php">Checklist</a>
      <a href="./contact.php">Contact Us</a>
      <a href="./sign-on.php">Sign In</a>
      <a href="javascript:void(0);" class="icon" onclick="hideNav()">
          <i class="fa fa-bars"></i>
      </a>
  </div>
  <h2>Checklist Page</h2>
  <form>
    <ul>Database Usage
        <li class="container">
            <a href="../../index.php">Homepage</a>
            <input type="checkbox">
            <span class="checkmark"></span>
        </li>
        <li class="container">
            <a href="../../index.php">Homepage</a>
            <input type="checkbox">
            <span class="checkmark"></span>
        </li>
        <li class="container">
            <a href="../../index.php">Homepage</a>
            <input type="checkbox">
            <span class="checkmark"></span>
        </li>
        <li class="container">
            <a href="../../index.php">Homepage</a>
            <input type="checkbox">
            <span class="checkmark"></span>
        </li>
    </ul>
    <ul>Database Usage
        <li class="container">
            <a href="../../index.php">Homepage</a>
            <input type="checkbox">
            <span class="checkmark"></span>
        </li>
        <li class="container"> 
            <a href="../../index.php">Homepage</a>
            <input type="checkbox">
            <span class="checkmark"></span>
        </li>
        <li class="container">
            <a href="../../index.php">Homepage</a>
            <input type="checkbox">
            <span class="checkmark"></span>
        </li>
        <li class="container">
            <a href="../../index.php">Homepage</a>
            <input type="checkbox">
            <span class="checkmark"></span>
        </li>
    </ul>
    <ul>Database Usage
        <li class="container">
            <a href="../../index.php">Homepage</a>
            <input type="checkbox">
            <span class="checkmark"></span>
        </li>
        <li class="container">
            <a href="../../index.php">Homepage</a>
            <input type="checkbox">
            <span class="checkmark"></span>
        </li>
        <li class="container">
            <a href="../../index.php">Homepage</a>
            <input type="checkbox">
            <span class="checkmark"></span>
        </li>
        <li class="container">
            <a href="../../index.php">Homepage</a>
            <input type="checkbox">
            <span class="checkmark"></span>
        </li>
    </ul>
    <!-- <label class="container">
        <a href="../../index.php">Homepage</a>
        <input type="checkbox">
        <span class="checkmark"></span>
    </label>
    <label class="container">
        <a href="./description.php">Description Page</a>
        <input type="checkbox">
        <span class="checkmark"></span>
    </label>
    <label class="container">
    <a href="./order-form.php">Order Form</a>
        <input type="checkbox">
        <span class="checkmark"></span>
    </label>
    <label class="container">
        <a href="./sign-on.php">Sign In</a>
        <input type="checkbox">
        <span class="checkmark"></span>
    </label>
    <label class="container">
        <a href="./sign-on.php">Sign In</a>
        <input type="checkbox">
        <span class="checkmark"></span>
    </label> -->
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