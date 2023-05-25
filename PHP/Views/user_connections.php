<?php 

    require_once('../session_check.php');
    $result = require '../Connections/filterConnections.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../CSS/sidenav.css">
    <title>User Connections</title>
    <style>
        *{

            font-family: 'Poppins', sans-serif;
            padding: 0;
            margin: 0;

        }

        body{

            background-image: url(../../Images/background01.jpg);

        }

        .content-table{

            border-collapse: collapse;
            margin: 25px 0;
            min-width: 400px;
            border-radius: 5px 5px 0 0;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);

        }

        .content-table thead tr {

            background-color: #009879;
            color: white;
            text-align: left;
            font-weight: bold;

        }

        .content-table th,
        .content-table td{
            
            padding: 12px 15px;

        }

        .content-table tbody tr{
            background-color: #dddddd;
            border-bottom: 1px solid #dddddd;
        }

        .content-table tbody tr:nth-of-type(even){

            background-color: #f3f3f3;

        }

        .content-table tbody tr:last-child{

            border-bottom: 2px solid #009879;

        }

        .content-table tbody tr:hover{

            color: #009879;
            cursor: pointer;

        }

        tbody a{

            text-decoration: none;
            color: black;

        }

        .action{
            padding: 10px;
            border: 2px solid #009879;
            border-radius: 5px;
            transition: ease-in-out 200ms;
        }

        .action:hover{
            background-color: #009879;
            color: white;
        }

        .heading-primary{
    
            font-size: 30px;
            font-weight: bold;
        }

        .header-svg-primary{

            width: 3rem;
            min-width: 3rem;
            margin-left: 5px;
            margin-right: 10px;
            padding: 0;

        }

        .header-primary{
            display: flex;
            align-items: center;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<?php include('../sidenav.php'); ?>
<div class="main">
    <div class="header-primary">
        <img src="../../Images/signal_wifi_4_bar-24px.svg" alt="" class="header-svg-primary">
        <span class="heading-primary">Your Connection Requests</span>
    </div>
<table class="content-table" id="conn_table">
        <thead>
            <tr>
                <th>Connection ID</th>
                <th>Name</th>
                <th>Mobile</th>
                <th>City</th>
                <th>Telephone</th>
                <th>E - mail</th>
                <th>Connection Type</th>
                <th>Remark</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
        <?php
            while ($rows = mysqli_fetch_array($result)){
            if($rows['remarks'] == "")
                $rows['remarks'] = "No Remark Yet";   
            echo "<tr>
                <td>".$rows[0]."</td>
                <td>".$rows['name']."</td>
                <td>".$rows['mobile']."</td>
                <td>".$rows['city']."</td>
                <td>".$rows['telephone']."</td>
                <td>".$rows['email']."</td>
                <td>".$rows['con_type']."</td>
                <td>".$rows['remarks']."</td>
                <td>".$rows['con_status']."</td>
            </tr>";
        }
            ?>
        </tbody>
    </table>
</div>
</body>
</html>