<?php
class Staffuser extends Db_object{
    protected static $db_table = "staff_user";
    protected static $db_table_fields = array('first_name', 'last_name', 'email', 'password');
    public $id;
    public $first_name;
    public $last_name;
    public $email;
    public $password;

    public function verify_staff_user($email, $password){
        global $database;
        $email = $database->escape_string($email);
        $password = $database->escape_string($password);
        $sql = "SELECT * FROM " . self::$db_table . " WHERE ";
        $sql .= "email = '{$email}' ";
        $sql .= "AND password = '{$password}' ";
        $the_result_array = self::find_by_query($sql);
        return !empty($the_result_array) ? array_shift($the_result_array) : false;
    }
    public function update_user($staff_id, $first_name, $last_name, $email, $password){
      global $database;
      $id = $database->escape_string($staff_id);
      $first_name = $database->escape_string($first_name);
      $last_name = $database->escape_string($last_name);
      $email = $database->escape_string($email);
      $password = $database->escape_string($password);
      $sql = "UPDATE " . static::$db_table . " SET ";
      $sql .= "first_name = '{$first_name}', ";
      $sql .= "last_name = '{$last_name}', ";
      $sql .= "email = '{$email}', ";
      $sql .= "password = '{$password}' ";
      $sql .= "WHERE id = '{$id}'";
      $database->query($sql);
      return true;
  }
  public function create_user( $first_name, $last_name, $email, $password){
    global $database;
    $first_name = $database->escape_string($first_name);
    $last_name = $database->escape_string($last_name);
    $email = $database->escape_string($email);
    $password = $database->escape_string($password);
    $sql = "INSERT INTO " . static::$db_table . "( 'first_name', 'last_name', 'email', 'password' )";
    $sql .= "VALUES (" . "'{$first_name}', '{$last_name}', '{$email}', '{$password}' . )";
    if($database->query($sql)){
      static::$id = $database->the_insert_id();
      return true;
    }
  }
}



?>