<?php

class DB
{
   protected function Connect()
   {
      try{
         $username = "root";
         $password = '';
         $db = new PDO('mysql:host=localhost;dbname=ooplogin',$username,$password);
         return $db;
      }
      catch(PDOException $e){
         print "Error!:".$e->getMessage()."<br>";
         die();
      }

   }
  

}



?>