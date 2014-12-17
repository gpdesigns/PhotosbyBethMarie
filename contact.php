<?php 

require_once "../includes/functions.php";

if (isset($_POST["submit"])) { 
$name = htmlentities($_POST["name"]);
$email = htmlentities($_POST["email"]);
$message = htmlentities($_POST["message"]);

redirect_to("success.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Contact Page - Photos By Beth Marie</title>
  <meta name="description" content="Beth Marie Photos -- The world as I see it">
  <meta name="author" content="Gregory Paul Designs">

  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

  <!-- Font Awesome Styles -->
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  
  <!-- Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400,700' rel='stylesheet'>
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

  <!-- Animate css -->
  <link rel="stylesheet" href="css/animate.css">
  <!-- Bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/simple-sidebar.css">
   <!-- Stylesheets -->
  <link rel="stylesheet" href="css/grid.css">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body id="contact">
<div class="page-container">
  <header class="main-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 padL">
          <a href="index.html"><h1>Photos by <span class="teal">BethMarie</span></h1></a>
        </div> <!-- end col-lg-4 -->
        <div class="col-lg-9 padR">
          <ul class="social-icons social-white nav-default">
            <li><a href="https://www.facebook.com/photosbybethmarie" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a></li>
            <li><a href="http://flickr.com/photos/beth53" target="_blank"><i class="fa fa-flickr fa-2x"></i></a></li>
          </ul>
          <p class="header-open">Follow me on <i class="fa fa-caret-right fa-lg"></i></p>
          <nav class="main-nav fadeIn animated">
            <ul>
              <li><a href="index.html"><i class="fa fa-home pad-r"></i>Home</a></li>
              <li><a href="portfolio.html"><i class="fa fa-camera pad-r"></i>Portfolio</a></li>
              <li><a href="about.html"><i class="fa fa-info pad-r"></i>About</a></li>
              <li><a class="active" href="contact.html"><i class="fa fa-envelope pad-r"></i>Contact</a></li>
            </ul>
          </nav>
        </div> <!-- end col-lg-8 -->
      </div> <!-- end row -->
    </div> <!-- end container -->  
  </header>
  <section>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6">
        <div class="contact-form">
          <h2>Contact Information</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia praesentium animi ea veritatis, laboriosam dolore ducimus fuga itaque vel mollitia, voluptatem dolores dicta. Provident fuga dolores accusamus qui, earum ipsam.</p>
            <a href="mailto:phototaker50@yahoo.com">phototaker50@yahoo.com</a><br>
            <a href="">904-338-2204</a>
          <form action="emailsend.php" method="post">
          <p>
            <label for="name">Name:</label>
              <input type="text" required="" name="name" id="name">
          </p>
          <p>
            <label for="name">Email:</label>
              <input type="email" required="" name="email" id="email">
          </p>
          <p>
            <label for="name">Message:</label>
              <textarea name="message" id="message" required=""></textarea>
          </p>
          <button class="submit" name="submit">Submit</button>
          </form>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="contact-right">
          
        </div>
      </div>
    </div>
  </div> 
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="pricing">
          <h1>Pricing Information</h1>
            <ul class="prices">
              <li><span>19.95</span><br><h3>5X7 Prints</h3></li>
              <li><span>39.95</span><br><h3>8X10 Prints</h3></li>
              <li><span>59.95</span><br><h3>8X12 Prints</h3></li>
              <li><span>79.95</span><br><h3>11X17 Prints</h3></li>
            </ul>
              <span class="divider"></span>
              <h2>Products for sale</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci sapiente repudiandae neque reprehenderit nemo impedit voluptas, labore vitae a sit ullam corporis pariatur dolorem earum perspiciatis at quod modi quas.</p>
              <span class="divider"></span>
              <h2>Photographic Prints</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, praesentium dolor earum nulla. Consequuntur totam distinctio rerum, magnam vitae ipsam amet ducimus iusto reprehenderit debitis neque, laudantium numquam impedit animi.</p>
        </div>
      </div>
    </div>
  </div> 
  </section>
  <div class="push"></div>
</div> <!-- end page-container -->
 <footer>
   <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
            <p><span class="teal">&copy; 2014 PhotosByBethMarie.com</span> | All rights reserved</p>
        </div> <!-- end col-xs-3 -->          
      </div> <!-- end row -->

    </div> <!-- end container -->
 </footer>

<!-- JS -->
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>