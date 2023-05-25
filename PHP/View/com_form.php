<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Complaint Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../CSS/com_form.css">
    <link rel="stylesheet" href="../../CSS/sidenav.css">
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
                <a href="../Views/connectionForm.php" class="nav-link">
                    <img src="../../Images/description-24px.svg" alt="" class="link-img">
                    <span class="link-text">Connections</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="../Views/user_connections.php" class="nav-link">
                    <img src="../../Images/list_alt-24px.svg" alt="" class="link-img">
                    <span class="link-text">Requests</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="../Package/Packages.php" class="nav-link">
                    <img src="../../Images/inventory_2-24px.svg" alt="" class="link-img">
                    <span class="link-text">Packages</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="../View/com_form.php" class="nav-link">
                    <img src="../../Images/assistant_photo-24px.svg" alt="" class="link-img">
                    <span class="link-text">Complaints</span>
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
    <div class="wrapper">
        <div class="form">
            <h1>Customer Complaint Form</h1>
            <form action="../db/com_formdb.php" id="com_form" method="POST">

                        <div style="float: left; width: 50%;">
                            <label for="contact">Contact Number</label><br>
                            <input type="text" id="contact" name="contact" placeholder="Enter Your Phone Number" class="contact" required><br>
                            <span id="error11" class="error-msg"></span>
                        </div>


                        <div style="float:right;width: 50%;">
                            <label for="email">E-mail</label><br>
                            <input type="text" id="email" name="email" placeholder="Enter email" required><br>
                            <span id="error12" class="error-msg"></span>
                        </div>


                        <div style="float: left; width: 50%;">
                            <label for="type">Complaint Type</label><br>
                            <select name="type" id="type">
                                <option disabled value="none" selected>- Select Type of Complaint -</option>
                                <option value="Issue on connection" >Issue on connection</option>
                                <option value="Issue on packages">Issue on packages</option>
                                <option value="Feedback" >Feedback</option>
				<option value="Other">Other</option>
                            </select> <br/>
                        </div>



			<h1><font color="white">Com</font></h1>
    			<div style=width: 50%;">
				<label for="description">Complaint</label><br>
        			<textarea name="description" cols="40" rows="10" style="width: 90%;" placeholder="Type your complaint"  id="description" required></textarea>
    			</div>

                        <div>
                            <input type="submit" class="submit" name="submit"  id="submit">
                        </div>
            </form>
            
        </div>
        <script src="../../JS/complaint_valid.js"></script>
</body>
</html>