<?php
require_once("init.php");
?>
<?php
if(!$session->is_admin_signed_in()){
    redirect("adminlogin.php");
}




?>