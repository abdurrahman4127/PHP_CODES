<!--
$_SERVER:
    super global variable that contains headers, paths, and script locations.
    the entries in this arrays are created by the web stream_socket_server
    shows nearly everything about current web page environment
-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- $_SERVER["PHP_SELF"] can dynamically refer to its self page-->
    <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
        <label>username: </label>
        <input type="text" name="username" placeholder="enter username"> <br>
        <input type="submit" name="submit" value="submit"> <br>
    </form>
</body>
</html>

<?php
    // foreach ($_SERVER as $key => $value) {
    //     echo "{$keys} => {$value} <br>";
    // }

    if(isset($_POST["submit"])) {
        $username = $_POST["username"];

        if(!empty($username)) {
            echo "username: {$username} <br>";
        } else {
            echo "please input your username <br>";
        }
    }

?>
