<?php

require_once('../framework/view.class.php');
require_once('../model/User.class.php');

session_start();

$view = new View('user.view.php');
$db = new MyDB();
// if(!$db){
//    echo $db->lastErrorMsg();
// } else {
//    echo "Base ouverte OK\n";
// }


if (isset($_GET['action']) ) {
    if ($_GET['action'] == 'signin') {
      if (isset($_REQUEST['email'] ) && isset($_REQUEST['password'])) {
        $email=$_REQUEST['email'];
        $password=$_REQUEST['password'];

        // echo "email : $email     //     mdp:       $password";


        $db = new MyDB();
        // if(!$db){
        //    echo $db->lastErrorMsg();
        // } else {
        //    echo "Base ouverte OK\n";
        // }

        // Verifier que les informations données correspondent aux données de la bdd

        $debMail = substr($email, 0, strpos($email, "@"));
        $finMail = substr($email, strpos($email, "@")+1, strlen($email));

        // echo "mail composé recomposé ça fait ça : $debMail@$finMail ";
        // echo " debut mail : $debMail ";
        // echo " fin mail : $finMail ";


        $result = $db->query("SELECT mdp FROM USER WHERE email ='".$debMail."@".$finMail."'".';');
        $bddMDP = $result->fetchArray();

        if ($bddMDP[0] == $password){
          $result = $db->query("SELECT nom FROM USER WHERE email ='".$debMail."@".$finMail."'".';');
          $bddNom = $result->fetchArray();
          $_SESSION['user'] = new User($bddNom[0],$email);
          $connexionOK = true;
          var_dump($_SESSION['user']);
        }else{
          $connexionOK = false;
        }
        $view->assign('connexionOK',$connexionOK);

       }
       $db->close();
    }
}


if (isset($_GET['action']) ) {
    if ($_GET['action'] == 'signup') {
      if (isset($_REQUEST['name']) && isset($_REQUEST['age']) && isset($_REQUEST['email'] ) && isset($_REQUEST['password'])) {

        $name=$_REQUEST['name'];
        $age=$_REQUEST['age'];
        $email=$_REQUEST['email'];
        $password=$_REQUEST['password'];

        // echo "nom : $name  //  age : $age    //  email : $email     //     mdp:       $password";

        $db = new MyDB();
        // if(!$db){
        //    echo $db->lastErrorMsg();
        // } else {
        //    echo "Base ouverte OK\n";
        // }

        //Inserer dans la basse de donnée les informations entrées

        $debMail = substr($email, 0, strpos($email, "@"));
        $finMail = substr($email, strpos($email, "@")+1, strlen($email));


        $result = $db->query("SELECT email FROM USER WHERE email ='".$debMail."@".$finMail."'".';');
        $bddEmail = $result->fetchArray();
        //var_dump($bddEmail[0]);

        if($bddEmail[0] == $email ){
          $inscriptionOK = false;
        }
        else{
          $sql =<<<EOF
            INSERT INTO user (ID,NOM,AGE,EMAIL,MDP)
            VALUES (1, '$name', '$age', '$email', '$password' );
          EOF;
          $ret = $db->exec($sql);
          if(!$ret){
          echo $db->lastErrorMsg();
          } else {
           // echo "OK\n";
          }
          $inscriptionOK = true;
        }
        $view->assign('inscriptionOK',$inscriptionOK);
        $db->close();
       }
    }
}



$view->display('user.view.php');




 ?>
