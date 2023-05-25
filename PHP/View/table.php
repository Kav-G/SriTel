<!DOCTYPE html>
<html>
<head>
	<title>Table with database</title>
	<link rel="stylesheet" href="../../CSS/tablestyles.css">
	<link rel="stylesheet" href="../../CSS/sidenav.css">
    	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
		<?php
        require_once('../session_check.php');
    ?>
</head>

<body>
<nav class="navbar">
        <ul class="navbar-nav">
            <li class="logo">
                <a href="#" class="nav-link">
                    <img src="../../Images/cell_wifi-24px.svg" alt="" class="logo-img">
                    <span class="link-text">
                        SRI-TEL
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a href="../../index.html" class="nav-link">
                    <img src="../../Images/home-24px.svg" alt="" class="link-img">
                    <span class="link-text">Home Page</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="../Views/displaydetails.php" class="nav-link">
                    <img src="../../Images/description-24px.svg" alt="" class="link-img">
                    <span class="link-text">Requests</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="../View/table.php" class="nav-link">
                    <img src="../../Images/list_alt-24px.svg" alt="" class="link-img">
                    <span class="link-text">Complaints</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="../View/com_form.php" class="nav-link">
                    <img src="../../Images/inventory_2-24px.svg" alt="" class="link-img">
                    <span class="link-text">Packages</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="../logout.php" class="nav-link">
                    <img src="../../Images/logout-24px.svg" alt="" class="link-img1">
                    <span class="link-text">Logout</span>
                </a>
            </li>
        </ul>
    </nav>

<div class="main">
<div class="tab">
<table>
<tr>
	<th>Complaint Id</th>
	<th>Date</th>
	<th>Time</th>
	<th>Name of complainer</th>
	<th>Email</th>
	<th>Contact No</th>
	<th>Type of complain</th>
	<th>Complaint</th>
	<th>Update</th>
	<th>Delete</th>
	

</tr>

<?php

$conn = mysqli_connect("localhost", "root", "", "sri-tel");

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT complaint_id,date,time,name,email,contact,type,description FROM customer_complaints";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
	// output data of each row

	while($row = $result->fetch_assoc()) {
    ?>
        <tr>
			<td><?php echo $row["complaint_id"]; ?></td>
			<td><?php echo $row["date"]; ?></td>
			<td><?php echo $row["time"]; ?></td>
			<td><?php echo $row["name"]; ?></td>
			<td><?php echo $row["email"]; ?></td>
			<td><?php echo $row["contact"]; ?></td>
			<td><?php echo $row["type"]; ?></td>
            		<td><?php echo $row["description"]; ?></td> 
	    
            		<td><a href="update.php?complaint_id=<?php echo $row['complaint_id']; ?>"><input type="button" value="Update"></td>
            		<td><a href="../db/delete.php?complaint_id=<?php echo $row['complaint_id']; ?>"><input type="button" value="Delete"></a> </td>
        </tr>
    <?php
	}


	echo "</table>";
} 
else { echo "0 results"; }
$conn->close();

?>
</table>
</div>
</div>
</body>
</html>