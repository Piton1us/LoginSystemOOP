<!DOCTYPE html>
<html lang="en">

<head>
   <link rel="icon" type="png" href="img/0K1yiwxSXX0.jpg">
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/main.css">
   <title>Login system</title>
</head>

<body>

   <div class="wrapper">

      <header>
         <h2>Creative design</h2>
         <ul>
            <li>User</li>
            <li>Button</li>
         </ul>
      </header>

      <main>
         <form action="actions/login.php" method="post">
            <h1>LOGIN</h1>
            
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <button type="submit" class="btn-form" name="submit">LOGIN</button>

         </form>

         <form action="actions/registration.php" method="post">
            <h1>SIGN UP</h1>
            <p>Don`t have an account yet? Sign up here!</p>
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <input type="password" name="pwdrepeat" placeholder="Repeat Password">
            <input type="email" name="email" placeholder="E-mail">
            <button type="submit" class="btn-form" name="submit">Sign up</button>

         </form>


      </main>


   </div>

</body>

</html>