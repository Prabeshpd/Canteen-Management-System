<?php
require_once("init.php"); ?>
<?php
$session->employee_logout();
redirect("employeelogin.php");
?>