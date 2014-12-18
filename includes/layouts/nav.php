<?php $page = $_SERVER['SCRIPT_NAME']; ?>
<div class="page-container">
  <header class="main-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 padL">
          <a href="index.php"><h1>Photos by <span class="teal">BethMarie</span></h1></a>
        </div> <!-- end col-lg-4 -->
        <div class="col-lg-9 padR">
          <ul class="social-icons social-white nav-default">
            <li><a href="https://www.facebook.com/bethmitchellphototgraphy" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a></li>
            <li><a href="http://flickr.com/photos/beth53" target="_blank"><i class="fa fa-flickr fa-2x"></i></a></li>
          </ul>
          <p class="header-open">Follow me on <i class="fa fa-caret-right fa-lg"></i></p>
          <nav class="main-nav fadeIn animated">
            <ul id="main">
              <li ><a <?php if ($page == "/index.php"){ echo "class='active'";} ?>href="index.php"><i class="fa fa-home pad-r"></i>Home</a></li>
              <li><a <?php if ($page == "/portfolio.php"){ echo "class='active'";} ?>href="portfolio.php"><i class="fa fa-camera pad-r"></i>Portfolio</a></li>
              <li><a <?php if ($page == "/about.php"){ echo "class='active'";} ?>href="about.php"><i class="fa fa-info pad-r"></i>About</a></li>
              <li><a <?php if ($page == "/contact.php"){ echo "class='active'";} ?>href="contact.php"><i class="fa fa-envelope pad-r"></i>Contact</a></li>
            </ul>
          </nav>