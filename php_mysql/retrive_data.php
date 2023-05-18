<?php 
    include("database.php");

    try {
        $sql = "SELECT * from users"; 

        // result is tecnically an object - containing associative array
        $result = mysqli_query($conn, $sql);  

        if(mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "ID: " . $row["id"] . "<br>";
                echo "username: " . $row["user"] . "<br>";
                echo "reg_date: " . $row["reg_date"] . "<br> <br>";
            }
        }
    } 

    catch(mysqli_sql_exception) {
        echo "something's wrong. i can feel it <br>";

    }

    // close connection!
    mysqli_close($conn);
?>