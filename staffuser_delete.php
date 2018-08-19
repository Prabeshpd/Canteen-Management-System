<?php require_once("init.php"); ?>

<?php
if(empty($_GET['id'])){
  redirect("admin.php");
}
$staff = Staffuser::find_by_id($_GET['id']);
if($staff){
  $staff->delete();
}
else{
  redirect("admin.php");
}
 ?>