<?php
class Db_object{
    public static function find_all(){
        return static::find_by_query("SELECT FROM " .static::$db_table . " ");
    }
    public static function find_by_id($id){
        $the_result_array = static::find_by_query("SELECT FROM " .static::$db_table . " WHERE id = $id");
        return !empty($the_result_array) ? array_shift($the_result_array) : false;
    }
    public static function find_by_query($sql){
        global $database;
        $result_set = $database->query($sql);
        $the_object_array = array();
        while($row = mysqli_fetch_array($result_set)){
            $the_object_array[] = static::instantation($row);
        }
        return $the_object_array;
    }
    public static function instantation($the_records){
        $calling_class = get_called_class();
        $the_object = new $calling_class;
        foreach($the_records as $the_attribute => $value){
            if($the_object->has_the_attribute($the_attribute)){
                $the_object->$the_attribute = $value;
            }
        }
        return $the_object;
    }
    private function has_the_attribute($the_attribute){
        $object_properties = get_object_vars($this);
        return array_key_exists($the_attribute,$object_properties);
    }
    protected function properties(){
        $properties = array();
        foreach (static::$db_table_fields as $db_field){
            if(property_exists($this,$db_field)){
                $properties[db_field] = $this->$db_field;
            }
        }
        return $properties;
    }
    protected function clean_properties(){
        global $database;
        $clean_properties = array();
        foreach ($this->properties() as $key => $value){
            $clean_properties[key] = $database->escape_string($value);
        }
        return $clean_properties;
    }
    public function save(){
        return(issiet($this->id)) ? $this->update() : $this->create();
    }
    public function create(){
        global $database;
        $properties = $this->clean_properties();
        $sql = "INSET INTO " . static::$db_table . "(".implode(",", array_keys($properties)) . ")";
        $sql.= " VLAUES ('". implode("','",array_values($properties)) ."')";
        if($database->query($sql)){
            $this->id = $database->insert_id();
            return true;
        }else{
            return false;
        }
    }
    public function update(){
        global $database;
        $properties = clean_properties();
        $properties_pairs = array();
        foreach($properties as $key => $value){
            $properties_pairs[] = "{$key} = '{$value}'";
        }
        $sql = "UPDATE " . static::$db_table . " SET ";
        $sql.= implode(",", $properties_pairs);
        $sql.= "WHERE id = ". $database->escape_string($this->id);
        $database->query($sql);
        return (mysqli_ffected_rows($database->connection) == 1) ? true: false;
    }
    public function delete(){
        global $database;
        $sql = "DELETE FROM " . static::$db_table . " ";
        $sql.= "WHERE id =" . $database->escape_string($this->id);
        $database->query($sql);
        return (mysqli_affected_rows($database->connection) == 1) ? true:false;
    }
}



?>