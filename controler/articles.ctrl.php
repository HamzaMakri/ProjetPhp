<?php

require_once('../model/Article.class.php');
require_once('../model/Panier.class.php');

session_start();

$articlesDOA = new ArticleDOA();
$articles = $articlesDOA->getAll();

if (!isset($_SESSION['panier'])) {
  $_SESSION['panier'] = new Panier();
}

if (isset($_GET['action'])) {
  if ($_GET['action'] == 'add') {
    foreach ($articles as $key => $value) {

      if ($value->ref == $_GET['article']) {
        $_SESSION['panier']->arrayArticle[] = $value;
      }

    }
    $_SESSION['panier']->setPrixTotal();
    $_SESSION['panier']->setNbArticle();
    //var_dump($_SESSION['panier']);
  }
}

require_once('../framework/view.class.php');




$view = new View('articles.view.php');

$view->assign('articles',$articles);

$view->display('articles.view.php');



?>
