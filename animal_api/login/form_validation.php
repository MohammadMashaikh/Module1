<?php
session_start();


$_SESSION['error'] = null;

if ($_SERVER['REQUEST_METHOD'] != "POST" && empty($_POST))
 
die ("You can't access like this way");



$email = isset($_POST['email']) ? $_POST['email'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;

$error = false;
$error_msg = '';








if (!empty($email) && !empty($password)) {


   $valid_user = null;

   $users = file_get_contents('../api_data/users.json');
   $users = json_decode($users);

    foreach ($users as $user) {
       
        if ($email == $user->email) {
            $valid_user = $user; 
            break; 
        }
    }


  if (!empty($valid_user)) {
    if ($password != $valid_user->password) {
      $error_msg = "Incorrect Email or Password";
      $error = true;
    }
    } else {
      $error_msg = "Incorrect Email or Password";
      $error = true;

    } 
  
  
   } 
   else {
     $error_msg = "Please fill out the required information";
      $error = true;
    }

    if($error) {
  $_SESSION['error'] = $error_msg;
  header('Location: ./');
 
} else {
  $_SESSION['user'] = array( 'display_name' => $valid_user->display_name);
  header('Location: ./home.php');
  
}
