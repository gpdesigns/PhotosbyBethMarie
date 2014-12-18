<?php require_once("../includes/connection.php"); ?>
<?php include "../includes/layouts/header.php" ?>
<body id="homepage">
          <?php include("../includes/layouts/nav.php") ?>

        </div> <!-- end col-lg-8 -->
      </div> <!-- end row -->
    </div> <!-- end container -->  
  </header>
  <section>
    <div class="cycle-slideshow"  data-cycle-timeout="0" data-cycle-slides="div.slide" id="slider">
        <div class="cycle-prev rotateIn animated">
          <a href="#"><i class="fa fa-chevron-left"></i></a>
        </div> <!-- end cycle-prev -->

        <div class="cycle-next rotateIn animated">
          <a href="#"><i class="fa fa-chevron-right"></i></a>
        </div> <!-- end cycle-next -->
      <div class="slide" id="slide-1" >
      <img class="slider-image animated bounceInRight" src="images/1.jpg" alt="">
        <header class="fancy-box fancy-red">
          <h1 class="slider-header bounceInUp animated">Albino Alligator</h1>
        </header> 
      </div>  <!-- end slider-1 -->

      <div class="slide" id="slide-2">
        <img class="slider-image" src="images/2.jpg" alt="">
        <header class="fancy-box fancy-red">
          <h1 class="slider-header">Guardian Angel</h1>
        </header> 
      </div>  <!-- end slider-2 -->

      <div class="slide" id="slide-3">
        <img class="slider-image" src="images/3.jpg" alt="">
        <header class="fancy-box fancy-red">
          <h1 class="slider-header">BoneYard Tree Yard</h1>
        </header> 
      </div>  <!-- end slider-3 -->

      <div class="slide" id="slide-4">
        <img class="slider-image" src="images/4.jpg" alt="">
        <header class="fancy-box fancy-red">
          <h1 class="slider-header">Manipulated Aligator Art</h1>
        </header> 
      </div>  <!-- end slider-4 -->

      <div class="slide" id="slide-5">
        <img class="slider-image" src="images/5.jpg" alt="">
        <header class="fancy-box fancy-red">
          <h1 class="slider-header">Manipulated Candle Art</h1>
        </header> 
      </div>  <!-- end slider-5 -->

      <div class="slide" id="slide-6">
        <img class="slider-image" src="images/6.jpg" alt="">
        <header class="fancy-box fancy-red">
          <h1 class="slider-header">Manipulated Magic Mushroom</h1>
        </header> 
      </div>  <!-- end slider-6 -->

      <div class="slide" id="slide-7">
        <img class="slider-image" src="images/7.jpg" alt="">
        <header class="fancy-box fancy-red">
          <h1 class="slider-header">Moon Beam</h1>
        </header> 
      </div>  <!-- end slider-7 -->

      <div class="slide" id="slide-8">
        <img class="slider-image" src="images/8.jpg" alt="">
        <header class="fancy-box fancy-red">
          <h1 class="slider-header">Rock and Roll</h1>
        </header> 
      </div>  <!-- end slider-8 -->
    </div> <!-- end cycle-slideshow -->  
  </section>
<?php include "../includes/layouts/footer.php" ?>
<!-- JS -->
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="http://malsup.github.io/min/jquery.cycle2.min.js"></script>
</body>
</html>