<?php
require_once("init.php");
?>
<?php
if(!$session->is_admin_signed_in()){
    redirect("adminlogin.php");
}
?>
<?php
$staffuser = Staffuser::find_all();


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</head>
<body>
<div class="col-md-12">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last name</th>
            <th>Email</th>
            <th>Password</th>
          </tr>
        </thead>
        <tbody>
      <?php foreach ($staffuser as $staff) :?>


          <tr>
            <td><?php echo $staff->id; ?></td>

            <td><?php echo $staff->first_name; ?>
              <div class="Post_link">
                <a href="staffuser_delete.php/id=<?php echo $staff->id; ?>">Delete</a>
                <a href="#">Edit</a>
              </div>
            </td>
            <td><?php echo $staff->last_name; ?></td>
            <td><?php echo $staff->email; ?></td>
            <td><?php echo $staff->password; ?></td>

          </tr>
      <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <div class="container">
        <h3>Add staff working in canteen department</h3>
        <div>
            <a class="btn btn-primary btn-lg" href="create_staffusers.php" role="button">Add Staff memebers</a>
        </div>
    </div>
    <br />
    <br />
<div align="center">
    <a class="btn btn-primary btn-lg" href="adminlogout.php" role="button">logout</a>
</div>
<br />
<br />
<div>
<h3> Menu for the day</h3>
<?php
if(isset($_POST['menusubmitAdmin_staff'])){
    $menu_item = $_POST['Menu'];
    $item = new Menuitem();

    switch($item){
        case($menu_item == 'Momo'):
        echo 'Momo: <li> ' . $item->buff_momo . ' </li> 
        <li> ' . $item->chicken_momo . ' </li>
        <li> ' . $item->paneer_momo . ' </li>';
        break;
        case($menu_item == 'Chowmein'):
        echo 'Chowmein: <li> ' . $item->buff_chowmein . ' </li> 
        <li> ' . $item->chicken_chowmein . ' </li>
        <li> ' . $item->paneer_chowmein . ' </li>';
        break;
        case($menu_item == 'Sandwich'):
        echo 'Sandwich: <li> ' . $item->buff_sandwich . ' </li> 
        <li> ' . $item->chicken_sandwich . ' </li>
        <li> ' . $item->paneer_sandwich . ' </li>';
        break;
        case($menu_item == 'Burger'):
        echo 'Burger: <li> ' . $item->buff_burger . ' </li> 
        <li> ' . $item->chicken_burger . ' </li>
        <li> ' . $item->paneer_burger . ' </li>';
        break;
        
    }
}

?>

<?php
if(isset($_POST['order_confirm'])){
    $order = $_POST['order_confirmed'];
    echo $order;
     echo '<form method="post" action="employee.php"
     <div class="form-check">
        <input class="form-check-input" type="checkbox" value="alertEmployee" name="alertEmployee" id="alertEmployee">Alert Employee </input>
    </div>
     <button class="btn btn-outline-primary" type="alert_employee" value = "alert_employee" name="alert_employee">Alert Employee</button>
     </form>';
   
}
?>

<?php 
if(isset($_POST['admin_validation'])){
    $email = trim($_POST['email']);
    echo '<div class="container">
    <form method="post" action="employee_create.php">
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value=" ' . $email . ' " name="validate_email" id="validate_email"> ' . $email . ' </input>
        
        <br />
        <br />
        <button class="btn btn-outline-primary" type="email_validated" value = "email_validated" name="email_validated">Email Validate Button</button> 
    </div>
    </form
</div>';
}
?>

<?php
if(isset($_POST['item_select_to_admin'])){
    $order_by_employee = trim($_POST['Menu_order']);
    echo "Ordered by Employee: " . $order_by_employee;
}






?>


