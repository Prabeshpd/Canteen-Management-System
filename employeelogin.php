<?php require_once("init.php"); ?>
<?php
if($session->is_employee_signed_in()){
    redirect("employee.php");
}
if(isset($_POST['employeelogin'])){
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $employee_user_found = Employeeuser::verify_employee_user($email,$password);
    if($employee_user_found){
        $session->employee_login($employee_user_found);
        redirect("employee.php");
    }else{
        $the_message = "your message or password is incorrect";
    }
}
else{
    $the_message = '';
    $email = '';
    $password = '';
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

<div class="container">
    <form action="" method="post">
        <div class="form-group">
            <label for ="email">Email</label>
            <input type="text" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="password">password</label>
            <input type="password" class="form-control" id = "password" name="password">
        </div>
        <button class="btn btn-outline-primary" type="employeelogin" value = "employeelogin" name="employeelogin">Login</button>
    </form>
</div>



</body>
</html>