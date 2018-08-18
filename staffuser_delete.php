<?php require_once("init.php"); ?>

<?php
$staff = Staffuser::find_by_id($_GET['id']);
if($staff){
  $staff->delete();
}
 ?>