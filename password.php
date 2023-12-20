<?php
 

 function createPassword(){
    $passwordSet = $_GET["passwordSet"];
    $password = array();
    $pool = '!\"#$%&\'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`abcdefghijklmnopqrstuvwxyz{|}~';
    $poolLast = strlen($pool) - 1;
    for ($i=0; $i < $passwordSet ; $i++) { 
        $randomInt = rand(1,$poolLast);
        $password[]=$pool[$randomInt];

        
    }
    return implode($password) ;

    

 }
 ?>
<!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Strong Password Generator MP result</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 </head>

 <body>
 <?php echo createPassword(); ?>
 <a href="form.php">new password</a>

 </body>

</html>