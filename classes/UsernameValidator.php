<?php 

class UsernameValidator extends Validator {

     public function __construct(){
        $this->pattern = "/^[a-zA-Z]{5,}$/";
     }
}

 ?>