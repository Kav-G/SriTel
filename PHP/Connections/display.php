<?php

$con = require '../DBConnection.php';
session_start();

if (isset($_POST["submitbtn"])){
            $conid = uniqid("CON_");
            $mobile = $_POST["mobile"];
            $answer = $_POST["rad"];
            $contype = $_POST["conType"];
            $reg_ofc = $_POST["reg_ofs"];
            $name = $_POST["name"];
            $address = $_POST["address"];
            $city = $_POST["city"];
            $telephpne = $_POST["telephone"];
            $email = $_POST["email"];
            $nic = $_POST["nic"];
            $comments = $_POST["comments"];
            $userId = $_SESSION["userID"];


            echo $userId;
            echo $conid;
            echo $mobile;
            echo $answer;
            echo $contype;
            echo $reg_ofc;
            echo $name;
            echo $address;
            echo $city;
            echo $telephpne;
            echo $email;
            echo $nic;
            echo $comments;

            if($comments == ""){
                $comments = "No Comment";
            }

            $query = "INSERT INTO connections VALUES('$conid', '$name', '$mobile', '$answer', '$address', '$city', $telephpne, '$email', '$contype', '$reg_ofc', '$nic', '$comments', '', 'Pending',$userId)";
        
            $valid = mysqli_query($con, $query);

            if($valid == true){

                echo "Passed!";
                header("Location:../Views/user_connections.php");

            }else
                echo "failed";
        }
?>