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
          <nav class="main-nav fadeIn animated">
            <ul>
              <li><a href="index.php"><i class="fa fa-home pad-r"></i>Home</a></li>
              <li><a class="active" href="portfolio.php"><i class="fa fa-camera pad-r"></i>Portfolio</a></li>
              <li><a href="about.php"><i class="fa fa-info pad-r"></i>About</a></li>
              <li><a href="contact.php"><i class="fa fa-envelope pad-r"></i>Contact</a></li>
            </ul>
          </nav>
        </div> <!-- end col-lg-8 -->
      </div> <!-- end row -->
    </div> <!-- end container -->  
  </header>
  <section class="fadeIn animated">
  <div id="wrapper">
  <div id="sidebar-wrapper">
    <ul class="sidebar-nav">
      <li class="sidebar-brand">Gallery Menu</li>
      <?php $categories = find_all_categories(); ?>
      <?php
        while($category = mysqli_fetch_assoc($catergories)) {
      ?>
      <li><a id="<?php $categories['0']?>" class="<?php $categories['0']?>" href="#" data-filter="*"><i class="fa fa-asterisk pad-r"></i><?php $categories['0']?></a></li>
      <li><a id="animals" class="animals" href="#" data-filter=".animals"><i class="fa fa-paw pad-r"></i>animals</a></li>
      <li><a id="birds" class="birds" href="#" data-filter=".birds"><i class="fa fa-twitter pad-r"></i>birds</a></li>
      <li><a id="clouds" class="clouds" href="#" data-filter=".clouds"><i class="fa fa-cloud pad-r"></i>clouds</a></li>
      <li><a id="critters" class="critters" href="#" data-filter=".critters"><i class="fa fa-qq pad-r"></i>critters</a></li>
      <li><a id="digiart" class="digiart" href="#" data-filter=".digiart"><i class="fa fa-sliders pad-r"></i>Digital Art</a></li>
      <li><a id="moon" class="moon" href="#" data-filter=".moon"><i class="fa fa-moon-o pad-r"></i>moon</a></li>
      <li><a id="nature" class="nature" href="#" data-filter=".nature"><i class="fa fa-leaf pad-r"></i>nature</a></li>
      <li><a id="people" class="people" href="#" data-filter=".people"><i class="fa fa-user pad-r"></i>people</a></li>
      <li><a id="places" class="places" href="#" data-filter=".places"><i class="fa fa-plane pad-r"></i>places</a></li>
     <?php } ?>
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
                <figure class="entry animals">
                <a href="images/photos/animals1.jpg" class="fancybox" rel="group1" title="Title 1" alt="">
                  <img src="images/photos/animals1.jpg" alt=""> 
                  <span class="hover"></span>
                  </a> 
                </figure>
                <figure class="entry animals">
                <a href="images/photos/animals2.jpg" class="fancybox" rel="group1" title="Title 2" alt=""> 
                  <img src="images/photos/animals2.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry entry animals">
                <a href="images/photos/animals3.jpg" class="fancybox" rel="group1" title="Title"alt="">  
                  <img src="images/photos/animals3.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry animals">
                <a href="images/photos/animals4.jpg" class="fancybox" rel="group1" title="Title"alt="">  
                  <img src="images/photos/animals4.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure> 
                <figure class="entry animals">
                <a href="images/photos/animals5.jpg" class="fancybox" rel="group1" title="Title"alt="">  
                  <img src="images/photos/animals5.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure> 
                <figure class="entry animals">
                <a href="images/photos/animals6.jpg" class="fancybox" rel="group1" title="Title"alt="">  
                  <img src="images/photos/animals6.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure> 
                <figure class="entry animals">
                <a href="images/photos/animals7.jpg" class="fancybox" rel="group1" title="Title"alt="">  
                  <img src="images/photos/animals7.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry animals">
                <a href="images/photos/animals8.jpg" class="fancybox" rel="group1" title="Title"alt="">  
                  <img src="images/photos/animals8.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry animals">
                <a href="images/photos/animals9.jpg" class="fancybox" rel="group1" title="Title"alt="">  
                  <img src="images/photos/animals9.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry animals">
                <a href="images/photos/animals10.jpg" class="fancybox" rel="group1" title="Title"alt="">  
                  <img src="images/photos/animals10.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry animals">
                <a href="images/photos/animals11.jpg" class="fancybox" rel="group1" title="Title"alt="">  
                  <img src="images/photos/animals11.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry animals">
                <a href="images/photos/animals12.jpg" class="fancybox" rel="group1" title="Title"alt="">  
                  <img src="images/photos/animals12.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure> 
                <figure class="entry birds">
                <a href="images/photos/birds1.jpg" class="fancybox" rel="group2" alt="">  
                  <img src="images/photos/birds1.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure> 
                <figure class="entry birds">
                <a href="images/photos/birds2.jpg" class="fancybox" rel="group2" alt="">  
                  <img src="images/photos/birds2.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure> 
                <figure class="entry birds"> 
                <a href="images/photos/birds3.jpg" class="fancybox" rel="group2" title="Title"alt=""> 
                  <img src="images/photos/birds3.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure> 
                <figure class="entry birds">
                <a href="images/photos/birds4.jpg" class="fancybox" rel="group2" alt="">  
                  <img src="images/photos/birds4.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure> 
                <figure class="entry birds">
                <a href="images/photos/birds5.jpg" class="fancybox" rel="group2" alt="">  
                  <img src="images/photos/birds5.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure> 
                <figure class="entry birds">
                <a href="images/photos/birds6.jpg" class="fancybox" rel="group2" alt="">  
                  <img src="images/photos/birds6.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure> 
                <figure class="entry birds">
                <a href="images/photos/birds7.jpg" class="fancybox" rel="group2" alt="">  
                  <img src="images/photos/birds7.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>                 
                <figure class="entry birds">
                <a href="images/photos/birds8.jpg" class="fancybox" rel="group2" alt="">  
                  <img src="images/photos/birds8.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry birds">
                <a href="images/photos/birds9.jpg" class="fancybox" rel="group2" alt="">  
                  <img src="images/photos/birds9.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry birds">
                <a href="images/photos/birds10.jpg" class="fancybox" rel="group2" alt="">  
                  <img src="images/photos/birds10.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry birds">
                <a href="images/photos/birds11.jpg" class="fancybox" rel="group2" alt="">  
                  <img src="images/photos/birds11.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry birds">
                <a href="images/photos/birds12.jpg" class="fancybox" rel="group2" alt="">  
                  <img src="images/photos/birds12.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry clouds">
                <a href="images/photos/clouds1.jpg" class="fancybox" rel="group6" alt="">  
                  <img src="images/photos/clouds1.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry clouds">
                <a href="images/photos/clouds2.jpg" class="fancybox" rel="group6" alt="">  
                  <img src="images/photos/clouds2.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry clouds">
                <a href="images/photos/clouds3.jpg" class="fancybox" rel="group6" alt="">  
                  <img src="images/photos/clouds3.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry clouds">
                <a href="images/photos/clouds4.jpg" class="fancybox" rel="group6" alt="">  
                  <img src="images/photos/clouds4.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry clouds">
                <a href="images/photos/clouds5.jpg" class="fancybox" rel="group6" alt="">  
                  <img src="images/photos/clouds5.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry clouds">
                <a href="images/photos/clouds6.jpg" class="fancybox" rel="group6" alt="">  
                  <img src="images/photos/clouds6.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry clouds">
                <a href="images/photos/clouds7.jpg" class="fancybox" rel="group6" alt="">  
                  <img src="images/photos/clouds7.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry clouds">
                <a href="images/photos/clouds8.jpg" class="fancybox" rel="group6" alt="">  
                  <img src="images/photos/clouds8.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry clouds">
                <a href="images/photos/clouds9.jpg" class="fancybox" rel="group6" alt="">  
                  <img src="images/photos/clouds9.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry clouds">
                <a href="images/photos/clouds10.jpg" class="fancybox" rel="group6" alt="">  
                  <img src="images/photos/clouds10.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry clouds">
                <a href="images/photos/clouds11.jpg" class="fancybox" rel="group6" alt="">  
                  <img src="images/photos/clouds11.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry clouds">
                <a href="images/photos/clouds12.jpg" class="fancybox" rel="group6" alt="">  
                  <img src="images/photos/clouds12.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry critters">
                <a href="images/photos/critters1.jpg" class="fancybox" rel="group3" alt="">  
                  <img src="images/photos/critters1.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry critters">
                <a href="images/photos/critters2.jpg" class="fancybox" rel="group3" alt="">  
                  <img src="images/photos/critters2.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry critters">
                <a href="images/photos/critters3.jpg" class="fancybox" rel="group3" alt="">  
                  <img src="images/photos/critters3.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry critters">
                <a href="images/photos/critters4.jpg" class="fancybox" rel="group3" alt="">  
                  <img src="images/photos/critters4.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry critters">
                <a href="images/photos/critters5.jpg" class="fancybox" rel="group3" alt="">  
                  <img src="images/photos/critters5.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry critters">
                <a href="images/photos/critters6.jpg" class="fancybox" rel="group3" alt="">  
                  <img src="images/photos/critters6.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry critters">
                <a href="images/photos/critters7.jpg" class="fancybox" rel="group3" alt="">  
                  <img src="images/photos/critters7.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry critters">
                <a href="images/photos/critters8.jpg" class="fancybox" rel="group3" alt="">  
                  <img src="images/photos/critters8.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry critters">
                <a href="images/photos/critters9.jpg" class="fancybox" rel="group3" alt="">  
                  <img src="images/photos/critters9.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry critters">
                <a href="images/photos/critters10.jpg" class="fancybox" rel="group3" alt="">  
                  <img src="images/photos/critters10.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry critters">
                <a href="images/photos/critters11.jpg" class="fancybox" rel="group3" alt="">  
                  <img src="images/photos/critters11.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry critters">
                <a href="images/photos/critters12.jpg" class="fancybox" rel="group3" alt="">  
                  <img src="images/photos/critters12.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry digiart">
                <a href="images/photos/digiart1.jpg" class="fancybox" rel="group4" alt="">  
                  <img src="images/photos/digiart1.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry digiart">
                <a href="images/photos/digiart2.jpg" class="fancybox" rel="group4" alt="">  
                  <img src="images/photos/digiart2.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry digiart">
                <a href="images/photos/digiart3.jpg" class="fancybox" rel="group4" alt="">  
                  <img src="images/photos/digiart3.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry digiart">
                <a href="images/photos/digiart4.jpg" class="fancybox" rel="group4" alt="">  
                  <img src="images/photos/digiart4.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry digiart">
                <a href="images/photos/digiart5.jpg" class="fancybox" rel="group4" alt="">  
                  <img src="images/photos/digiart5.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry digiart">
                <a href="images/photos/digiart6.jpg" class="fancybox" rel="group4" alt="">  
                  <img src="images/photos/digiart6.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry digiart">
                <a href="images/photos/digiart7.jpg" class="fancybox" rel="group4" alt="">  
                  <img src="images/photos/digiart7.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry digiart">
                <a href="images/photos/digiart8.jpg" class="fancybox" rel="group4" alt="">  
                  <img src="images/photos/digiart8.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry digiart">
                <a href="images/photos/digiart9.jpg" class="fancybox" rel="group4" alt="">  
                  <img src="images/photos/digiart9.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry digiart">
                <a href="images/photos/digiart10.jpg" class="fancybox" rel="group4" alt="">  
                  <img src="images/photos/digiart10.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry digiart">
                <a href="images/photos/digiart11.jpg" class="fancybox" rel="group4" alt="">  
                  <img src="images/photos/digiart11.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry digiart">
                <a href="images/photos/digiart12.jpg" class="fancybox" rel="group4" alt="">  
                  <img src="images/photos/digiart12.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry digiart">
                <a href="images/photos/digiart13.jpg" class="fancybox" rel="group4" alt="">  
                  <img src="images/photos/digiart13.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry digiart">
                <a href="images/photos/digiart14.jpg" class="fancybox" rel="group4" alt="">  
                  <img src="images/photos/digiart14.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure> 
                <figure class="entry moon">
                <a href="images/photos/moon1.jpg" class="fancybox" rel="group7" alt="">  
                  <img src="images/photos/moon1.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry moon">
                <a href="images/photos/moon2.jpg" class="fancybox" rel="group7" alt="">  
                  <img src="images/photos/moon2.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry moon">
                <a href="images/photos/moon3.jpg" class="fancybox" rel="group7" alt="">  
                  <img src="images/photos/moon3.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry moon">
                <a href="images/photos/moon4.jpg" class="fancybox" rel="group7" alt="">  
                  <img src="images/photos/moon4.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry moon">
                <a href="images/photos/moon5.jpg" class="fancybox" rel="group7" alt="">  
                  <img src="images/photos/moon5.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry moon">
                <a href="images/photos/moon6.jpg" class="fancybox" rel="group7" alt="">  
                  <img src="images/photos/moon6.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry moon">
                <a href="images/photos/moon7.jpg" class="fancybox" rel="group7" alt="">  
                  <img src="images/photos/moon7.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry moon">
                <a href="images/photos/moon8.jpg" class="fancybox" rel="group7" alt="">  
                  <img src="images/photos/moon8.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry moon">
                <a href="images/photos/moon9.jpg" class="fancybox" rel="group7" alt="">  
                  <img src="images/photos/moon9.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry moon">
                <a href="images/photos/moon10.jpg" class="fancybox" rel="group7" alt="">  
                  <img src="images/photos/moon10.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry moon">
                <a href="images/photos/moon11.jpg" class="fancybox" rel="group7" alt="">  
                  <img src="images/photos/moon11.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry moon">
                <a href="images/photos/moon12.jpg" class="fancybox" rel="group7" alt="">  
                  <img src="images/photos/moon12.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>             
                <figure class="entry nature">
                <a href="images/photos/nature1.jpg" class="fancybox" rel="group5" alt="">  
                  <img src="images/photos/nature1.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry nature">
                <a href="images/photos/nature2.jpg" class="fancybox" rel="group5" alt="">  
                  <img src="images/photos/nature2.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry nature">
                <a href="images/photos/nature3.jpg" class="fancybox" rel="group5" alt="">  
                  <img src="images/photos/nature3.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry nature">
                <a href="images/photos/nature4.jpg" class="fancybox" rel="group5" alt="">  
                  <img src="images/photos/nature4.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry nature">
                <a href="images/photos/nature5.jpg" class="fancybox" rel="group5" alt="">  
                  <img src="images/photos/nature5.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry nature">
                <a href="images/photos/nature6.jpg" class="fancybox" rel="group5" alt="">  
                  <img src="images/photos/nature6.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry nature">
                <a href="images/photos/nature7.jpg" class="fancybox" rel="group5" alt="">  
                  <img src="images/photos/nature7.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry nature">
                <a href="images/photos/nature8.jpg" class="fancybox" rel="group5" alt="">  
                  <img src="images/photos/nature8.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry nature">
                <a href="images/photos/nature9.jpg" class="fancybox" rel="group5" alt="">  
                  <img src="images/photos/nature9.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry nature">
                <a href="images/photos/nature10.jpg" class="fancybox" rel="group5" alt="">  
                  <img src="images/photos/nature10.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry nature">
                <a href="images/photos/nature11.jpg" class="fancybox" rel="group5" alt="">  
                  <img src="images/photos/nature11.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry nature">
                <a href="images/photos/nature12.jpg" class="fancybox" rel="group5" alt="">  
                  <img src="images/photos/nature12.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry people">
                <a href="images/photos/people1.jpg" class="fancybox" rel="group8" alt="">  
                  <img src="images/photos/people1.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry people">
                <a href="images/photos/people2.jpg" class="fancybox" rel="group8" alt="">  
                  <img src="images/photos/people2.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry people">
                <a href="images/photos/people3.jpg" class="fancybox" rel="group8" alt="">  
                  <img src="images/photos/people3.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry people">
                <a href="images/photos/people4.jpg" class="fancybox" rel="group8" alt="">  
                  <img src="images/photos/people4.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry people">
                <a href="images/photos/people5.jpg" class="fancybox" rel="group8" alt="">  
                  <img src="images/photos/people5.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry people">
                <a href="images/photos/people6.jpg" class="fancybox" rel="group8" alt="">  
                  <img src="images/photos/people6.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry people">
                <a href="images/photos/people7.jpg" class="fancybox" rel="group8" alt="">  
                  <img src="images/photos/people7.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry people">
                <a href="images/photos/people8.jpg" class="fancybox" rel="group8" alt="">  
                  <img src="images/photos/people8.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry people">
                <a href="images/photos/people9.jpg" class="fancybox" rel="group8" alt="">  
                  <img src="images/photos/people9.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry people">
                <a href="images/photos/people10.jpg" class="fancybox" rel="group8" alt="">  
                  <img src="images/photos/people10.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry people">
                <a href="images/photos/people11.jpg" class="fancybox" rel="group8" alt="">  
                  <img src="images/photos/people11.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry people">
                <a href="images/photos/people12.jpg" class="fancybox" rel="group8" alt="">  
                  <img src="images/photos/people12.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry places">
                <a href="images/photos/places1.jpg" class="fancybox" rel="group9" alt="">  
                  <img src="images/photos/places1.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry places">
                <a href="images/photos/places2.jpg" class="fancybox" rel="group9" alt="">  
                  <img src="images/photos/places2.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry places">
                <a href="images/photos/places3.jpg" class="fancybox" rel="group9" alt="">  
                  <img src="images/photos/places3.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry places">
                <a href="images/photos/places4.jpg" class="fancybox" rel="group9" alt="">  
                  <img src="images/photos/places4.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry places">
                <a href="images/photos/places5.jpg" class="fancybox" rel="group9" alt="">  
                  <img src="images/photos/places5.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry places">
                <a href="images/photos/places6.jpg" class="fancybox" rel="group9" alt="">  
                  <img src="images/photos/places6.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry places">
                <a href="images/photos/places7.jpg" class="fancybox" rel="group9" alt="">  
                  <img src="images/photos/places7.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry places">
                <a href="images/photos/places8.jpg" class="fancybox" rel="group9" alt="">  
                  <img src="images/photos/places8.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry places">
                <a href="images/photos/places9.jpg" class="fancybox" rel="group9" alt="">  
                  <img src="images/photos/places9.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry places">
                <a href="images/photos/places10.jpg" class="fancybox" rel="group9" alt="">  
                  <img src="images/photos/places10.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry places">
                <a href="images/photos/places11.jpg" class="fancybox" rel="group9" alt="">  
                  <img src="images/photos/places11.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>
                <figure class="entry places">
                <a href="images/photos/places12.jpg" class="fancybox" rel="group9" alt="">  
                  <img src="images/photos/places12.jpg" alt=""> 
                  <span class="hover"></span>
                </a> 
                </figure>

                  

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
</body>
</html>