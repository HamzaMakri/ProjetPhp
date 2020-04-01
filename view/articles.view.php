<?php

require_once('squelette.view.php');
$squelette = new squelette('stylesheet2.css');

echo "$squelette->header"; //HEAD + HEADER + BALISE BODY OUVRANTE

 ?>

 <!-- ================================================ -->
 <!-- ================================================ -->


<div class="body">

  <h2>Nos Articles</h2>

  <div class="liste">


<?php

$letype = $_GET['page'];

foreach ($articles as $key => $value) {


 if ($letype == $value->type || $letype == 'type') {

   echo " <div class=\"ligne\"> ";
   $case = $value->getcorps($letype);
   echo "$case";
   echo "  </div>";

 }


}
?>


  <div class="pages">
    <a href="#" class="previous round"><b>&#8249;</b></a>
    <ul>
      <li> <a href="#">1</a> </li>
      <li> <a href="#">2</a> </li>
      <li> <a href="#">3</a> </li>
      <li> <a href="#">4</a> </li>
      <li> <a href="#">5</a> </li>
      <li> <a>...</a> </li>
    </ul>
    <a href="#" class="next round"><b>&#8250;</b></a>
  </div>
</div>




<!-- ================================================ -->
<!-- ================================================ -->

<?php

echo "$squelette->footer"; //FOOTER + BALISE BODY FERMANTE

 ?>
