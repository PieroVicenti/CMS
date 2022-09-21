<?php

$server = "localhost";
$user = "root";
$psw = "password";
$db = "cms";

$connection = mysqli_connect($server, $user, $psw, $db);

    if($connection){
        //echo "Connected";
    }else{
        echo "Problem with connection";
    }

?>