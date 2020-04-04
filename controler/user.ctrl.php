<?php

require_once('../framework/view.class.php');
require_once('../model/User.class.php');

session_start();


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

        echo "email : $email     //     mdp:       $password";


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
        var_dump($bddMDP[0]);

        if ($bddMDP[0] == $password){
          $bddNom = $db->exec("SELECT nom FROM USER WHERE email ='".$debMail."@".$finMail."'".';');
          $_SESSION['user'] = new User($bddNom,$email);
        } 
       }
    }
}


if (isset($_GET['action']) ) {
    if ($_GET['action'] == 'signup') {
      if (isset($_REQUEST['name']) && isset($_REQUEST['age']) && isset($_REQUEST['email'] ) && isset($_REQUEST['password'])) {
        $name=$_REQUEST['name'];
        $age=$_REQUEST['age'];
        $email=$_REQUEST['email'];
        $password=$_REQUEST['password'];

        echo "nom : $name  //  age : $age    //  email : $email     //     mdp:       $password";


        $db = new MyDB();
        // if(!$db){
        //    echo $db->lastErrorMsg();
        // } else {
        //    echo "Base ouverte OK\n";
        // }
        //Inserer dans la basse de donnée les informations entrée

        $bddNom = $db->query("SELECT nom FROM USER WHERE email = $email");
        if (condition) {
          // code...
        }

        $sql =<<<EOF
          INSERT INTO user (ID,NOM,AGE,EMAIL,MDP)
          VALUES (1, '$name', '$age', '$email', '$password' );
        EOF;

        $ret = $db->exec($sql);
        if(!$ret){
        echo $db->lastErrorMsg();
        } else {
         echo "OK\n";
         $inscriptionOK = true;
        }
        $db->close();



       }
    }
}




$view = new View('user.view.php');

// $view->assign('user',$articles);

$view->display('user.view.php');


 ?>
