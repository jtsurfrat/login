<?php 

Class UserLogin {

    public function startSession(){
        $_SESSION['username'] = $_POST['username'];
    }

    public function isLogged(){
        if(array_key_exists('username',$_SESSION)){
            return true;
        } else{
            return false;
        }
    }

    public function logOut(){
        unset($_SESSION['username']);
        header('Location: index.php');
        //header('refresh:3; url=index.php');
    }

    public function getUser(){
        if($this->isLogged()){
            return $_SESSION['username'];
        } else {
            return '';
        }

    }
}

 ?>