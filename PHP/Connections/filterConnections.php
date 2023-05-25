<?php 

    $userId = $_SESSION['userID'];

    $con = require '../DBConnection.php';

    $query = "SELECT * FROM connections WHERE userId = '$userId'";

    $result = mysqli_query($con, $query);

    /*while ($rows = mysqli_fetch_array($result)){
                
        if($rows['remarks'] == ""){
            $rows['remarks'] = "No remark";
        }
    }*/


    return $result;

?>