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
  <h2>Checklist</h2>
<form id="list">
    <ul >Database Usage
        <li>
            <a href="../../index.php">Homepage</a>
            <input type="checkbox">
        </li>
        <li>
            <a href="./about.php">About Us</a>
            <input type="checkbox">
        </li>
        <li>
            <a href="./order-form.php">Order Form</a>
            <input type="checkbox" Checked>
        </li>
        <li>
            <a href="./description.php">Description</a>
            <input type="checkbox">
        </li>
        <li>
            <a href="./sign-on.php">Sign In</a>
            <input type="checkbox" Checked>
        </li>
        <li>
            <a href="./orders.php">Membership Area</a>
            <input type="checkbox" Checked>
        </li>
    </ul>

    <ul >Ajax Usage
        <li>
            <a href="../../index.php">Homepage</a>
            <input type="checkbox">
        </li>
        <li>
            <a href="./about.php">About Us</a>
            <input type="checkbox">
        </li>
        <li>
            <a href="./order-form.php">Order Form</a>
            <input type="checkbox" Checked>
        </li>
        <li>
            <a href="./description.php">Description</a>
            <input type="checkbox">
        </li>
        <li>
            <a href="./sign-on.php">Sign In</a>
            <input type="checkbox" Checked>
        </li>
        <li>
            <a href="./orders.php">Membership Area</a>
            <input type="checkbox" Checked>
        </li>
    </ul>

    <ul >Theme
        <li>
            <a href="../../index.php">Homepage</a>
            <input type="checkbox" Checked>
        </li>
        <li>
            <a href="./about.php">About Us</a>
            <input type="checkbox" Checked>
        </li>
        <li>
            <a href="./order-form.php">Order Form</a>
            <input type="checkbox" Checked>
        </li>
        <li>
            <a href="./description.php">Description</a>
            <input type="checkbox" Checked>
        </li>
        <li>
            <a href="./sign-on.php">Sign In</a>
            <input type="checkbox" Checked>
        </li>
        <li>
            <a href="./orders.php">Membership Area</a>
            <input type="checkbox" Checked>
        </li>
    </ul>
    <ul >New Library Usage
        <li>
            <a href="../../index.php">Homepage</a>
            <input type="checkbox" Checked>
        </li>
        <li>
            <a href="./about.php">About Us</a>
            <input type="checkbox">
        </li>
        <li>
            <a href="./order-form.php">Order Form</a>
            <input type="checkbox">
        </li>
        <li>
            <a href="./description.php">Description</a>
            <input type="checkbox">
        </li>
        <li>
            <a href="./sign-on.php">Sign In</a>
            <input type="checkbox">
        </li>
        <li>
            <a href="./orders.php">Membership Area</a>
            <input type="checkbox">
        </li>
    </ul>
    <ul >Javascript Usage
        <li>
            <a href="../../index.php">Homepage</a>
            <input type="checkbox" Checked>
        </li>
        <li>
            <a href="./about.php">About Us</a>
            <input type="checkbox">
        </li>
        <li>
            <a href="./order-form.php">Order Form</a>
            <input type="checkbox" Checked>
        </li>
        <li>
            <a href="./description.php">Description</a>
            <input type="checkbox">
        </li>
        <li>
            <a href="./sign-on.php">Sign In</a>
            <input type="checkbox" Checked>
        </li>
        <li>
            <a href="./orders.php">Membership Area</a>
            <input type="checkbox" Checked>
        </li>
    </ul>
    <ul >Membership Area
        <li>
            <a href="../../index.php">Homepage</a>
            <input type="checkbox">
        </li>
        <li>
            <a href="./about.php">About Us</a>
            <input type="checkbox">
        </li>
        <li>
            <a href="./order-form.php">Order Form</a>
            <input type="checkbox">
        </li>
        <li>
            <a href="./description.php">Description</a>
            <input type="checkbox">
        </li>
        <li>
            <a href="./sign-on.php">Sign In</a>
            <input type="checkbox">
        </li>
        <li>
            <a href="./orders.php">Membership Area</a>
            <input type="checkbox" Checked>
        </li>
    </ul>
    <ul >General User
        <li>
            <a href="../../index.php">Homepage</a>
            <input type="checkbox" Checked>
        </li>
        <li>
            <a href="./about.php">About Us</a>
            <input type="checkbox" Checked>
        </li>
        <li>
            <a href="./order-form.php">Order Form</a>
            <input type="checkbox" Checked>
        </li>
        <li>
            <a href="./description.php">Description</a>
            <input type="checkbox" Checked>
        </li>
        <li>
            <a href="./sign-on.php">Sign In</a>
            <input type="checkbox" Checked>
        </li>
        <li>
            <a href="./orders.php">Membership Area</a>
            <input type="checkbox">
        </li>
    </ul>
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