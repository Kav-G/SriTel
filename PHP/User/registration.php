<?php

session_start();

//variable initialization

$username = "";
$email = "";

$errors = array();

//connecting to the database

$db = mysqli_connect('localhost', 'root', '', 'sri-tel') or die("Couldn't connect to the database");

//registering users

if(isset($_POST['reg_btn'])){

$username = mysqli_real_escape_string($db, $_POST['username']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$number = mysqli_real_escape_string($db, $_POST['number']);
$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

//form validation

if(empty($username)) (array_push($errors, " Username name is required"));
if(empty($email)) (array_push($errors, "Email is required"));
if(empty($number)) (array_push($errors, "Number is required"));
if(empty($password_1)) (array_push($errors, "Password is required"));
if($password_1 != $password_2)(array_push($errors, "Passwords do not match"));

//checking the database for existing usernames

$user_check_query = "SELECT * FROM user WHERE username = '$username' or email = '$email' LIMIT 1";

$results = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($results);

if($user) {
  
  if($user['username'] === $username){array_push($errors, "Username is already used");}
  if($user['email'] === $email){array_push($errors, "This email address already has been used");}
}

//Registering users

if(count($errors) == 0 ){
  
  
  $password_1 = md5($password_1); //this is for password encryption
  $query = "INSERT INTO user (username, email, number, password_1, role) VALUES ('$username', '$email', '$number', '$password_1', 'User')";
  
  mysqli_query($db, $query);
  $_SESSION['username'] = $username;
  $_SESSION['success'] = "Logged in successfully";
  header('location: redirect_success.php');  
  
 }else{

  $_SESSION['errors'] = $errors;
  header('location:redirect.php');

 }

}
//user login

if(isset($_POST['login_user'])) {

      $username = mysqli_real_escape_string($db, $_POST['username']);
      $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);

    if(empty($username)){

      array_push($errors, "Username is required");
    }

    if(empty($password_1)){

      array_push($errors, "Password is required");
    }


    if(count($errors) == 0 ){

    $password_1 = md5($password_1);

    $query = "SELECT * FROM user WHERE username='$username' AND password_1 = '$password_1'";
    $results = mysqli_query($db, $query);

    
    if(mysqli_num_rows($results) == 1) {

      $row = mysqli_fetch_row($results);

      $_SESSION['userID'] = $row[0];
      
      if($row[5] == 'Admin'){
          $_SESSION['username'] = $username;
          $_SESSION['success'] = "Logged in successfully";
          header("location: ../Views/displaydetails.php");
      } else if($row[5] == 'User'){
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "Logged in successfully";
        header("location: ../Views/connectionForm.php");
    }
    }
    else{
      array_push($errors, "Password and username do not match");
    }
  }
}

?>