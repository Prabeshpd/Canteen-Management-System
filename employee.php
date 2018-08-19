<?php
require_once("init.php");
?>
<?php
if(!$session->is_employee_signed_in()){
    redirect("employeelogin.php");
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
    
</body>
</html>
<h3> Menu For The Day</h3>
<br />
<?php
if(isset($_POST['menusubmitEmployee_staff'])){
    $menu_item = $_POST['Menu'];
    $item = new Menuitem();

    switch($item){
        case($menu_item == 'Momo'):
        echo '<form id="item_selected" method="post">
        <div class="container">
            <div class="form-group">
                    <label for = "Menu Item">Momo</label>
                    <select class="form-control" id="Menu Item" name="Menu_order">
                        <option> ' . $item->buff_momo . ' </option>
                        <option> ' . $item->chicken_momo . ' </option>
                        <option> ' . $item->paneer_momo . ' </option>
                    </select>
                    <button type="item_select_to_admin" class="btn btn-primary" value="item_select_to_admin" name="item_select_to_admin" onclick="dataToAdmin()">Submit To Admin</button>
                    <button type="item_select_to_staff" class="btn btn-primary" value="item_select_to_staff" name="item_select_to_staff" onclick="dataToStaff()">Submit To Staff</button>
                    </form>  
                    <script>
                    form_item = document.getElementById("item_selected");
                    function dataToAdmin(){
                        form_item.action="admin.php";
                        form_item.submit();
                    }
                    function dataToStaff(){
                        form_item.action="staff.php";
                        form_item.submit();
                    }
                    
                    
                    </script>' ;
        break;
        case($menu_item == 'Chowmein'):
        echo '<form id="item_selected" method="post">
        <div class="container">
            <div class="form-group">
                    <label for = "Menu Item">Chowmein</label>
                    <select class="form-control" id="Menu Item" name="Menu_order">
                        <option> ' . $item->buff_chowmein . ' </option>
                        <option> ' . $item->chicken_chowmein . ' </option>
                        <option> ' . $item->paneer_chowmein . ' </option>
                    </select>
                    <button type="item_select_to_admin" class="btn btn-primary" value="item_select_to_admin" name="item_select_to_admin" onclick="dataToAdmin()">Submit To Admin</button>
                    <button type="item_select_to_staff" class="btn btn-primary" value="item_select_to_staff" name="item_select_to_staff" onclick="dataToStaff()">Submit To Staff</button>
                    </form>
                    <script>
                    form_item = document.getElementById("item_selected");
                    function dataToAdmin(){
                        form_item.action="admin.php";
                        form_item.submit();
                    }
                    function dataToStaff(){
                        form_item.action="staff.php";
                        form_item.submit();
                    }
                    
                    
                    </script>';
        break;
        case($menu_item == 'Sandwich'):
        echo '<form id="item_selected" method="post">
        <div class="container">
            <div class="form-group">
                    <label for = "Menu Item">Sandwich</label>
                    <select class="form-control" id="Menu Item" name="Menu_order">
                        <option> ' . $item->buff_sandwich . ' </option>
                        <option> ' . $item->chicken_sandwich . ' </option>
                        <option> ' . $item->paneer_sandwich . ' </option>
                    </select>
                    <button type="item_select_to_admin" class="btn btn-primary" value="item_select_to_admin" name="item_select_to_admin" onclick="dataToAdmin()">Submit To Admin</button>
                    <button type="item_select_to_staff" class="btn btn-primary" value="item_select_to_staff" name="item_select_to_staff" onclick="dataToStaff()">Submit To Staff</button>
                    </form>
                    <script>
                    form_item = document.getElementById("item_selected");
                    function dataToAdmin(){
                        form_item.action="admin.php";
                        form_item.submit();
                    }
                    function dataToStaff(){
                        form_item.action="staff.php";
                        form_item.submit();
                    }
                    
                    
                    </script>';
        break;
        case($menu_item == 'Burger'):
        echo '<form id="item_selected" method="post">
        <div class="container">
            <div class="form-group">
                    <label for = "Menu Item">Burger</label>
                    <select class="form-control" id="Menu Item" name="Menu_order">
                        <option> ' . $item->buff_burger . ' </option>
                        <option> ' . $item->chicken_burger . ' </option>
                        <option> ' . $item->paneer_burger . ' </option>
                    </select>
                    <button type="item_select_to_admin" class="btn btn-primary" value="item_select_to_admin" name="item_select_to_admin" onclick="dataToAdmin()">Submit To Admin</button>
                    <button type="item_select_to_staff" class="btn btn-primary" value="item_select_to_staff" name="item_select_to_staff" onclick="dataToStaff()">Submit To Staff</button>
                    </form>
                    <script>
                    form_item = document.getElementById("item_selected");
                    function dataToAdmin(){
                        form_item.action="admin.php";
                        form_item.submit();
                    }
                    function dataToStaff(){
                        form_item.action="staff.php";
                        form_item.submit();
                    }
                    
                    
                    </script>';
        break;
        
    }
}


?>
<div align="center">
    <a class="btn btn-primary btn-lg" href="employeelogout.php" role="button">logout</a>
</div>

<?php
if(isset($_POST['alert_employee'])){
    echo '<script>
    alert("order is completed")
    </script>';
}
?>

