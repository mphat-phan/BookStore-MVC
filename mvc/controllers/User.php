<?php
class User extends Controller{
    
    function __construct(){
        $this->User = $this->model("UserModel");                
        $this->UserRole = $this->model("UserRoleModel");  
    }

    function index(){
        $this->view("admin/layout",array(
			"Page" => "user",            
		));        
    }
    function getAll(){
        $list = $this->User->getAll();        
        echo $list;
    }
    function getUserRoleByID($username){
        $list = $this->UserRole->getID($username);        
        echo $list;
    }    
    function getByID($id){
        $list = $this->User->getID($id);
        echo $list;
    }
    function add($username){         
        $name = $_POST['selectRole'];
        $fag = 0;                  
        if(isset($_POST['selectRole']) && !empty($_POST['selectRole']))
        {            
            foreach($name as $value)
            {                
                $array = array('username' => $username, "rolename" => $value);
                if($this->UserRole->add($array)==1)
                {
                    $fag = 1;
                }
                else
                {
                    $fag = 0;
                }                    
            }                        
        }
        if($fag == 1)
        {
            echo 1;        
            return;
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
    function updateStatus($username){                
        if(isset($_POST['checkLock']))
        {            
            $array = array("status" => '0');    
            if($this->User->update_by_stringID($array,$username)==1){
                echo 1;
                return;
            }
            echo 0;
        }
        else if(isset($_POST['checkUnlock']))
        {
            $array = array("status" => '1');    
            if($this->User->update_by_stringID($array,$username)==1){
                echo 1;
                return;
            }
            echo 0;
        }
        
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