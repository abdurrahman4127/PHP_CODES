<!-- arrays in php -->

<?php
    //array elements are to be put in an array function
    $capitals = array("AR", "Simon Riley", "Spike Spiegel", "L Lawliet");

    // to get the size of an array, use count($array_name)  
    for($i=0; $i<count($capitals); $i++) {
        echo $capitals[$i] . "<br>";
    }
?>