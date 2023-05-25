        <?php
	    session_start();
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "sri-tel";
            
            //-----------------------------------------------------------------connect mysql-----------------------------------------------------------------
            $conn = new mysqli($servername, $username, $password, $database);
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }
            

                //-----------------------------------------------------------------Insert data to mysql-----------------------------------------------------------------
                     if(isset($_POST['submit'])){	 
                        //$complaint_id = $_POST['complaint_id'] ?? "";
                        $date = $_POST['date'] ?? "";
                        $time = $_POST['time'] ?? "";
                        //$name = $_POST['name'];
                        $name = $_SESSION['username'];
                        $email = $_POST['email'];
                        $contact = $_POST['contact'];
                        $type = $_POST['type'];
                        $description = $_POST['description'];
        
                        $sql = "INSERT INTO customer_complaints(date, time, name, email, contact, type, description)
                        VALUES (CURRENT_DATE,CURRENT_TIME,'$name', '$email', '$contact', '$type', '$description')";
                       

                        if (mysqli_query($conn, $sql)) {
                            //echo "New record created successfully !";
                         } else {
                            echo "Error: " . $conn->error;
                            mysqli_close($conn);
                         }
                        // mysqli_close($conn);
                    }
		header('location: ../View/com_form.php');
                     
                    // exit();
                     
           // $conn->close();
        ?> 


