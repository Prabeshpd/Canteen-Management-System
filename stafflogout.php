<?php
require_once("init.php"); ?>
<?php
$session->staff_logout();
redirect("stafflogin.php");
?>