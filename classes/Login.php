<?php

class Login extends DB
{
   protected function getUser($username, $password)
   {
      $statment = $this->connect()->prepare('SELECT password FROM users WHERE username = ? OR email = ?');

      if (!$statment->execute(array($username, $password))) {
         $statment = null;
         header("Location: ../index.php?error=statementfailed");
         exit();
      }

      if ($statment->rowCount() == 0) {
         $statment = null;
         header("Location: ../index.php?error=usernotfound");
         exit();
      }

      $pwdHashed = $statment->fetchAll(PDO::FETCH_ASSOC);

      $checkPwd = password_verify($password, $pwdHashed[0]['password']);

      $statment = null;

      if ($checkPwd == false) {

         $statment = null;
         header("Location: ../index.php?error=wrongpassword");
         exit();

      } elseif ($checkPwd == true) {
         $statment = $this->connect()->prepare('SELECT * FROM users WHERE username = ? OR email = ? AND password = ?;');

         if (!$statment->execute(array($username,$username, $password))) {
            $statment = null;
            header("Location: ../index.php?error=statementfailed");
            exit();
         }

         if ($statment->rowCount() == 0) {
            $statment = null;
            header("Location: ../index.php?error=usernotfound");
            exit();
         }

         $user = $statment->fetchAll(PDO::FETCH_ASSOC);
         session_start();
         
         $_SESSION['userid'] = $user[0]['id'];
         $_SESSION['username'] = $user[0]['username'];
      }
   }
}
