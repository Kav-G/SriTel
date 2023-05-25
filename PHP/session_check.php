<?php 
    
    session_start();

    if($_SESSION['userID'] == NULL){

        header("location:../User/login.php");

    }

?>