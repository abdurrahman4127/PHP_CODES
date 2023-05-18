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
    <h5>HOME</h5> <br>
    <form action="index.php" method="post">
        <input type="submit" name="logout" value="logout"> <br>
    </form>
</body> 
</html>

<?php 
    echo $_SESSION["username"] . "<br>";
    echo $_SESSION["password"] . "<br>"; 
    
    if(isset($_POST["logout"])) {
        session_destroy();
        header("location: index.php");
    }
?>