<?php 

    require_once('../session_check.php');

    $con = require '../DBConnection.php';

    $con_id = $_GET['con_id'];

    $query = "SELECT * FROM connections WHERE con_id = '$con_id'";

    $result = mysqli_query($con, $query);

    $row = mysqli_fetch_array($result);

    if (isset($_POST['sbt_btn'])){

        $remark = $_POST['remark'];
        $approval = $_POST['approval'];
        if($remark == ""){
            $remark = "No remark";
        }
        $new_query = "UPDATE connections SET remarks='$remark', con_status = '$approval' WHERE con_id = '$con_id'";
        $new_result = mysqli_query($con, $new_query);
        echo $new_result;
        header("Location:displaydetails.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../../CSS/con_details.css">
<link rel="stylesheet" href="../../CSS/sidenav.css">
    <title>Details</title>
</head>
<body>
    <?php 

    require_once('../session_check.php');

    include('../adminnav.php');
    
    ?>
    <div class="main">
    <div class="grid-container">
        <div class="grid-content1">
        </div>
        <div class="grid-content2">
            <div class="heading-align">
                <img src="../../Images/account_box-24px.svg" alt="" class="grid-svg">
                <span class="heading">Connection Details</span>
            </div>
            <ul>
            <li>Connection ID: <?php echo $row[0] ?></li>
            <li>Customer Name: <?php echo $row[1] ?></li>
            <li>Address: <?php echo $row[4] ?></li>
            <li>Province: <?php echo $row[9] ?></li>
            <li>NIC No: <?php echo $row[10] ?></li>
            <li>E - mail: <?php echo $row[7] ?></li>
            <li>Excisting Customer: <?php echo $row[3] ?></li>
            <li>Requesting Service: <?php echo $row[8] ?></li>
            <li>Comments: <?php echo $row[11] ?></li>
        </ul>
        </div>
        <div class="grid-content3">
            <div class="heading-align">
                <img src="../../Images/bookmark_add-24px.svg" alt="" class="grid-svg">
                <span class="heading">Review</span>
            </div>
            <div class="form-align">
                <form action="<?php $_PHP_SELF ?>" method="POST" class="form-class">
                    <label for="remarks">Remarks</label><br>
                    <textarea name="remark" class="remark-input" cols="60" rows="15"></textarea><br></br>
                    <label for="approval">Approval</label><br>
                    <input type="radio" name="approval" value="Approved" id="app" required>Approved<br>
                    <input type="radio" name="approval" value="Not Approved" id="" required>Not Approved<br>
                    <button type="submit" class="submitbtn" name="sbt_btn">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>