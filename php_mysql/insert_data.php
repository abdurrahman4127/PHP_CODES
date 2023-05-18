<?php 
    include("database.php");

    $uname = "ar";
    $pswd = "48du12124hm4n";

    // hashing the password
    $pswd_hash = password_hash($pswd, PASSWORD_DEFAULT);

    // insert the hashed password into the table
    $sql = "INSERT INTO users (user, password) VALUES('$uname', '$pswd_hash')";  //since ID is PK, with auto incr., it can be avoided 

    // if, in case, query goes wrong, catch it the exception block
    try {
        mysqli_query($conn, $sql);
        echo "user registered!! <br>";
    } 
    catch (mysqli_sql_exception) {
        echo "cant register <br>";
    }

    // close connection!
    mysqli_close($conn);
?>