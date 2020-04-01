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

   $sql =<<<EOF
      SELECT * from USER;
EOF;

   $ret = $db->query($sql);
   while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
      echo "ID = ". $row['ID'] . "\n";
      echo "<br>";
      echo "NAME = ". $row['NAME'] ."\n";
      echo "AGE = ". $row['AGE'] ."\n";
      echo "EMAIL =  ".$row['EMAIL'] ."\n";
      echo "PASSWORD =  ".$row['PASSWORD'] ."\n\n";
   }
   echo "OK\n";
   $db->close();
?>
