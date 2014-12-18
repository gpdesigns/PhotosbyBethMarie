
<?php include("../includes/layouts/header.php") ?>
<body id="contact">
<div class="page-container">
  <header class="main-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 padL">
          <a href="index.php"><h1>Photos by <span class="teal">BethMarie</span></h1></a>
        </div> <!-- end col-lg-4 -->
        <div class="col-lg-9 padR">
          <ul class="social-icons social-white nav-default">
            <li><a href="https://www.facebook.com/photosbybethmarie" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a></li>
            <li><a href="http://flickr.com/photos/beth53" target="_blank"><i class="fa fa-flickr fa-2x"></i></a></li>
          </ul>
          <p class="header-open">Follow me on <i class="fa fa-caret-right fa-lg"></i></p>
          <?php include("../includes/layouts/nav.php") ?>

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
            bethmarie@photosbybethmarie.com<br>
            <a href="" type="phone">904-338-2204</a>
          <form action="emailsend.php" method="post">
          <p>
            <label for="name">Name:</label>
              <input type="text" required="" name="name" id="name" placeholder="Name:">
          </p>
          <p>
            <label for="email">Email:</label>
              <input type="email" required="" name="email" id="email" placeholder="Email:">
          </p>
          <p>
            <label for="message" class="position-up">Message:</label>
              <textarea name="message" id="message" required="" placeholder="Message:"></textarea>
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
        </div>
      </div>
    </div>
  </div> 
  </section>
<?php include("../includes/layouts/footer.php") ?>

<!-- JS -->
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>