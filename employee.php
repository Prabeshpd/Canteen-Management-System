<?php
require_once("init.php");
?>
<?php
if(!$session->is_employee_signed_in()){
    redirect("employeelogin.php");
}
?>
<h3> Menu For The Day</h3>
<br />
<?php
if(isset($_POST['menusubmitEmployee_staff'])){
    $menu_item = $_POST['Menu'];
    echo "fghfghf";
    $item = new Menuitem();

    switch($items){
        case($menu_item == 'Momo'):
        echo '<form action="" method="post">
        <div class="container">
            <div class="form-group">
                    <label for = "Menu Item">Momo</label>
                    <select class="form-control" id="Menu Item" name="Menu_order">
                        <option> ' . $item->buff_momo . ' </option>
                        <option> ' . $item->chicken_momo . ' </option>
                        <option> ' . $item->paneer_momo . ' </option>
                    </select>';
        break;
        case($menu_item == 'Chowmein'):
        echo '<form action="" method="post">
        <div class="container">
            <div class="form-group">
                    <label for = "Menu Item">Chowmein</label>
                    <select class="form-control" id="Menu Item" name="Menu_order">
                        <option> ' . $item->buff_chowmein . ' </option>
                        <option> ' . $item->chicken_chowmein . ' </option>
                        <option> ' . $item->paneer_chowmein . ' </option>
                    </select>';
        break;
        case($menu_item == 'Sandwich'):
        echo '<form action="" method="post">
        <div class="container">
            <div class="form-group">
                    <label for = "Menu Item">Sandwich</label>
                    <select class="form-control" id="Menu Item" name="Menu_order">
                        <option> ' . $item->buff_sandwich . ' </option>
                        <option> ' . $item->chicken_sandwich . ' </option>
                        <option> ' . $item->paneer_sandwich . ' </option>
                    </select>';
        break;
        case($menu_item == 'Burger'):
        echo '<form action="" method="post">
        <div class="container">
            <div class="form-group">
                    <label for = "Menu Item">Burger</label>
                    <select class="form-control" id="Menu Item" name="Menu_order">
                        <option> ' . $item->buff_burger . ' </option>
                        <option> ' . $item->chicken_burger . ' </option>
                        <option> ' . $item->paneer_burger . ' </option>
                    </select>';;
        break;
        
    }
}
echo "dsdad";

?>



