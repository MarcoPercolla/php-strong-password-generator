<?php
 

 function createPassword(){
    $passwordSet = $_GET["passwordSet"];
    $password = array();
    $pool = '!$&0123456789?@ABCDEFGHIJKLMNOPQRSTUVWXYZ^-_abcdefghijklmnopqrstuvwxyz~';
    $poolLast = strlen($pool) - 1;
    for ($i=0; $i < $passwordSet ; $i++) { 
        $randomInt = rand(1,$poolLast);
        array_push($password,$pool[$randomInt]);

        
    }
    return implode($password) ;

    

 }
?>