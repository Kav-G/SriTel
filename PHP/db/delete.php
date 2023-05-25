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


// sql to delete a record


$sql = "DELETE FROM customer_complaints WHERE complaint_id='" . $_GET["complaint_id"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
header('location:../View/table.php');
mysqli_close($conn);
?>

