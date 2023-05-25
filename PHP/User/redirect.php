<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirect</title>
</head>
<body>
    <h1>There is a issue with registration!</h1>
    <?php
    
        session_start();
        $errors = $_SESSION['errors'];
        
        for($i=0;$i<count($errors);$i++){

            echo $errors[$i]."<br>";

        }

    ?>
    <h3><a href="login.php">Click Here to Register Again</a></h3>
</body>
</html>