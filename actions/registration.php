<?php


if(isset($_POST['submit']))
{
   //получение данных
   $username = $_POST['username'];
   $password = $_POST['password'];
   $pwdrepeat = $_POST['pwdrepeat'];
   $email = $_POST['email'];

   //Создать  экземляр класса SignUpCont class
   include '../classes/DB.php';
   include '../classes/SignUp.php';
   include '../classes/SignUpCont.php';
   
   
   $signup = new SignUpCont($username,$password,$pwdrepeat,$email);
  
   var_dump($signup);
   //проверка введённых данных и регистрация юзера
   $signup->signupUser();

  header('Location: ../index.php?error=none');
  
}


?>