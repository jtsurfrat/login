<?php 

class PasswordValidator extends Validator {
    public $pattern = "/^[a-zA-Z0-9!@#$%^&*\(\)]{5,}$/";
}

 ?>