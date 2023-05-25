<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "sri-tel";
            
            //-----------------------------------------------------------------connect mysql-----------------------------------------------------------------
    $conn = new mysqli($servername, $username, $password, $database);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
   
//-----------------------------------------------------------------get values form input text and number-----------------------------------------------------------------
   
   $complaint_id = $_POST['complaint_id'];
   $name = $_POST['name'];
   $email = $_POST['email'];
   $contact = $_POST['contact'];
   $description = $_POST['description'];
           
//-----------------------------------------------------------------mysql query to Update data-----------------------------------------------------------------

   $sql="UPDATE customer_complaints SET name = '$name',email='$email',contact= '$contact' WHERE complaint_id = $complaint_id ";
   $result = mysqli_query($conn, $sql);
   
   if($result){
       echo 'Data Updated';
   }else{
       echo 'Data Not Updated';
   }
   //mysqli_close($conn);
   header('location: ../View/table.php');

?>