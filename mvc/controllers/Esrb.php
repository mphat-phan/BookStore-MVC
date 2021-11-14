<?php
class Esrb extends Controller{
    
    function __construct(){
        $this->esrb = $this->model("EsrbModel");
        $this->UserRole = $this->model("UserRoleModel");
        $this->RolePermission = $this->model("RolePermissionModel");                        
        if($this->UserRole->checkRole("admin")!=1)
        {
            $this->page500();
            exit();
        }                                   
    }

    function index(){        
        $this->view("admin/layout",array(
			"Page" => "esrb"       
		));        
    }
    function getAll(){
        $list = $this->esrb->getAll();
        echo $list;
    }
    function getByID($id){
        $list = $this->esrb->getID($id);
        echo $list;
    }
    function add(){
        if($this->UserRole->checkRole("admin")!=1)        
        {
            echo 2;
            return;
        }
        if(isset($_POST['txtName']) && $_POST['txtDetail']){

            $name = $_POST['txtName'];
            $detail= $_POST['txtDetail'];
            $image= basename($_FILES["txtImage"]["name"]);

            $array = array('name' => $name, "detail" => $detail , "image" => $image);
            if($this->esrb->add($array)==1){
                $target_dir = "./public/assets/images/";
                $target_file = $target_dir.basename($_FILES["txtImage"]["name"]);
                move_uploaded_file($_FILES["txtImage"]["tmp_name"], $target_file);
                echo 1;
                return;
            }
        }
        echo 0;                       
    }

    function update($id){
        if($this->UserRole->checkRole("admin")!=1)        
        {
            echo 2;
            return;
        }
        if(isset($_POST['txtName']) && $_POST['txtDetail']){
            
            $name = $_POST['txtName'];
            $detail= $_POST['txtDetail'];
            $image= basename($_FILES["txtImage"]["name"]);

            $array = array('name' => $name, "detail" => $detail);
            if(isset($image)){
                
                $array += array('image' => $image);
            }
            if($this->esrb->updateByID($array,$id)==1){
                $target_dir = "./public/assets/images/";
                $target_file = $target_dir.basename($_FILES["txtImage"]["name"]);
                move_uploaded_file($_FILES["txtImage"]["tmp_name"], $target_file);
                echo 1;
                return;
            }            
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
            
            if($this->esrb->delete($id)==1){
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