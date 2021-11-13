<?php
class Author extends Controller{
    
    function __construct(){
        $this->author = $this->model("AuthorModel");
        $this->UserRole = $this->model("UserRoleModel");
        $this->RolePermission = $this->model("RolePermissionModel");                        
        if($this->UserRole->checkRole("staff.product")!=1 && $this->UserRole->checkRole("admin")!=1)
        {
            $this->page500();
            exit();
        }                                   
    }

    function index(){        
        $this->view("admin/layout",array(
			"Page" => "author"       
		));        
    }
    function getAll(){
        $list = $this->author->getAll();
        echo $list;
    }
    function getByID($id){
        $list = $this->author->getID($id);
        echo $list;
    }
    function add(){
        if($this->UserRole->checkRole("admin")!=1 && $this->UserRole->checkPermission($_SESSION['username'],"staff.product","add")!=1)        
        {
            echo 2;
            return;
        }
        if(isset($_POST['txtName']) && $_POST['txtDetail']){

            $name = $_POST['txtName'];
            $detail= $_POST['txtDetail'];
            $image= basename($_FILES["txtImage"]["name"]);

            $array = array('name' => $name, "detail" => $detail , "image" => $image);
            if($this->author->add($array)==1){
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
        if($this->UserRole->checkRole("admin")!=1 && $this->UserRole->checkPermission($_SESSION['username'],"staff.product","update")!=1)        
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
            if($this->author->updateByID($array,$id)==1){
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
        if($this->UserRole->checkRole("admin")!=1 && $this->UserRole->checkPermission($_SESSION['username'],"staff.product","delete")!=1)        
        {
            echo 2;
            return;
        }
        if(isset($_POST['checkDelete'])){
            
            if($this->author->delete($id)==1){
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