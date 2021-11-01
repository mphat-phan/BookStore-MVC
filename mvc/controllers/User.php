<?php
class User extends Controller{
    
    function __construct(){
        $this->User = $this->model("UserModel");
        $this->UserHasRole = $this->model("UserHasRoleModel");
        $this->Role = $this->model("RoleModel");
    }

    function index(){
        $this->view("layout",array(
			"Page" => "user",
            "User" => $this->User->getAll(),
            "UserHasRole" => $this->UserHasRole->getAll(),     
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
            if($this->User->add($arrayUser)==1 && $this->UserHasRole->add($arrayRole)==1){
                $this->view("admin/pages/user/userAjax",array(
                    "User" => $this->User->getAll(),
                    "UserHasRole" => $this->UserHasRole->getAll(),
                    "Role" => $this->Role->getAll() ,
                    "msg" => "Add Successful",
                    "color" => "success"
                ));
                return;
            }
        }
        $this->view("admin/pages/user/userAjax",array(
            "User" => $this->User->getAll(),
            "UserHasRole" => $this->UserHasRole->getAll(),
            "Role" => $this->Role->getAll() ,
            "msg" => "Add Failed",
            "color" => "danger"
        ));

    }

    function update($username){
        
        if(isset($_POST['txtUserPassword'])){
            $password= $_POST['txtUserPassword'];
            $arrayUser = array("password" => $password);
            
            if($this->User->updateByID($arrayUser,$username)==1){
                $this->view("admin/pages/user/userAjax",array(
                    "User" => $this->User->getAll(),
                    "UserHasRole" => $this->UserHasRole->getAll(),
                    "Role" => $this->Role->getAll() ,
                    "msg" => "Update Successful",
                    "color" => "success"
                ));
                return;
            }
        }
        $this->view("admin/pages/user/userAjax",array(
            "User" => $this->User->getAll(),
            "UserHasRole" => $this->UserHasRole->getAll(),
            "Role" => $this->Role->getAll() ,
            "msg" => "Update Failed",
            "color" => "danger"
        ));
    }

    function updateRole($username){
        
        if(isset($_POST['roleSelect'])){
            $roleID= $_POST['roleSelect'];
            $array = array("roleID" => $roleID);
            
            if($this->UserHasRole->updateByID($array,$username)==1){
                $this->view("admin/pages/user/userAjax",array(
                    "User" => $this->User->getAll(),
                    "UserHasRole" => $this->UserHasRole->getAll(),
                    "Role" => $this->Role->getAll() ,
                    "msg" => "Update Role Successful",
                    "color" => "success"
                ));
                return;
            }
        }
    }

    function delete($username){
    
        if(isset($_POST['checkDelete'])){
            
            if($this->UserHasRole->delete($username)==1 && $this->User->delete($username)==1){
                $this->view("admin/pages/user/userAjax",array(
                    "User" => $this->User->getAll(),
                    "UserHasRole" => $this->UserHasRole->getAll(),
                    "Role" => $this->Role->getAll() ,
                    "msg" => "Delete Successful",
                    "color" => "success"
                ));
                return;
            }
        }
        $this->view("admin/pages/user/userAjax",array(
            "User" => $this->User->getAll(),
            "User" => $this->User->getAll(),
            "UserHasRole" => $this->UserHasRole->getAll(),
            "Role" => $this->Role->getAll() ,
            "msg" => "Delete Failed",
            "color" => "danger"
        ));
    }
    function pages() {
        $this->view("pages/404");
    }
}
?>