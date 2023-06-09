<?php

if(isset($_POST['submit']))
{
   //получение данных
   $username = $_POST['username'];
   $pasword = $_POST['pasword'];
   $pwdrepeat = $_POST['pwdrepeat'];
   $email = $_POST['email'];

   //Создать  экземляр класса SignUpCont class
   include '../classes/SignUp.php';
   include '../classes/SignUpCont.php';
   
   $signup = new SignUpCont($username,$pasword,$pwdrepeat,$email);

   //проверка данных 
}


?>