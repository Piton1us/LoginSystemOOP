<?php

class SignUpCont
{

   private $username;
   private $password;
   private $pwdrepeat;
   private $email;

   public function __construct($username,$password,$pwdrepeat,$email)
   {
      $this->username = $username;
      $this->password = $password;
      $this->pwdrepeat = $pwdrepeat;
      $this->email = $email;
   }

   private function emptyInput()
   {
      $result = null;
      if(empty($this->username) || empty($this->password) || empty($this->pwdrepeat) || empty($this->email)){
         $result = false;
      }else{
         $result = true;
      }

      return $result;
   }

   private function invalidName()
   {
      $result = null;
      if(!preg_match("/^[a-zA-Z0-9]*$/",$this->username)){
         $result = false;
      }else{
         $result = true;
      }
      
      return $result;

   }

   private function invalidEmail()
   {
      $result = null;
      if(!filter_var($this->email,FILTER_VALIDATE_EMAIL)){
         $result = false;
      }else{
         $result = true;
      }
      
      return $result;

   }

   private function pwdMatch()
   {
      $result = null;
      if($this->password !== $this->pwdrepeat){
         $result = false;
      }else{
         $result = true;
      }
      
      return $result;
   }

}



?>