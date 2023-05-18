<?php
    $db_server = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "php_test";

    $conn = mysqli_connect($db_server, $db_user, $db_password, $db_name);

    if(!empty($conn)) {
        echo "we're up and running <br> <br>";
    } else {
        echo "we're down <br>";
    }
?>