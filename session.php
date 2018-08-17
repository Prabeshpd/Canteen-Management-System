<?php
class Session{
    private $admin_signed_in = false;
    private $staff_signed_in = false;
    private $employee_signed_in = false;
    public $admin_user_id;
    public $staff_user_id;
    public $employee_user_id; 
    public $message;

    function __construct(){
        session_start();
        $this->check_admin_login();
        $this->check_staff_login();
        $this->check_employee_login();
        $this->check_message();
    }

    public function message($msg=""){
        if(!empty($msg)){
            $_SESSION['message'] = $msg;
        }else{
            return $this->message;
        }
    }
    private function check_message(){
        if(isset($_SESSION['message'])){
            $this->message = $_SESSION['message'];
            unset($_SESSION['message']);
        }else{
            $this->message = "";
        }
    }
    public function is_admin_signed_in(){
        return $this->admin_signed_in;
    }
    public function is_staff_signed_in(){
        return $this->staff_signed_in;
    }
    public function is_employee_signed_in(){
        return $this->employee_signed_in;
    }
    public function admin_login($admin_user){
        if($admin_user){
            $this->admin_user_id = $_SESSION['admin_user_id'] = $admin_user->admin_user_id;
            $this->admin_signed_in = true;
        }
    }
    public function admin_logout(){
            unset($_SESSION['admin_user_id']);
            unset($this->admin_user_id);
            $this->admin_signed_in = false;
        }
    public function staff_login($staff_user){
        if($staff_user){
            $this->staff_user_id = $_SESSION['staff_user_id'] = $staff_user->staff_id;
            $this->admin_signed_in = true;
        }
    }
    public function staff_logout(){
            unset($_SESSION['staff_user_id']);
            $this->staff_signed_in = false;
        }
    public function employee_login($employee_user){
         if($employee_user){
            $this->employee_user_id = $_SESSION['employeee_user_id'] = $employee_user->employee_id;
            $this->employee_signed_in = true;
        }
    }
    public function employee_logout(){
            unset($_SESSION['employee_user_id']);
            $this->employee_signed_in = false;
        }
    private function check_admin_login(){
        if(isset($_SESSION['admin_user_id'])){
            $this->admin_user_id = $_SESSION['admin_user_id'];
            $this->admin_signed_in = true;
        }else{
            unset($this->admin_user_id);
            $this->admin_signed_in = false;
        }
    }
    private function check_staff_login(){
        if(isset($_SESSION['staff_user_id'])){
            $this->staff_user_id = $_SESSION['staff_user_id'];
            $this->staff_signed_in = true;
        }else{
            unset($this->staff_user_id);
            $this->staff_signed_in = false;
        }
    }
    private function check_employee_login(){
        if(isset($_SESSION['employee_user_id'])){
            $this->employee_user_id = $_SESSION['employee_user_id'];
            $this->employee_signed_in = true;
        }else{
            unset($this->employee_user_id);
            $this->employee_signed_in = false;
        }
    }
}
$session = new Session();
?>