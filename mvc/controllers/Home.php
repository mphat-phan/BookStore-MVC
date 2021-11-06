<?php
class Home extends Controller{
    
    function __construct(){
        $this->Home = $this->model("UserModel");        
    }

    function Login(){        
        $this->view("layout",array(
            "Page" => "login"
        ));
    }
    function register(){
        $this->view("layout",array(
            "Page" => "register"
        ));
    }
    function ForgotPassword(){
        $this->view("layout",array(
            "Page" => "forgot-password"
        ));
    }
    function VerifyEmail(){
        $this->view("layout",array(
            "Page" => "verifyEmail"
        ));
    }
    function ChangePassword(){
        $this->view("layout",array(
            "Page" => "change-password"
        ));
    }
    function UpdatePassword() {
        if(isset($_POST['password']) && isset($_POST['retypepassword']))
        {            
            $username = $_SESSION['username'];        
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);     
            
            $array = array('password' => $password);        
            
            if($this->Home->update_by_stringID($array,$username)==1)
            {
                echo 1;                
                return;
            }
        }
        echo 0;
    }
    function checkEmail(){
        if(isset($_POST['txtEmail']))
        {
            $txtusername = $_POST['txtEmail'];            
            $sql = "SELECT * FROM `user` WHERE `email` = '$txtusername' LIMIT 1";            
            if(mysqli_num_rows($this->Home->getToCheckLogin($sql))==1)
            {  
                $code = rand (1000 , 9999);
                setcookie("verifycode", $code, time() + 60, "/");                
                $result = mysqli_fetch_array($this->Home->getToCheckLogin($sql));
                $_SESSION['username'] = $result['username'];
                $to = $_POST['txtEmail'];
                $subject = "Confirm Verifition Code";
                $txt = "Verify Code:".$code;
                $headers = "From: dzeamtechie@gmail.com";        
                if(mail($to,$subject,$txt,$headers)==true)
                {
                    echo 1;
                    return;
                }                
            }            
        }
        echo 0;
    } 
    function checkLogin() {
        if(isset($_POST['txtUsername']) && $_POST['txtPassword'])
        {
            $txtusername = $_POST['txtUsername'];
            $txtpassword = $_POST['txtPassword'];            
            $sql = "SELECT * FROM `user` WHERE `username` = '$txtusername' or `email` = '$txtusername' LIMIT 1";            
            if(mysqli_num_rows($this->Home->getToCheckLogin($sql))==1)
            {
                $_SESSION['username'] =  $txtusername;
                if(isset($_POST['checkremember']))
                {
                    setcookie("username", $txtusername, time() + (86400 * 7), "/");                                                            
                }                
                $result = mysqli_fetch_array($this->Home->getToCheckLogin($sql));                
                if(password_verify($txtpassword, $result['password']))
                {
                    echo 1;
                    return;
                }                
            }            
        }
        echo 0;        
    }
    function checkRegister() {
        if(isset($_POST['username']))
        {
            $txtusername = $_POST['username'];
            $sql = "SELECT * FROM `user` WHERE `username` = '$txtusername' LIMIT 1";
            if(mysqli_num_rows($this->Home->getToCheckLogin($sql))==1)
            {                
                echo 0;
                return;
            }
        }
        else if(isset($_POST['email']))
        {
            $txtemail = $_POST['email'];
            $sql = "SELECT * FROM `user` WHERE `email` = '$txtemail' LIMIT 1";
            if(mysqli_num_rows($this->Home->getToCheckLogin($sql))==1)
            {                
                echo 0;
                return;
            }
        }
        echo 1;
    }
    function addRegister() {        
        if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])){
            $username = $_POST['username'];
            $email = $_POST['email'];            
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $date = date("Y-m-d");            

            $array = array('username' => $username, "password" => $password, "email" => $email, "date" => $date, "status" => "1");
            if($this->Home->add($array)==1){
                echo 1;
                return;
            }
        }
        echo 0;        
    }        
    function pages() {
        $this->view("pages/404");
    }
}
?>