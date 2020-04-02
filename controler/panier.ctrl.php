<?php

require_once('../model/Article.class.php');
require_once('../model/Panier.class.php');
require_once('../framework/view.class.php');


session_start();

//var_dump($_SESSION['panier']);


$view = new View('panier.view.php');

$view->assign('panier',$_SESSION['panier']);

$view->display('panier.view.php');





?>
