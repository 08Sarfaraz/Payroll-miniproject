<?php
  define('db_server','localhost');
  define('db_username','root');
  define('db_password','');
  define('db_database','payroll');
  define('db_port','3307');
  $connection=mysqli_connect(db_server,db_username,db_password,db_database,db_port);
  if($connection){
      echo"Succeccfully connected to database <br>";
  }
else{
    echo"Failed to connect to database";
   }
?>