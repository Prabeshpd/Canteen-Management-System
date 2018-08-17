<?php
require_once("init.php");
?>
<?php
if(!$session->is_admin_signed_in()){
    redirect("adminlogin.php");
}
?>
<?php
$staffuser = Staffuser::find_all();


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</head>
<body>
<div class="col-md-12">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last name</th>
            <th>Email</th>
            <th>Password</th>
          </tr>
        </thead>
        <tbody>
      <?php foreach ($staffuser as $staff) :?>


          <tr>
            <td><?php echo $staff->staff_id; ?></td>

            <td><?php echo $staff->first_name; ?>
              <div class="Post_link">
                <a href="staffuser_delete.php/staff_id=<?php echo $staff->staff_id; ?>">Delete</a>
                <a href="#">Edit</a>
              </div>
            </td>
            <td><?php echo $staff->last_name; ?></td>
            <td><?php echo $staff->email; ?></td>
            <td><?php echo $staff->password; ?></td>

          </tr>
      <?php endforeach; ?>
        </tbody>
      </table>
    </div>
<div align="center">
    <a class="btn btn-primary btn-lg" href="adminlogout.php" role="button">logout</a>
</div>
</body>
</html>