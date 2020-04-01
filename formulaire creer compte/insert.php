<?php
   class MyDB extends SQLite3
   {
      function __construct()
      {
         $this->open('test.db');
      }
   }
   $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
   } else {
      echo "Base ouverte OK\n";
   }

?>

<center>

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

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
</center>

 <?php

    $name=$_REQUEST['name'];
    $age=$_REQUEST['age'];
    $email=$_REQUEST['email'];
    $password=$_REQUEST['password'];


   $sql =<<<EOF
      INSERT INTO USER (ID,NAME,AGE,EMAIL,PASSWORD)
      VALUES (1, '$name', '$age', '$email', '$password' );


EOF;

   $ret = $db->exec($sql);
   if(!$ret){
    echo $db->lastErrorMsg();
   } else {
     echo "OK\n";
   }
   $db->close();
?>
