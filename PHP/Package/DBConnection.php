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
    
    /*$result = mysqli_query($con, "SELECT * FROM user"); 

    if ($result == null){

        echo "Empty!";

    }
    
    while ($row = mysqli_fetch_array($result)){

        echo $row['id']." ".$row['name'];
        echo "<br>";

    }*/
?>