<?php 
require_once('initializer.php');

session_start();

$user_log = new UserLogin();

$user_log->logout();




 ?>

 <!DOCTYPE html>
 <html lang="en">
     <head>
         <meta charset="UTF-8">
         <title>Document</title>
     </head>
     <body>
     <a href="session.php">Login</a>
     <p>You are being redirected</p>
         
     </body>
 </html>