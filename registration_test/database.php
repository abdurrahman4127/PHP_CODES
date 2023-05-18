<?php
    $db_server = "localhost";
    $uname = "root";
    $pass = "";
    $db_name = "php_test";

    try {
        $conn = mysqli_connect($db_server, $uname, $pass, $db_name);
    } catch (mysqli_sql_exception) {
        echo "something's wrong. i can feel it <br>";
    }
?>