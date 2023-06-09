<?php

class SignUp extends DB
{
   protected function checkUser($username,$email)
   {
      $statment = $this->connect()->prepare("SELECT username FROM users WHERE username = ? OR email = ?;");

      if(!$statment->execute(array($username,$email))){
         $statment = null;
         header("Location: ../index.php?error=statementfailed");
      }
   }

}




?>