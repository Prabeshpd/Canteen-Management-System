<?php require_once("init.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

</body>
</html>
<?php
if(isset($_POST['menusubmit_staff'])){
    $menu_item = $_POST['Menu'];
    echo "fghfghf";
    $item = new Menuitem();

    switch($items){
        case($menu_item == Momo):
        echo 'Momo: <li> ' . $item->$buff_momo . ' </li> 
        <li> ' . $item->chicken_momo . ' </li>
        <li> ' . $item->paneer_momo . ' </li>';
        break;
        case($menu_item == Chowmein):
        echo 'Momo: <li> ' . $item->$buff_chowmein . ' </li> 
        <li> ' . $item->chicken_chowmein . ' </li>
        <li> ' . $item->paneer_chowmein . ' </li>';
        break;
        case($menu_item == Sandwich):
        echo 'Momo: <li> ' . $item->$buff_sandwich . ' </li> 
        <li> ' . $item->chicken_sandwich . ' </li>
        <li> ' . $item->paneer_sandwich . ' </li>';
        break;
        case($menu_item == Burger):
        echo 'Momo: <li> ' . $item->$buff_burger . ' </li> 
        <li> ' . $item->chicken_burger . ' </li>
        <li> ' . $item->paneer_burger . ' </li>';
        break;
        
    }
}
echo "dsdad";

?>