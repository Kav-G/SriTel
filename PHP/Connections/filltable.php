<?php 

    $con = require '../DBConnection.php';

    $query = "SELECT * FROM connections WHERE con_status = 'Pending'";

    $result = mysqli_query($con, $query);


    return $result;
    

?>