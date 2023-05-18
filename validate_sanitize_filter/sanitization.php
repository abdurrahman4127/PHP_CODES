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
        <input type="text" name="name" placeholder="enter your name"> <br> 
        <input type="text" name="age" placeholder="enter your age"> <br> 
        <input type="text" name="mail" placeholder="enter your mail"> <br> <br> 

        <input type="submit" name="login" value="submit"> <br><br> 
    </form>
</body>
</html>


<?php
    if (isset($_GET["login"])) {
        // $name = $_GET["name"];
        $name = filter_input(INPUT_GET, "name", FILTER_SANITIZE_SPECIAL_CHARS); // filters the special chars out
        $age = filter_input(INPUT_GET, "age", FILTER_SANITIZE_NUMBER_INT);   // filters the integers in
        $mail = filter_input(INPUT_GET, "mail", FILTER_SANITIZE_EMAIL);

        echo "your name is ". $name . "<br>"; 
        echo "your are ". $age . " years old <br>";
        echo "your mail: ". $mail . "<br>";
    }
?>