<?php
class User extends Controller{
    
    function __construct(){
        $this->User = $this->model("UserModel");
        $this->UserRole = $this->model("UserRoleModel");
        $this->Role = $this->model("RoleModel");
    }

    function index(){
        $this->view("admin/layout",array(
			"Page" => "user",
            "User" => $this->User->getAll(),
            "UserRole" => $this->UserRole->getAll(),     
            "Role" => $this->Role->getAll()  
		));        
    }
    function ajax(){
        $this->view("admin/pages/user/userAjax",array(
            "User" => $this->User->getAll(),
            "UserHasRole" => $this->UserHasRole->getAll(),
            "Role" => $this->Role->getAll()  
        ));
    }
    function add(){
        //if(isset($_POST['submit'])){
        if(isset($_POST['txtUserName']) && $_POST['txtUserPassword']){

            $username = $_POST['txtUserName'];
            $password= $_POST['txtUserPassword'];
            $role = 2;
            $arrayUser = array('username' => $username, "password" => $password);
            $arrayRole = array('username' => $username, "roleID" => $role);
            if($this->User->add($arrayUser)==1 && $this->UserRole->add($arrayRole)==1){
                echo 1;
                return;
            }
        }
        echo 0;

    }

    function update($username){
        
        if(isset($_POST['txtUserPassword'])){
            $password= $_POST['txtUserPassword'];
            $arrayUser = array("password" => $password);
            
            if($this->User->updateByID($arrayUser,$username)==1){
                echo 1;
                return;
            }
        }
        echo 0;
    }

    function updateRole($username){
        
        if(isset($_POST['roleSelect'])){
            $roleID= $_POST['roleSelect'];
            $array = array("roleID" => $roleID);
            
            if($this->UserRole->updateByID($array,$username)==1){
                echo 1;
                return;
            }
        }
        echo 0;
    }

    function delete($username){
    
        if(isset($_POST['checkDelete'])){
            
            if($this->UserRole->delete($username)==1 && $this->User->delete($username)==1){
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