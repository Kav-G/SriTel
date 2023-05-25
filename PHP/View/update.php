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

$sql = "SELECT complaint_id,date,time,name,email,contact,type,description FROM customer_complaints";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
	// output data of each row

	while($row = $result->fetch_assoc()) {
    
        
			echo $row["complaint_id"]."  |  ";
			echo $row["date"]."  |  ";
			echo $row["time"]."  |  "; 
			echo $row["name"]."  |  "; 
			echo $row["email"]."  |  "; 
			echo $row["contact"]."  |  "; 
			echo $row["type"]."  |  "; 
            echo $row["description"]."  |  <br /><br />";
	    
        
    }
}
?>


<!DOCTYPE html>

<html>

    <head>

        <title> PHP UPDATE DATA </title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>





        <form action="../db/updatedb.php" method="POST">

            ID To Update: <input type="text" name="complaint_id" required><br><br>

            New First Name:<input type="text" name="name" required><br><br>

            New Email:<input type="text" name="email" required><br><br>

            New Phone NUmber:<input type="text" name="contact" required><br><br>

	        New Complaint:<input type="text" name="description" required><br><br>

            <input type="submit" name="update" value="Update Data">

        </form>

    </body>


</html>