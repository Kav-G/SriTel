<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link href="../../CSS/reqform.css" rel="stylesheet">
    <link rel="stylesheet" href="../../CSS/sidenav_new.css">
    <?php
        require_once('../session_check.php');
    ?>
</head>
<body>
    <?php include('../sidenav.php'); ?>
    <div class="main">
    <div class="warpper fl">
        <div class="main-1">
            <div class="head">
<p>
Package Requesting Portal</p>
</div>
<div class="form fl">
                <form action="display.php" method="POST">
                    <p class="name">
Customer Name:</p>
<p>
<input type="text" name="name" class="name-inp"></p>
<p class="name">
Email Address:</p>
<p>
<input type="email" name="email" class="name-inp"></p>
<p class="name">
Contact Number:</P>
 <p>
<input type="number" name="phone" placeholder="Ex: +94 7..." class="name-inp"></p>
<p class="name">
Address:</p>
<p>
<input type="text" name="address" class="name-inp"></p>
<p class="name">
Package Type:</p>
<p>
<select class="name-inp" name="package">
    <option value="regular">REGULAR</option>
    <option value="pro">PRO</option>
    <option value="premium">PREMIUM</option>
    <option value="ultimate">ULTIMATE</option>
  </select> <br> </br>
<input type="submit" name="sb" value="SUBMIT" class="sub"></p>
</form>
</div>
</div>
</div>
</div>
</body>
</html>