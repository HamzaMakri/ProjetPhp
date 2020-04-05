<?php


class squelette{

  public $header;
  public $footer;

  function __construct($css,$connecte) {

    $bouton;
    if (!$connecte) {
      $bouton = '
      <form action="../controler/user.ctrl.php">
          <button class="login"><i class="fa fa-sign-in"></i> Login </button>
      </form>
      ';
    }else {
      $bouton = '
      <form action="../controler/espace.ctrl.php">
          <button class="espacePerso"><i class="fa fa-user"></i>Espace personnel</button>
      </form>
      ';
    }

    $this->header = '

    <html lang="en">
    <head>
      <link rel="stylesheet" type="text/css" href="../view/design/'.$css.'">
      <title>Articles</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
      <link rel="icon" type="image/png" href="favicon.png" />

    </head>

    <header>
        <img src="../view/design/banner.jpg" alt="Banniere">


        <div class="navbar">
            <ul>
              <li><a href="../controler/main.ctrl.php">Accueil</a></li>
              <li><a href="#" aria-haspopup="true">Nos créations</a>
                <ul class="dropdown" aria-label="submenu">
                  <li><a href="../controler/articles.ctrl.php?page=type1">Gâteaux</a></li>
                  <li><a href="../controler/articles.ctrl.php?page=type2">Petites faims</a></li>
                  <li><a href="../controler/articles.ctrl.php?page=type">Toute les créations</a></li>
                </ul>
              </li>
              <li><a href="../view/info.view.php">Info</a></li>
            </ul>
        </div>
    </header>

    <body>
<form action="../controler/panier.ctrl.php">
    <button class="panier"><i class="fa fa-shopping-cart"></i> Panier </button>
</form>

'.$bouton.'

    ';

    $this->footer = '
      </body>

      <footer>

        <div class="footer">

          <ul>
            <li><a href="#">A propos</a></li>
            <li><a href="#">Nous contacter</a></li>
          </ul>

        <a href="https://www.facebook.com/" class="fa fa-facebook"></a>
        <a href="https://twitter.com/" class="fa fa-twitter"></a>
        <a href="https://fr.linkedin.com/" class="fa fa-linkedin"></a>
        <a href="https://www.instagram.com/lamria.pastry/" class="fa fa-instagram"></a>
          <p>Copyright@MAKRI-ESTEVES AUDAS-Mini Projet PHP</p>

        </div>

      </footer>

      </html>

      ';
  }
}



 ?>
