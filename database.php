<?php
require_once("config.php");
//construct method for auto instantation of class for connection to database
class Database{
    public $connection;
    function __construct(){
        $this->db_connection();
    }
    //function for connecting database and checking error
    public function db_connection(){
        $this->connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if ($this->connection->connect_errno){
            die("connection failed badly" . $this->connection->connect_error);
        }
    }
    //function for query by storin sql code in variable sql and passing it to query function
    public function query($sql){
        $result = $this->connection->query($sql);
        return $result;
    }
    //confirming the qiery if result not found there the connection dies
    private function confirm_query($result){
        $this->confirm_query($result);
        if(!result){
            die("Query failed" . $this->connection->error);
        }
    }
    //for input string filtering the input string of sql injections
    public function escape_string($string){
        $escaped_string = mysqli_real_escape_string($this->connection, $string);
        return $escaped_string;
    }
    //if user wants to insert id or get hte id for database table function insert id can be used to find data by id
    public function insert_id(){
        $this->connection->insert_id;
    }
}
$database = new Database();

?>