<?php

class SignUp extends DB
{

   protected function setUser($username,$password,$email)
   {
      $statment = $this->connect()->prepare('INSERT INTO users (username,password,email) VALUES (?,?,?);');

      $hashedPwd = password_hash($password,PASSWORD_DEFAULT);

      if (!$statment->execute(array($username,$hashedPwd,$email))) {
         $statment = null;
         header("Location: ../index.php?error=statementfailed");
         exit();
      }

      $statment = null;
   }

   protected function checkUser($username, $email)
   {
      $statment = $this->connect()->prepare("SELECT username FROM users WHERE username = ? OR email = ?;");

      if (!$statment->execute(array($username, $email))) {
         $statment = null;
         header("Location: ../index.php?error=statementfailed");
         exit();
      }

      
      if($statment->rowCount() > 0){
         $resultCheck = false;
      }else{
         $resultCheck = true;
      }

      return $resultCheck;
   }
}
