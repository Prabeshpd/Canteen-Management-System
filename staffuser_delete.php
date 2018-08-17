<?php require_once("init.php"); ?>

<?php
$staff = Staffuser::find_by_id($_GET['staff_id']);
if($staff){
  $staff->delete();
}
 ?>