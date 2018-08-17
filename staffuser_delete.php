<?php require_once("init.php"); ?>

<?php
$staff = Staffuser::find_by_id($_GET['ID']);
if($staff){
  $staff->delete();
}
 ?>