<?php 

    $con = require '../DBConnection.php';

    $query = "SELECT * FROM connections WHERE con_status = 'Approved' OR con_status = 'Not Approved'";

    $results = mysqli_query($con, $query);

    return $results;
    

?>