<?php

require_once('squelette.view.php');


if (isset($_SESSION['user'])) {
  $connecte = true;
}else {
  $connecte = false;
}

$squelette = new squelette('stylesheet.css',$connecte);

echo "$squelette->header"; //HEAD + HEADER + BALISE BODY OUVRANTE

 ?>

 <!-- ================================================ -->
 <!-- ================================================ -->


    <div class="centre">

          <div class="Column">
            <a href="https://www.apple.com/fr/iphone-11-pro/">  <img src="../view/design/pub2.png" alt="Farming Simulator Add" style = "width:100%; height : 100%;"> </a>
          </div>

          <div class="Slider">

            <div id="myCarousel" class="carousel slide" data-ride="carousel">

              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active">
                  <img src="../view/design/image1.jpg" alt="Tractor1" style="width:100%;">
                </div>

                <div class="item">
                  <img src="../view/design/image2.jpg" alt="Tractor2" style="width:100%;">
                </div>

                <div class="item">
                  <img src="../view/design/image3.jpg" alt="Tractor 3" style="width:100%;">
                </div>
              </div>

              <!-- Left and right controls -->
              <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>

          </div>

          <div class="Column">
            <a href="https://www.samsung.com/fr/">  <img src="../view/design/pub1.png" alt="Pub S20" style = "width:100%; height : 100%;"> </a>
          </div>

    </div>


<!-- ================================================ -->
<!-- ================================================ -->

<?php

echo "$squelette->footer"; //FOOTER + BALISE BODY FERMANTE

 ?>
