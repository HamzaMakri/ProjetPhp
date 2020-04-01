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
      echo "Base de donnée ouverte\n";
   }

   $sql =<<<EOF
      CREATE TABLE USER
      (ID      NOT NULL,
      NAME           TEXT    NOT NULL,
      AGE            INT     NOT NULL,
      EMAIL        CHAR(50),
      PASSWORD         TEXT);
EOF;

   $ret = $db->exec($sql);
   if(!$ret){
      echo $db->lastErrorMsg();
   } else {
      echo "Table crée ok\n";
   }
   $db->close();
?>
