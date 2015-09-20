<?php 

// session_start();

require_once('initializer.php');

$user_log = new UserLogin();
$message = '';
$error = ['Invalid password', 'Invalid username', "Invalid username and password"];
// $hasError = new ErrorManager();


if(isset($_SESSION['username']) && strlen($_SESSION['username']) > 0){
    if($user_log->isLogged()){
       header('Location: account.php');
       exit();
   }
} else{
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(isset($_POST['username']) && isset($_POST['password'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $usernameValidator = new UsernameValidator;
            $passwordValidator = new PasswordValidator;
            // if()){
            //     // if(!(strlen($username) > 5)){
            //     echo "dog";
            //     $user_log->startSession();
            //     // }
            // } else {
            //     echo "error username is invalid";
            // }

            if(($passwordValidator->isValid($password)) && ($usernameValidator->isValid($username))){ 

                // if(strlen($_POST['password']) > 7){
                    $_SESSION['username'] = $_POST['username'];
                    $user_log->startSession();
                    header('Location: account.php');
                    exit();
                //  }

            } else if(!($passwordValidator->isValid($password))) {
                // $message =  $error[0];
                $message =  $error[0];

            } else if(!($usernameValidator->isValid($username))){
                // $message =  $error[1];
                $message =  $error[1];
            } else if (!($usernameValidator->isValid($username)) && !($passwordValidator->isValid($password))){
                // $message =  $error[2];
                // $message = $error[2];
            }

        }  
    }
}

 ?>

 <!DOCTYPE html>
 <html lang="en">
     <head>
         <meta charset="UTF-8">
         <title>Document</title>
         <link rel="stylesheet" type="text/css" href="css.css">
     </head>
     <body>
        <form action="" method="POST">
            <p class="error"><?php echo $message; ?></p>
            <label>Username:<input type="text" name="username"></label><br>
            <label>Password:<input type="text" name="password"></label><br>
            <button>Login</button>
        </form>
       
         
     </body>
 </html>