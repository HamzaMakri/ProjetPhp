<?php

class ArticleDOA {


  private $bdd;

  function __construct() {
    try {
      $this->bdd = new PDO('sqlite:../data/sqlite/base.db');
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }

  }

  public function getAll() : array {

    $requete = $this->bdd->query("SELECT * FROM article");

    $result = $requete->fetchAll(PDO::FETCH_CLASS,"Article");

    return $result;
  }
}



//var_dump($articles);


class Article {
  public $nom;
  public $description;
  public $prix;
  public $ref;
  public $photo;
  public $type;

  public $corps;


  public function getcorps(): string{
      $corps = '
      <div class="article">
        <img src="'.$this->photo.'" >
        <div>
            <div class="header">
              <h1>'.$this->nom.'</h1>
              <p>'.$this->prix.'€</p>
            </div>
            <p><b>Description :</b> '.$this->description.'</p>
            <div class="button_cont" align="center"><a class="example_d" href="#" >Ajouter au panier !</a></div>
        </div>
      </div>
      ';
      return $corps;
  }


  public function __construct()
  {

  }
}




 ?>
