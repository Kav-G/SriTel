<?php
    $con = mysqli_connect("localhost", "root", "", "sri-tel");

    if (mysqli_connect_errno()){
        echo "Failed to connect to DB!"
        .mysqli_connect_error();
    } else {
        //echo "DB connection successful!";
        echo "<br>";
    }

    return $con;

?>