<?php
class Login extends Controller{
    
    function __construct(){
        $this->login = $this->model("loginModel");        
    }

    function index(){
        $this->view("login");        
    } 
    function checkLogin() {
        $txtemail = $_POST['txtEmail'];
        $txtpassword = $_POST['txtPassword'];        
        $sql = "SELECT * FROM `user` WHERE `username` = '$txtemail' and `password` = '$txtpassword' LIMIT 1";
        if(mysqli_num_rows($this->login->getOne($sql))==1)
        {
            echo 1;
        }
        else
        {
            echo 0;
        }
    }
    function pages() {
        $this->view("pages/404");
    }
}
?>