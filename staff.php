<?php
require_once("init.php");
?>
<?php
if(!$session->is_staff_signed_in()){
    redirect("stafflogin.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Staff</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>


<?php $menu = new Menuitem(); ?>
<div align="center">
<h1>Select Menu for today</h1>
</div>
<form method="post" action="admin_check_menu.php">
<div class="container">
    <div class="form-group">
            <label for = "Menu Item">Menu Item</label>
            <select class="form-control" id="Menu Item" name="Menu">
                <option>Momo</option>
                <option>Chowmein</option>
                <option>Sandwich</option>
                <option>Burger</option>
            </select>
            <br />
            <br />
    </div>
    <button class="btn btn-outline-primary" type="menusubmit_staff'" value = "menusubmit_staff'" name="menusubmit_staff'">Menu Submit</button>
</div>
</form>
<form>

    <div>
    <div class="form-group">
            <label for = "Momo">Momo</label>
            <select class="form-control" id="Momo" name="momos">
                <option><?php echo $menu->buff_momo ?> </option>
                <option><?php echo  $menu->chicken_momo ?></option>
                <option><?php echo $menu->paneer_momo ?></option>
            </select>
    </div>
    <div class="form-group">
            <label for = "Chowmein">Chowmein</label>
            <select class="form-control" id="Chowmein" name="momos">
                <option><?php echo $menu->buff_chowmein ?> </option>
                <option><?php echo  $menu->chicken_chowmein ?></option>
                <option><?php echo $menu->paneer_chowmein ?></option>
            </select>
    </div>
    <div class="form-group">
            <label for = "Sandwich">Sandwich</label>
            <select class="form-control" id="Sandwich" name="momos">
                <option><?php echo $menu->buff_sandwich ?> </option>
                <option><?php echo  $menu->chicken_sandwich ?></option>
                <option><?php echo $menu->paneer_sandwich ?></option>
            </select>
    </div> 
    <div class="form-group">
            <label for = "Burger">Burger</label>
            <select class="form-control" id="Momo" name="momos">
                <option><?php echo $menu->buff_burger?> </option>
                <option><?php echo  $menu->chicken_burger ?></option>
                <option><?php echo $menu->paneer_burger ?></option>
            </select>
    </div>     
    
    </div>



</form>
<div align="center">
    <a class="btn btn-primary btn-lg" href="stafflogout.php" role="button">logout</a>
</div>
</body>
</html>