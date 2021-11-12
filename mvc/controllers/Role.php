<?php
class Role extends Controller{
    
    function __construct(){
        $this->role = $this->model("RoleModel");
        $this->UserRole = $this->model("UserRoleModel");                        
        if($this->UserRole->checkRole("admin")!=1)
        {
            $this->page500();
            exit();
        }        
    }

    function index(){
        $this->view("admin/layout",array(
			"Page" => "role"              
		));        
    }
    function getAll(){
        $list = $this->role->getAll();
        echo $list;
    }    
    function getByID($id){
        $list = $this->role->getID($id);
        echo $list;
    }
    function add(){
        if($this->UserRole->checkRole("admin")!=1)        
        {
            echo 2;
            return;
        }
        //if(isset($_POST['submit'])){
        if(!empty($_POST['txtName']) && isset($_POST['txtName'])){

            $name = $_POST['txtName'];
            $detail= $_POST['txtDetail'];

            $array = array('name' => $name, "detail" => $detail);
            if($this->role->add($array)==1){
                echo 1;
                return;
            }
        }
        echo 0;

    }

    function update($name){
        if($this->UserRole->checkRole("admin")!=1)        
        {
            echo 2;
            return;
        }
            $detail= $_POST['txtDetail'];
            $array = array("detail" => $detail);
            
            if($this->role->updateByID($array,$name)==1){
                echo 1;
                return;
            }
        
        echo 0;
    }
    function delete($name){
        if($this->UserRole->checkRole("admin")!=1)        
        {
            echo 2;
            return;
        }
        if(isset($_POST['checkDelete'])){
            
            if($this->role->delete($name)==1){
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
