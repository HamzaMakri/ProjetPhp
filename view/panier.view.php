<?php

require_once('squelette.view.php');
$squelette = new squelette('stylesheet2.css');

echo "$squelette->header"; //HEAD + HEADER + BALISE BODY OUVRANTE

 ?>

 <!-- ================================================ -->
 <!-- ================================================ -->


<div class="body">

  <h2> Votre Panier   </h2>

<h3>Resume de votre panier :</h3>
<br>
<p>Nombre d'articles :   <?= $panier->nbarticle?>   </p>
<p>------ Type 1 : </p>
<p>------ Type 2 : </p>
<p>============================</p>
<p>Total : <?= $panier->prixTotal?>€</p>

<h3>Detail :</h3>

  <div class="liste">



<?php

foreach ($panier->arrayArticle as $key => $value) {

   echo " <div class=\"ligne\"> ";
   $case = $value->getcorps($value->type);
   echo "$case";
   echo "  </div>";

}
?>


</div>




<!-- ================================================ -->
<!-- ================================================ -->

<?php

echo "$squelette->footer"; //FOOTER + BALISE BODY FERMANTE

 ?>