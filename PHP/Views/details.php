<?php 

    require_once('../session_check.php');

    $con = require '../DBConnection.php';

    $con_id = $_GET['con_id'];

    $query = "SELECT * FROM connections WHERE con_id = '$con_id'";

    $result = mysqli_query($con, $query);

    $row = mysqli_fetch_array($result);

    if (isset($_POST['apr_btn'])){

        $remark = $_POST['remark'];
        if($remark == ""){
            $remark = "No remark";
        }
        $new_query = "UPDATE connections SET remarks='$remark', con_status = 'Approved' WHERE con_id = '$con_id'";
        $new_result = mysqli_query($con, $new_query);
        echo $new_result;
        header("Location:displaydetails.php");
    }

    if (isset($_POST['dis_btn'])){

        $remark = $_POST['remark'];
        $new_query = "UPDATE connections SET remarks='$remark', con_status = 'Not Approved' WHERE con_id = '$con_id'";
        $new_result = mysqli_query($con, $new_query);
        echo $new_result;
        header("Location:displaydetails.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connection Details</title>
    <link rel="stylesheet" href="../../CSS/description.css">
    <link rel="stylesheet" href="../../CSS/sidenav.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <style>
        .details-card{
            background-color: aqua;
            width: 50%;
            background-color: rgb(255, 255, 255);
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
        }

        .card-content{
            padding-top: 20px;
            padding-bottom: 30px;
            padding-left: 60px;
        }

        .form-class{
            padding-left: 25px;
        }

        .heading{
            font-size:30px;
            font-weight: 1900px;
        }

        .card-content h3{
            font-size: 20px;
            padding: 10px;
            font-weight: lighter;
        }

        .remark-input{
            font-family: 'Poppins', sans-serif;
            cursor: pointer;
            margin-left: 10px;
            margin-bottom: 15px;
            border: 1px solid #dddddd;
            background-color: #eeeeee;
            border-radius: 4px;
            font-weight: 700;
        }

        .remark-input:focus,
        .remark-input:hover{

            outline: none;
            border: 1px solid #bbbbbb;

        }
    </style>
</head>
<body>
    <?php include('../sidenav.php'); ?>
    <div class="main">
    <div class="details-card">
        <div class="card-content">
            <h2 class="heading">Connection Details</h2>
            <h3>Connection ID: <?php echo $row[0] ?></h3>
            <h3>Customer Name: <?php echo $row[1] ?></h3>
            <h3>Address: <?php echo $row[4] ?></h3>
            <h3>Province: <?php echo $row[9] ?></h3>
            <h3>NIC No: <?php echo $row[10] ?></h3>
            <h3>E - mail: <?php echo $row[7] ?></h3>
            <h3>Excisting Customer: No</h3>
            <h3>Requesting Service: <?php echo $row[8] ?></h3>
            <h3>Package: 40GB</h3>
            <form action="<?php $_PHP_SELF ?>" method="POST" class="form-class">
                <textarea name="remark" class="remark-input" cols="90" rows="8"></textarea><br></br>
                <button type="submit" class="submitbtn" name="dis_btn">Disapprove</button>
                <button type="submit" class="submitbtn" name="apr_btn">Approve</button>
            </form>
        </div>
    </div>
    </div>
</body>
</html>