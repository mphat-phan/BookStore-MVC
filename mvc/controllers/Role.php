<?php
class Role extends Controller{
    
    function __construct(){
        $this->role = $this->model("RoleModel");
        
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

    function update($id){
        
        if(!empty($_POST['txtName']) && isset($_POST['txtName'])){
            $name = $_POST['txtName'];
            $detail= $_POST['txtDetail'];
            $array = array('name' => $name, "detail" => $detail);
            
            if($this->role->updateByID($array,$id)==1){
                echo 1;
                return;
            }
        }
        echo 0;
    }
    function delete($id){
        if(isset($_POST['checkDelete'])){
            
            if($this->role->delete($id)==1){
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