<?php



class Panier {
  public $nbarticle;
  public $prixTotal;
  public $arrayArticle;


  public function setNbArticle(){
    $this->nbarticle = count($this->arrayArticle);
  }

  public function setPrixTotal(){
    foreach ($this->arrayArticle as $key => $value) {
      $this->prixTotal = $value->prix;
    }
  }

  public function __construct(){
    $this->nbarticle = 0;
    //$this->arrayArticle = array();
  }
}




 ?>
