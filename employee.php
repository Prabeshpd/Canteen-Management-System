<?php
require_once("init.php");
?>
<?php
if(!$session->is_employee_signed_in()){
    redirect("employee.php");
}




?>