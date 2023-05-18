<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="radio_button_selection.php" method="POST">
        <label>choose payment method</label> <br>
        <input type="radio" name="group" value="visa"> VISA <br>   
        <input type="radio" name="group" value="master_card"> MASTERCARD <br>   
        <input type="radio" name="group" value="bkash"> BKASH <br> <br>
        
        <input type="submit" name="confirm" value="confirm"> <br>
    </form>
</body>
</html>


<?php
    if(isset($_POST["confirm"])) {
        if(isset($_POST["group"])) {
            $selectedMethod = $_POST["group"]; 
            echo "you selected {$selectedMethod}";
        } 
        else {
            echo "must select one payment method";
        } 
    }
?>