<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="associative_array.php" method="get">
        <input type="text" name="country" placeholder="enter country's name ...">
        <input type="submit" name="submit" value="submit"> <br><br>
    </form>
</body>
</html>


<?php 

    $teams = array("Spain" => "Madrid",
                   "England" => "London",
                   "Italy" => "Roma");

    if(isset($_GET["submit"])) {
        $input = $_GET["country"];

        // checking if the input is matched with array's key
        if(isset($teams[$input])) {
            echo $teams[$input] . "<br>";
        } else {
            echo "country not found in the array";
        }
    }
?>