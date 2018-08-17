<?php
class Adminuser extends Db_object{
    protected static $db_table = "admin_user";
    protected static $db_table_fields = array('first_name', 'last_name', 'email', 'password');
    public $admin_id;
    public $first_name;
    public $last_name;
    public $email;
    public $password;

    public function verify_admin_user($email, $password){
        global $database;
        $email = $database->escape_string($email);
        $password = $database->escape_string($password);
        $sql = "SELECT FROM " . self::$db_table . " WHERE ";
        $sql .= "email = '{email}' ";
        $sql .= "And password = '{password}' ";
        $the_result_array = self::find_by_query($sql);
        return !empty($the_result_array) ? array_shift($the_result_array) : false;
    }
}


?>