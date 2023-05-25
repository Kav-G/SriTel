<!DOCTYPE html>
<html lang="en">
<head>
<?php 
    
    require_once('../session_check.php');
    $result = require '../Connections/filltable.php';
    $result_two = require '../Connections/approve.php';
    
?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display All Connections</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../CSS/contable.css">
    <link rel="stylesheet" href="../../CSS/sidenav.css">
</head>
<body>
    <?php include('../adminnav.php'); ?>
    <div class="main">
    <div class="header-primary">
        <img src="../../Images/feed-24px.svg" alt="" class="header-svg-primary">
        <span class="heading-primary">Customer Connection Requests</span>
    </div>
    <div class="header-primary">
        <img src="../../Images/pending_actions-24px.svg" alt="" class="header-svg-secondary">
        <span class="heading-secondary">Pending Requests</span>
    </div>
    <label for="search" class="search-labels">Search Pending List:</label>
    <input type="text" name="search" id="search" class="filter-input" placeholder="Enter Value"><br>
    <label for="filter" class="search-labels">Choose Category:</label>
    <select name="filter" id="filter">
        <option value="id" selected>ID</option>
        <option value="fname">Name</option>
    </select>
    <table class="content-table" id="conn_table" >
        <thead>
            <tr>
                <th>Connection ID</th>
                <th>Name</th>
                <th>Mobile</th>
                <th>City</th>
                <th>Telephone</th>
                <th>Excisting Customer</th>
                <th>Connection Type</th>
                <th>E - mail</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($rows = mysqli_fetch_array($result)){
                
            echo "<tr>
                <td><a href='description.php?con_id=$rows[0]'>".$rows[0]."</a></td>
                <td>".$rows['name']."</td>
                <td>".$rows['mobile']."</td>
                <td>".$rows['city']."</td>
                <td>".$rows['telephone']."</td>
                <td>".$rows['existing_cus']."</td>
                <td>".$rows['con_type']."</td>
                <td>".$rows['email']."</td>
                <td>
                <form method='post' action='../Connections/remove.php'>
                    <input type='hidden' value='$rows[0]' name=con_id>
                    <input type='submit' value='REMOVE' class='action' name='submitbtn'>
                </form>
                </td>
            </tr>";
        }
            ?>
        </tbody>
    </table>

    <div class="header-primary">
        <img src="../../Images/check_box-24px.svg" alt="" class="header-svg-secondary">
        <span class="heading-secondary">Reviewed Requests</span>
    </div>
    <table class="content-table" id="conn_table">
        <thead>
            <tr>
                <th>Connection ID</th>
                <th>Name</th>
                <th>Mobile</th>
                <th>Telephone</th>
                <th>E - mail</th>
                <th>Remark</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = mysqli_fetch_array($result_two)){
                
            echo "<tr>
                <td>".$row[0]."</td>
                <td>".$row['name']."</td>
                <td>".$row['mobile']."</td>
                <td>".$row['telephone']."</td>
                <td>".$row['email']."</td>
                <td>".$row['remarks']."</td>
                <td>".$row['con_status']."</td>
            </tr>";
        }
            ?>
        </tbody>
    </table>
    </div>
    <script src="../../JS/filter.js"></script>
</body>
</html>