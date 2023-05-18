<?php 
    include("database.php");

    try {
        $sql = "SELECT * FROM users";
        $result = mysqli_query($conn, $sql);
    
        if(mysqli_num_rows($result) > 0) {

            while($row = mysqli_fetch_assoc($result)) {
                echo "ID: " . $row["id"] . "<br>";
                echo "username: " . $row["user"] . "<br>";
                echo "registration date: " . $row["reg_date"] . "<br><br>";
            }
        }
    } 
    catch (mysqli_sql_exception) {
        echo "cant show data <br>";
    }
?>