<?php 

class Validator {
    public $pattern = '';
    
    public function isValid($value){
        $isValid = false;

        if(preg_match($this->pattern, $value)){
            $isValid = true;
          } 
    return $isValid;
    }
}




 ?>