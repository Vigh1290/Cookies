<?php
$name ="Somename";
$value=100;
$expiration= time() + (60*60*24*7);
setcookie($name,$value,$expiration);


?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
</head>
<body>
    <?php
    if(isset($_COOKIE['Somename'])){
        $Somename= $_COOKIE['Somename'];
        echo $Somename;


    }
    else{
        $Somename="";
    }
    
    ?>
  
</body>
</html>