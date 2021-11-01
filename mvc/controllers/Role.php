<?php
class Role extends Controller{
    
    function __construct(){
        $this->Role = $this->model("RoleModel");
        
    }

    function index(){
        $this->view("admin/layout",array(
			"Page" => "role",
            "Role" => $this->Role->getAll()            
		));        
    }
    function ajax(){
        $this->view("admin/pages/role/roleAjax",array(
            "Role" => $this->Role->getAll()
        ));
    }
    function add(){
        //if(isset($_POST['submit'])){
        if(isset($_POST['txtName']) && $_POST['txtDetail']){

            $name = $_POST['txtName'];
            $detail= $_POST['txtDetail'];

            $array = array('name' => $name, "detail" => $detail);
            if($this->Role->add($array)==1){
                echo 1;
                return;
            }
        }
        echo 0;

    }

    function update($id){
        
        if(isset($_POST['txtName']) && $_POST['txtDetail']){
            $name = $_POST['txtName'];
            $detail= $_POST['txtDetail'];
            $array = array('name' => $name, "detail" => $detail);
            
            if($this->Role->updateByID($array,$id)==1){
                echo 1;
                return;
            }
        }
        echo 0;
    }
    function delete($id){
        if(isset($_POST['checkDelete'])){
            
            if($this->Role->delete($id)==1){
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