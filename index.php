<!DOCTYPE html>
<!--[if lt IE 10]>      <html class="no-js lt-ie11 lt-ie10 lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 10]>         <html class="no-js lt-ie11 lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 11]>         <html class="no-js lt-ie11"> <![endif]-->
<!--[if gt IE 11]><!--> <html class="no-js" lang="en-US"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->

    <title>Davao City Dogs for Adoption</title>
    <link rel="icon" href="images/favicon.png"/>
    <link rel="stylesheet" href="css/hamburgers.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/animate-4.1.1.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/media.css">
    
  </head>
  <body>

<div class="header_holder">
<header>
    <div class="wrapper">
      <div class="header_con">
        <div class="main_logo">
          <a href="index.php"><figure><img src="images/main-logo.png" alt="Logo"/></figure></a>
        </div>

        <div class="hamburger_con">
          <div class="hamburger hamburger--stand">
              <div class="hamburger-box">
                <div class="hamburger-inner"></div>
              </div>
          </div>
        </div>
      </div>
    </div>
</header>

<!-- Navigation -->
<nav id="nav_area">
    <ul class="nav_con">
      <li class="current_page_item"><a href="">Home</a></li>
      <li><a href="">About Us</a></li>
      <li><a href="">Contact Us</a></li>
    </ul>
</nav>
<!-- End Navigation -->
</div> <!-- header_holder -->




<!-- Main -->
<div id="main_area">
  <div class="wrapper">
    <div class="main_con">
      <main>
        <h1 class="h1_title"><span>Davao City </span>Pets for Adoption</h1>

         <div class="main_boxes">
         <?php
            $open = fopen("dogs.csv", "r"); 
            $data = fgetcsv($open, 1000, ",");
            while (($data = fgetcsv($open, 1000, ",")) !== FALSE) 
            {
              $dog['id'] = $data[0];
              $dog['name'] = $data[1];
              $dog['gender'] = $data[2];
              $dog['date_in_shelter'] = $data[3];
              $dog['is_adopted'] = $data[4];
              $dog['date_adopted'] = $data[5];


          ?>

        
           <section>
            <h2><?php echo  $dog['name']; ?></h2>
            <p><?php echo $dog['gender']; ?></p>
            <p>In shelter since: <?php echo $dog['date_in_shelter']; ?></p>
             <img src="images/<?php echo $dog['id'] . ".jpg"; ?>">
           </section>
         

          <?php
           
            // Read the data    
          }
          fclose($open);
          ?>
          </div>

      </main>
    </div>
    <div class="clearfix"></div>
  </div>
</div>
  <!-- End Main -->



<!-- Footer -->
<footer>
  <div id="footer_btm">
    <div class="wrapper">
      <div class="footer_btm_con">
        <nav id="footer_nav">
          <ul class="footer_nav_con">
            <li class="current_page_item"><a href="">Home</a></li>
            <li><a href="">About Us</a></li>
            <li><a href="">Services</a></li>
            <li><a href="">Careers</a></li>
            <li><a href="">Contact Us</a></li>
          </ul>
        </nav>

        <div class="copyright">
        <p>
            <span class="copyright_year">Copyright 2022</span>
            <span class="separator">|</span>
            <span class="designed">Designed by Ravin</span>
          </p>
        </div>
      </div> <!-- .footer_top_con -->
    </div>
  </div> <!-- #footer_top -->
</footer>

<script type="text/javascript" src="js/hamburgers.js"></script>
<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="js/w3-css-slideshow.js"></script>
<script type="text/javascript" src="js/wow.js"></script>
<script type="text/javascript" src="js/plugins.js"></script>

</body>
</html>
<!-- End Footer -->
