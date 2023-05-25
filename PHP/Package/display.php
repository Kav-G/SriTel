<?php

$con = require 'DBConnection.php';
session_start();

if (isset($_POST["sb"])){
            $conid = uniqid("PKG_");
            $name = $_POST["name"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $address = $_POST["address"];
            $package = $_POST["package"];

            echo $conid;
            echo $name;
            echo $email;
            echo $phone;
            echo $address;
            echo $package;

            $query = "INSERT INTO package VALUES('$conid', '$name', '$email', '$phone', '$address', '$package')";
        
            $valid = mysqli_query($con, $query);

            if($valid == true){

                echo "Passed!";
                header("Location:./requestingform.php");

            }else
                echo "failed";
        }
?>