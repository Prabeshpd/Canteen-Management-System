<?php
require_once("init.php"); ?>
<?php
if(isset($_POST['employee_usersubmit']) && isset($_Post['email_validated'])){
    $first_name = trim($_POST['first_name']);
    $last_name = trim($_POST['last_name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $phone = trim($_POST['phone']);

     $employee = new Employeeuser();
     $employee->first_name = $first_name;
     $employee->last_name = $last_name;
     $employee->email = $email;
     $employee->password = $password;
     $employee->phone = $phone;
     $employee->save();

}