<?php

require_once('squelette.view.php');

if (isset($_SESSION['user'])) {
  $connecte = true;
}else {
  $connecte = false;
}

$squelette = new squelette('stylesheet2.css',$connecte);

echo "$squelette->header"; //HEAD + HEADER + BALISE BODY OUVRANTE

 ?>

 <!-- ================================================ -->
 <!-- ================================================ -->


<div class="sign">

 <a href="user.ctrl.php?action=signin" class="in"><i class="fa fa-sign-in"></i> Se connecter</a>
 <a href="user.ctrl.php?action=signup" class="up"><i class="fa fa-user-plus"></i> S'inscrire</a>


</div>

<?php

if (isset($_GET['action']) ) {
  if ($_GET['action'] == 'signin') {

echo '

<form  action="" method="POST" enctype="multipart/form-data">
 <input type="hidden" name="action" value="submit" required="required">

 Votre email:<br>
 <input name="email" type="email" value="" size="30" required="required"><br>

 Votre mot de passe:<br>
 <input name="password" type="password" value="" size="30" required="required"><br><br><br>

 <input type="submit" value="Submit"/>
 </form>

';

    if (isset($connexionOK)) {
      if ($connexionOK) {
        echo "<p>Vous êtes connecté </p>";
      }else {
        echo "<p>Ce compte n'existe pas, veuillez réessayer ou vous inscrire</p>";
      }
    }
  }
}

if (isset($_GET['insc'])) {
  if ($_GET['insc'] == 'ok') {
    $inscriptionOK = true;
  }
}


if (isset($inscriptionOK)) {
  if ($inscriptionOK) {
    echo "<p>Votre inscription est validé </p>";
  }else {
    echo "<p>Un compte est déjà lié à cette adresse mail, veuillez vous connecter ou saisir un autre mail</p>";
  }
}


if (isset($_GET['action']) ) {
  if ($_GET['action'] == 'signup') {

    echo '
    <form  action="" method="POST" enctype="multipart/form-data">
     <input type="hidden" name="action" value="submit" required="required">

     Votre nom:<br>
     <input name="name" type="text" value="" size="30" required="required"/><br>

     Votre Age:<br>
     <input name="age" type="number" value="" size="30" required="required"/><br>

     Votre email:<br>
     <input name="email" type="email" value="" size="30" required="required"/><br>

     Votre mot de passe:<br>
     <input name="password" type="password" value="" size="30" required="required"/><br><br><br>

     <input type="submit" value="Submit"/>
     </form>

    ';

  }
}



 ?>



<!-- ================================================ -->
<!-- ================================================ -->

<?php

echo "$squelette->footer"; // BALISE BODY FERMANTE + FOOTER

 ?>
