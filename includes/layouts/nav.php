<?php $page = $_SERVER['SCRIPT_NAME']; ?>
<nav class="main-nav fadeIn animated">
            <ul id="main">
              <li ><a <?php if ($page == "/index.php"){ echo "class='active'";} ?>href="index.php"><i class="fa fa-home pad-r"></i>Home</a></li>
              <li><a <?php if ($page == "/portfolio.php"){ echo "class='active'";} ?>href="portfolio.php"><i class="fa fa-camera pad-r"></i>Portfolio</a></li>
              <li><a <?php if ($page == "/about.php"){ echo "class='active'";} ?>href="about.php"><i class="fa fa-info pad-r"></i>About</a></li>
              <li><a <?php if ($page == "/contact.php"){ echo "class='active'";} ?>href="contact.php"><i class="fa fa-envelope pad-r"></i>Contact</a></li>
            </ul>
          </nav>