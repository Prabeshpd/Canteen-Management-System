<?php
require_once("init.php");
?>
<?php
if(!$session->is_staff_signed_in()){
    redirect("stafflogin.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Staff</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>


<?php $menu = new Menuitem(); ?>
<div align="center">
<h1>Select Menu for today</h1>
</div>
<form id="menu-form" method="post">
<div class="container">
    <div class="form-group">
            <label for = "Menu Item">Menu Item</label>
            <select class="form-control" id="Menu Item" name="Menu">
                <option>Momo</option>
                <option>Chowmein</option>
                <option>Sandwich</option>
                <option>Burger</option>
            </select>
            <br />
            <br />
    </div>
    <button class="btn btn-outline-primary" type="menusubmitAdmin_staff" value = "menusubmitAdmin_staff" name="menusubmitAdmin_staff" onclick="postToAdmin()">Menu Submit</button>
    <button class="btn btn-outline-primary" type="menusubmitEmployee_staff'" value = "menusubmitEmployee_staff'" name="menusubmitEmployee_staff'" onclick="postToEmployee()">Menu</button>
</div>
</form>
<script>
    form = document.getElementById("menu-form");
    function postToAdmin(){
        form.action="admin.php";
        form.submit();
    }
    function postToEmployee(){
        form.actio="employee.php";
        form.submit();
    }


</script>

<div align="center">
    <a class="btn btn-primary btn-lg" href="stafflogout.php" role="button">logout</a>
</div>
<div class="container">
    <form method="post" action="admin.php">
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="Order Confirmed" name="order_confirmed" id="order">Order Confirmed</input>
        
        <br />
        <br />
        <button class="btn btn-outline-primary" type="order_confirm" value = "order_confirm" name="order_confirm">Order Confirm Button</button> 
    </div>
    </form
</div>
</body>
</html>