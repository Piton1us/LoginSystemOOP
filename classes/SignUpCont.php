<?php

class SignUpCont extends SignUp
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

   public function signupUser()
   {
      if($this->emptyInput() == false){
         header("Location: ../index.php?error=emptyinput");
         exit();
      }

      if($this->invalidName() == false){
         header("Location: ../index.php?error=username");
         exit();
      }

      if($this->invalidEmail() == false){
         header("Location: ../index.php?error=email");
         exit();
      }

      if($this->pwdMatch() == false){
         header("Location: ../index.php?error=passwordmatch");
         exit();
      }

      if($this->usernameTakenCheck() == false){
         header("Location: ../index.php?error=useroremailtaken");
         exit();
      }

      $this->setUser($this->username,$this->password,$this->email);
   
   }
   

   private function emptyInput()
   {
      
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

   private function usernameTakenCheck()
   {
      $result = null;
      if(!$this->checkUser($this->username, $this->email)){
         $result = false;
      }else{
         $result = true;
      }
      
      return $result;
   }

}
