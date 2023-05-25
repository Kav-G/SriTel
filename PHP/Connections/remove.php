<?php 

    echo $_POST['con_id'];

    $con_id = $_POST['con_id'];

    $con = require '../DBConnection.php';

    $query = "DELETE FROM connections WHERE con_id = '$con_id'";

    $result = mysqli_query($con, $query);

    if($result){
        header("Location:../Views/displaydetails.php");
    }
?>