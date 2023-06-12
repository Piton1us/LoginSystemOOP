<?php


if(isset($_POST['submit']))
{
   //получение данных
   $username = $_POST['username'];
   $password = $_POST['password'];
   

   //Создать  экземляр класса SignUpCont class
   include '../classes/DB.php';
   include '../classes/Login.php';
   include '../classes/LoginCont.php';
   
   
   $login = new LoginCont($username,$password);
  

   //проверка введённых данных и регистрация юзера
   $login->loginUser();

  header('Location: ../index.php?error=none');
  
}


?>