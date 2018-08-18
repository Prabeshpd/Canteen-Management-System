<?php
require_once("init.php");
 trait Momo{
     public $buff_momo = 'Buff Momo';
     public $chicken_momo = 'Chicken Momo';
     public $paneer_momo = 'Paneer Momo';
 }
 trait Chowmein{
     public $buff_chowmein = 'Buff Chowmein';
     public $chicken_chowmein = 'Chicken Chowmein';
     public $paneer_chowmein = 'Paneer Chowmein';
 }

trait Sandwich{
    public $buff_sandwich = 'Buff Sandwich';
    public $chicken_sandwich = 'Chicken Sandwich';
    public $paneer_sandwich = 'Paneer Sandwich';
}
trait Burger{
    public $buff_burger = 'Buff Burger';
    public $chicken_burger = 'Chicken Burger';
    public $paneer_burger = 'Paneer BUrger';
}

class Menuitem extends Db_object{
    use Momo, Chowmein, Sandwich, Burger;

    
}


?>