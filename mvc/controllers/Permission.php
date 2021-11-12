<?php
class Permission extends Controller{
    
    function __construct(){        
        $this->permission = $this->model("PermissionModel");
        $this->rolepermission = $this->model("RolePermissionModel");
        $this->UserRole = $this->model("UserRoleModel");                        
        if($this->UserRole->checkRole("admin")!=1)
        {
            $this->page500();
            exit();
        }
    }
    
    function getAll(){
        $list = $this->permission->getAll();
        echo $list;
    }        
    function getByID($id){
        $list = $this->permission->getID($id);
        echo $list;
    }
    function getByIDRolePermission($rolename){
        $sql = "SELECT `rolename`, `permissionID`, `permission` FROM `role_permission`, `permission` WHERE `role_permission`.`permissionID` = `permission`.`id` and `role_permission`.`rolename` = '$rolename'";
        $list = $this->rolepermission->selectQueryJson($sql);
        echo $list;
    }    
    function add(){
        if($this->UserRole->checkRole("admin")!=1)        
        {
            echo 2;
            return;
        }
        if(!empty($_POST['txtPermission']) && isset($_POST['txtPermission'])){

            $permission = $_POST['txtPermission'];            

            $array = array('permission' => $permission);
            if($this->permission->add($array)==1){
                echo 1;
                return;
            }
        }
        echo 0;
    }

    function addRolePermission($rolename){
        if($this->UserRole->checkRole("admin")!=1)        
        {
            echo 2;
            return;
        }
        $name = $_POST['selected'];                
        $fag = 0;                  
        if(isset($_POST['selected']) && !empty($_POST['selected']))
        {                  
            $this->rolepermission->delete($rolename);                  
            foreach($name as $value)
            {                
                $array = array('rolename' => $rolename, "permissionID" => $value);
                if($this->rolepermission->add($array)==1)
                {
                    $fag = 1;
                }
                else
                {
                    $fag = 0;
                }                
            }                        
        }
        else
        {
            $this->rolepermission->delete($rolename);
            $fag = 1;
        }        
        if($fag == 1)
        {
            echo 1;        
            return;
        }
        echo 0;
    }
    function update($id){
        if($this->UserRole->checkRole("admin")!=1)        
        {
            echo 2;
            return;
        }
        $permission= $_POST['txtPermission'];
        $array = array("permission" => $permission);
        
        if($this->permission->updateByID($array,$id)==1){
            echo 1;
            return;
        }
    
    echo 0;  
    }
    function delete($id){
        if($this->UserRole->checkRole("admin")!=1)        
        {
            echo 2;
            return;
        }
        if(isset($_POST['checkDelete'])){
            
            if($this->permission->delete($id)==1){
                echo 1;
                return;
            }
        }
        echo 0;
    }
    function pages() {
        $this->view("pages/404");
    }
    function page500() {
        $this->view("layout2",array(
            "Page" => "500"
        ));
    }
}
?>
