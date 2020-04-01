<?php

require_once('../model/Article.class.php');

$articlesDOA = new ArticleDOA();
$articles = $articlesDOA->getAll();

require_once('../framework/view.class.php');

$view = new View('articles.view.php');

$view->assign('articles',$articles);

$view->display('articles.view.php');

?>
