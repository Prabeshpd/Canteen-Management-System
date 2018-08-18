<?php require_once("init.php");
?>
<?php
if(isset($_POST['menusubmit_staff'])){
    $menu_item = $_POST['Menu'];
    echo "$menu_item";
}
?>