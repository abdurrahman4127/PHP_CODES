<?php 
    include("database.php");
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
    <h3>Welcome to the Registration Page</h3>
    <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
        <input type="text" name="username" placeholder="enter your username"> <br>
        <input type="password" name="password" placeholder="enter your password"> <br>

        <input type="submit" name="register" value="register"> <br> <br>

        <a href="show_info.php"> show users' info </a> <br>
    </form>
</body>
</html>


<?php 

    if(isset($_POST["register"])) {
        if (empty($_POST["username"])) {
            echo "enter your username! <br>";
        }
        if (empty($_POST["password"])) {
            echo "enter your password! <br>";
        }
        
        if(!empty($_POST["username"]) && !empty($_POST["password"])) {
            $username = $_POST["username"];
            $password = $_POST["password"];
            $hash = password_hash($password, PASSWORD_DEFAULT);

            // insert into the database
            try {
                $sql = "INSERT INTO users (user, password) VALUES('$username', '$hash')"; 
                mysqli_query($conn, $sql);
                echo "successfully register!! <br>";
            } 
            catch (mysqli_sql_exception) {
                echo "cant register <br>";
            }
        }
    }

    mysqli_close($conn);
?>