<?php require_once("../includes/connection.php") ?>
<?php require_once("../includes/functions.php") ?>
<?php include("../includes/layouts/header.php") ?>
<body id="portfolio">
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
          <?php include("../includes/layouts/nav.php") ?>
        </div> <!-- end col-lg-8 -->
      </div> <!-- end row -->
    </div> <!-- end container -->  
  </header>
  <section class="fadeIn animated">
  <div id="wrapper">
  <div id="sidebar-wrapper">
    <ul class="sidebar-nav">
      <li class="sidebar-brand">Gallery Menu</li>
      <li><a id="all" class="all" href="#" data-filter="*"><i class="fa fa-asterisk pad-r"></i>all</a></li>
      <?php 
      $category_set = find_all_categories();  
      while($category = mysqli_fetch_assoc($category_set)) { 
      ?>
      <li><a id="<?php echo $category['menu_name'];?>" class="<?php echo $category['menu_name'];?>" href="#" data-filter=".<?php echo $category['menu_name'];?>"><i class="<?php echo $category['icon'];?>"></i><?php echo $category['menu_name'];?></a></li>
      <?php } ?>
      <?php mysqli_free_result($category_set) ?>
     </ul>
    </div>
    <section class="fadeIn animated">
      <div id="page-content-wrapper">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 pull-right">
                <div class="menu">
                  <a href="#menu-toggle" class="btn btn-default btn-lg" id="menu-toggle"><i class="fa  fa-arrow-circle-left"></i> Toggle Menu</a>
                </div>
              <div class="portfolio"> 
                <?php 
                  $photo_set = find_all_photos();
                  while($photo = mysqli_fetch_assoc($photo_set)) {?>             
                <figure class="entry <?php echo $photo['menu_name']; ?>">
                <a href="<?php echo $photo['src'] ?>" class="fancybox" rel="<?php echo $photo['group'] ?>" title="<?php echo $photo['title'] ?>" alt="<?php echo $photo['alt'] ?>">
                  <img src="<?php echo $photo['src'] ?>" alt="<?php echo $photo['alt'] ?>"> 
                  <span class="hover"></span>
                  </a> 
                </figure>
                <?php } ?>
              </div> <!-- end porfolio -->

            </div> <!-- end col-lg-12 -->

          </div> <!-- end row -->

        </div> <!-- end container-fluid -->

      </div> <!-- end page-content-wrapper -->
              
  </section> <!-- end section -->
</div>
<?php include("../includes/layouts/footer.php") ?>
<!-- JS -->
<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>
<script type="text/javascript" src="source/jquery.fancybox.pack.js"></script>
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    $(".fancybox").fancybox();
    
</script>
<?php mysqli_close($connection); ?>
</body>
</html>