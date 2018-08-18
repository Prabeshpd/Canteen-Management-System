<?php
class Employeeuser extends Db_object{
    protected static $db_table = "employee_user";
    protected static $db_table_fields = array('first_name', 'last_name', 'email', 'password');
    public $id;
    public $first_name;
    public $last_name;
    public $email;
    public $password;

    public function verify_employee_user($email, $password){
        global $database;
        $email = $database->escape_string($email);
        $password = $database->escape_string($password);
        $sql = "SELECT * FROM " . self::$db_table . " WHERE ";
        $sql .= "email = '{$email}' ";
        $sql .= "AND password = '{$password}' ";
        $the_result_array = self::find_by_query($sql);
        return !empty($the_result_array) ? array_shift($the_result_array) : false;
    }
    public function verify_user_for_password($email, $phone){
        global $database;
        $email = $database->escape_string($email);
        $sql = "SELECT * FROM " . self::$db_table . " WHERE ";
        $sql .= "email = '{$email}' ";
        $sql .= "AND phone = '{$phone}' ";
        $the_result_array = self::find_by_query($sql);
        return !empty($the_result_array) ? array_shift($the_result_array) : false;
    }
}


?>