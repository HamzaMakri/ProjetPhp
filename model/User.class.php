<?php

  class user {

    public $nom;
    public $email;



    function __construct($nm,$mail) {
      $this->nom = $nm;
      $this->email = $mail;
    }
  }


   class MyDB extends SQLite3 {
      function __construct() {
         $this->open('../data/sqlite/base.db');
      }
   }




 ?>
