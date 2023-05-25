<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connection Form</title>
    <link rel="stylesheet" href="../../CSS/connection_form.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../CSS/sidenav.css">
</head>
<body>
    <?php 

        require_once('../session_check.php');

        include('../sidenav.php');
         
    ?>
    <div class="main">
    <div class="grid-container">
        <div class="form">
            <h1>New Connection Form</h1>
            <form action="../Connections/display.php" id="test" method="POST">
                        <div style="width: 100%;">
                            <label for="mobile">Mobile</label><br>
                            <input type="text" id="mobile" name="mobile" placeholder="Mobile Number" class="validate"><br>
                            <span id="error1" class="error-msg"></span>
                        </div>
                        <div style="float: left; width: 100%;" class="disappear">
                            <label for="rad">Are you an existing Sri-Tel customer?</label><br>
                            <input type="radio" value="Yes" id="yes" name="rad" required>Yes 
                            <input type="radio" value="No" id="no" name="rad" required>No
                        </div>
                        <div style="float: left; width: 50%;">
                            <label for="conType">Choose your connection type</label><br>
                            <!--Connection type = conType-->
                            <select name="conType" id="conType" required>
                                <option disabled value="none" selected>- None -</option>
                                <option value="Megaline">Megaline</option>
                                <option value="Fiber">Fiber</option>
                                <option value="4GLte">4G/LTE</option>
                                <option value="Citylink CDMA">Citylink CDMA</option>
                            </select>
                        </div>
                        <div style="float: left; width: 50%;">
                            <!-- Reginoal office = reg_ofz -->
                            <label for="reg_ofs">Nearest Sri-Tel Regional office</label><br>
                            <select name="reg_ofs" id="reg_ofs" required>
                                <option disabled value="none" selected>- None -</option>
                                <option value="Colombo">Colombo</option>
                                <option value="Gampaha">Gampaha</option>
                                <option value="Kalutara">Kalutara</option>
                            </select> <br/>
                        <!--<span id="error6" class="error-msg"></span>-->
                        </div>
                        <div style="float: left; width: 50%;">
                            <label for="name">Full Name</label><br>
                            <input type="text" placeholder="Enter your Name" name="name" id="fname" class="validate"><br>
                            <span id="error7" class="error-msg"></span>
                        </div>
                        <div style="float: left; width: 50%;">
                            <label for="address">Address</label><br>
                            <input type="text" placeholder="Enter your Address" id="address" name="address" class="validate"><br>
                            <span id="error9" class="error-msg"></span>
                        </div>
                        <div style="float: left; width: 50%;">
                            <label for="city">City</label><br>
                            <input type="text" placeholder="City" id="city" name="city" class="validate"><br>
                            <span id="error10" class="error-msg"></span>
                        </div>

                        <div style="float: left; width: 50%;">
                            <label for="telephone">Telephone</label><br>
                            <input type="text" id="telephone" name="telephone" placeholder="Telephone" class="validate"><br>
                            <span id="error11" class="error-msg"></span>
                        </div>
                        <div style="float: left;width: 50%;">
                            <label for="email">E - mail</label><br>
                            <input type="text" id="email" name="email" placeholder="E - mail" class="validate"><br>
                            <span id="error12" class="error-msg"></span>
                        </div>
                        <div style="float: left; width: 50%;">
                            <label for="nic">NIC / Passport Number</label><br>
                            <input type="text" id="nic" name="nic" placeholder="NIC / Passport Number" class="validate"><br>
                            <span id="error" class="error-msg"> 
                            </span>
                        </div>
                        <div colspan="2">
                            <label for="comments">Comments</label><br>
                            <textarea name="comments" id="" cols="40" rows="10" style="width: 90%;"></textarea>
                        </div>
                        <div>
                            <input type="submit" class="submitbtn" name="submitbtn"  id="submitbtn">
                        </div>
            </form>
            
        </div>

        <div class="description">
            <h1>Apply Online!</h1>
            <p>
                Fill the details in the form and submit your request for a new connection 
                and start surfing the web now!
            </p> 
                <img src="../../Images/form.png" class="form-img" alt=""> 
            </div>
        </div>
    </div>
    <script src="../../JS/validate.js"></script>
</body>
</html>