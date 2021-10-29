<?php
class Role extends Controller{
    
    function __construct(){
        $this->Role = $this->model("RoleModel");
        
    }

    function index(){
        $this->view("layout",array(
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

            $array = array('name' => $_POST['txtName'], "detail" => $_POST['txtDetail']);
            if($this->Role->add($array)==1){
                $this->view("admin/pages/role/roleAjax",array(
                    "Role" => $this->Role->getAll(),
                    "msg" => "Add Successful",
                    "color" => "success"
                ));
                return;
            }
        }
        $this->view("admin/pages/role/roleAjax",array(
            "Role" => $this->Role->getAll(),
            "msg" => "Add Failed",
            "color" => "danger"
        ));

    }

    function update($id){
        
        if(isset($_POST['txtName']) && $_POST['txtDetail']){
            $name = $_POST['txtName'];
            $detail= $_POST['txtDetail'];
            $array = array('name' => $_POST['txtName'], "detail" => $_POST['txtDetail']);
            
            if($this->Role->updateByID($array,$id)==1){
                $this->view("admin/pages/role/roleAjax",array(
                    "Role" => $this->Role->getAll(),
                    "msg" => "Update Successful",
                    "color" => "success"
                ));
                return;
            }
        }
        $this->view("admin/pages/role/roleAjax",array(
            "Role" => $this->Role->getAll(),
            "msg" => "Update Failed",
            "color" => "danger"
        ));
    }
    function delete($id){
        if(isset($_POST['checkDelete'])){
            
            if($this->Role->delete($id)==1){
                $this->view("admin/pages/role/roleAjax",array(
                    "Role" => $this->Role->getAll(),
                    "msg" => "Delete Successful",
                    "color" => "success"
                ));
                return;
            }
        }
        $this->view("admin/pages/role/roleAjax",array(
            "Role" => $this->Role->getAll(),
            "msg" => "Delete Failed",
            "color" => "danger"
        ));
    }
    function pages() {
        $this->view("pages/404");
    }
}
?>