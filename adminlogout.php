<?php
require_once("init.php"); ?>
<?php
$session->admin_logout();
redirect("adminlogin.php");
?>