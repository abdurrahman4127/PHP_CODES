<?php 
    session_start();   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    <h3>this is the login page.</h3> <br>

    <form action="index.php" method="post">
        <input type="text" name="username" placeholder="enter your username"> <br>
        <input type="password" name="password" placeholder="enter your password"> <br>

        <input type="submit" name="login" value="login"> <br>
    </form>
</body> 
</html>

<?php
    $username = null;
    $password = null;

    if (isset($_POST["login"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if(!empty($username &&  $password)) {
            $_SESSION["username"] = $username;
            $_SESSION["password"] = $password;

            // redirects to another page
            header("location: home.php");
        } 
        else {
            echo "please enter username/password";    
        }
    }
    
    // echo $username . "<br>";
    // echo $password . "<br>";
?>