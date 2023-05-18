<?php
    $password = "ar4127";
    $hash = password_hash($password, PASSWORD_DEFAULT);
    
    echo "your hash: " . $hash . "<br> <br>";

    // to verify, 
    if(password_verify("ar4127", $hash)) {
        echo "matched! here's your <br> password: {$password} <br> hash: {$hash} <br>";
    } 
    else {
        echo "password and hash didnt match <br>";   
    }
?>