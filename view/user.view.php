<?php

require_once('squelette.view.php');
$squelette = new squelette('stylesheet2.css');

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
 <input type="hidden" name="action" value="submit">

 Votre email:<br>
 <input name="email" type="text" value="" size="30"/><br>

 Votre mot de passe:<br>
 <input name="password" type="text" value="" size="30"/><br><br><br>

 <input type="submit" value="Submit"/>
 </form>

';


  }
}




if (isset($_GET['action']) ) {
  if ($_GET['action'] == 'signup') {

echo '
<form  action="" method="POST" enctype="multipart/form-data">
 <input type="hidden" name="action" value="submit">

 Votre nom:<br>
 <input name="name" type="text" value="" size="30"/><br>

 Votre Age:<br>
 <input name="age" type="text" value="" size="30"/><br>

 Votre email:<br>
 <input name="email" type="text" value="" size="30"/><br>

 Votre mot de passe:<br>
 <input name="password" type="text" value="" size="30"/><br><br><br>

 <input type="submit" value="Submit"/>
 </form>

';
if ($inscriptionOK = true) {
  echo "<p>Votre inscription est validé </p>";
}
  }
}



 ?>



<!-- ================================================ -->
<!-- ================================================ -->

<?php

echo "$squelette->footer"; // BALISE BODY FERMANTE + FOOTER

 ?>
