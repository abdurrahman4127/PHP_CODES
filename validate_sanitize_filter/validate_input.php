<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    <form action="index.php" method="get">
        <input type="text" name="age" placeholder="enter your age"> <br> 
        <input type="text" name="mail" placeholder="enter your mail"> <br> <br> 

        <input type="submit" name="login" value="submit"> <br><br> 
    </form>
</body>
</html>




<?php
    if (isset($_GET["login"])) {
        // $name = $_GET["name"];
        $age = filter_input(INPUT_GET, "age", FILTER_VALIDATE_INT);   // filters the integers in
        $mail = filter_input(INPUT_GET, "mail", FILTER_VALIDATE_EMAIL);

        /* be aware of 'if(isset($age))' 
           isset will return true everytime there's value set to a variable  */

        if(empty($age)) {
            echo "age aint valid <br>";
        } else {
            echo "your age is: {$age} <br>";
        }

        if (empty($mail)) {
            echo "mail aint valid <br>";
        } else {
            echo "your mail is: {$mail} <br>";
        }
    }
?>