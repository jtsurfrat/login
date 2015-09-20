<?php 

require_once('initializer.php');

$user_log = new UserLogin();

    if(!($user_log->isLogged())){
       header('Location: index.php');
    } else if(isset($_SESSION['username']) && strlen($_SESSION['username']) > 0){
       
       $username = $_SESSION['username'];
        // $username = $user_log->getUser();
}


// if (isset($_SESSION['username']) && strlen($_SESSION['username']) > 0) {
//     $username = $_SESSION['username'];
// } else {
//     header('Location: index.php');
// }

 ?>
 <!DOCTYPE html>
 <html lang="en">
     <head>
         <meta charset="UTF-8">
         <title>Document</title>
     </head>
     <body>
     <?= "Hello " . $username . " you are login." ; ?><br>
     <a href="logout.php">Logout</a>
     
         
     </body>
 </html>