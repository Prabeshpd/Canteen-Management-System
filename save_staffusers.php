<?php require_once("init.php"); ?>

<?php

if (isset($_POST['submit'])){
    $first_name = trim($_POST['first_name']);
    $last_name = trim($_POST['last_name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    
    $staff = new Staffuser();
    $staff->first_name = $first_name;
    $staff->last_name = $last_name;
    $staff->email = $email;
    $staff->password = $password;
   
    $staff->save();
}
?>
