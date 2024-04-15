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

<body>
    
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
  <br><br>
  <h2>Description</h2>
  <form>
    <h5>Who am I?</h5>
    <p>
        My name is Hardwood. I am a senior Computer Science major 
        at Georgia State University. Before going to college, I
        was in the military. I served four years as an Aviation
        ordnanceman on the KC130J. I enjoyed my time in and am 
        excited for what comes next. 
    </p>
    <br><br>
    <h5>Project Description</h5>
    <p>
        I made a website for a pine straw company. Before joinging
        the Marines, I worked in a site that sold landscaping 
        supplies but specialized in pine straw. This website was
        made with the company in mind. I created it, thinking
        on what was useful for the company and the clients.
    </p>
    <br><br>
    <h5>Description of technology used</h5>
    <p>
        For this website, I began using React but had trouble
        putting the app on AWS so I decided to stick with what we
        work with this semester. The technologies I used were php,
        javascript, jquery, html, css, foundation framework, and the 
        awesome font library.
    </p>
    <p>
        html, css, the foundation framework, and the awesome font 
        library was used to give my website some structure and style.
        The awesome font family was specificlly used for the navigation
        bar, so it can minimize and turn into the bars.
    </p>
    <p>
        php, javascript, and jquery was used to give my site some interactivety.
    </p>
    <p>
        I used phpMyAdmin and DBmaria to store data
    </p>
    <br><br>
    <h5>What have I learned?</h5>
    <p>
        I learned how useful php can be when creating web applications.
        This is the first time I have coded in php. One thing that I
        found useful was the use of cookies. I never really gave it 
        much thought on how they allow users to seamlessly interact in
        a site without having to login again. Though, the most important
        thing I believe I learned was that hosting a website on a virtual
        instance has a lot of unforseen naunces that I did not expect. 
        You really have to learn to pivit at times to be able to make 
        certain things in a timely manner.
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