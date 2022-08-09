<!-- Done By: Quang, Alex, Faris -->

<?php
if(!isset($_SESSION)){
    session_start();
}?>

<!DOCTYPE html>
<html lang="en-US">
   <head>
   <?php include 'front-libraries.php'; ?>
    <style type="text/css">
         .container{
           top: 650px;
           bottom: 250px;
           height: 450px;
         }
         .words{
           align-items: center;
         }
         #map {
           width: 100%;
           height: 100%;

         }
         #data, #allData {
           display: none;
         }
         #footer{
           width: 100%;
           position: relative;
           bottom: 0;
           height: 100px;
         }
         #header{
           position: absolute;
           top: 0;
         }
         #googlemap{
           width: 100%;
           height: 450px;
         }
         #word{
             margin-top: 76px;
             width:100%;
             height: 20vh;
             background-color: #222222;
             position: relative;
         }
         .word-text{
             width:100%;
             height: 100%;
             position: absolute;
             top: 0px;
             left: 0px;
             display: flex;
             justify-content: center;
             align-items: center;
             flex-direction: column;
             background-color: rgba(14,14,14,0.76);
         }
         .word-text strong{
             font-size: 70px;
             width:100%;
             text-align: center;
             color: #ffffff;
             line-height: 50px;
             margin-bottom: 0px;
         }
         .word-text strong span{
             color: #e82127;
         }
      </style>

      <!--[if lt IE 9]>
	      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
      <![endif]-->
   </head>
   <body class="size-1140">
      <!-- TOP NAV WITH LOGO -->
      <header id="header">
      <?php include 'navigation-bar.php'; ?>
      </header>
      <section id="word">
          <div class="word-text">
            <strong>Find Parking Lots <span class="typing2"></span></strong>
        </div>
    </section>
      <section id="googlemap">
        <div class="container">
            <?php
               # read all location from database to print on map
               require 'map/location.php';
               $loc = new local;
               $coll = $loc->getLocationBlankLatLng();
               $coll = json_encode($coll, true);
               echo '<div id="data">' . $coll . '</div>';

               $allData = $loc->getAllLocation();
               $allData = json_encode($allData, true);
               echo '<div id="allData">' . $allData . '</div>';
             ?>
             <div id="map"></div>
           </div>
      </section>
      <!-- FOOTER -->
      <footer id="footer">
         <div class="line">
            <div class="s-12 l-6">
               <p>Copyright 2021, TLM2008 - GRP8</p>
            </div>
         </div>
      </footer>
   </body>
   <script async src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyAFJgy-VzJ2Mb67aqbRGkhmWe6k7V0fYwk&callback=initMap"></script>
</html>
