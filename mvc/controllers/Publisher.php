<?php
class Publisher extends Controller{
    
    function __construct(){
        $this->publisher = $this->model("PublisherModel");
        $this->UserRole = $this->model("UserRoleModel");                                
    }

    function index(){
        if($this->UserRole->checkRole("staff.product")!=1 && $this->UserRole->checkRole("admin")!=1)
        {
            $this->page500();
            exit();
        } 
        $this->view("admin/layout",array(
			"Page" => "publisher"         
		));        
    }
    function getAll(){
        $list = $this->publisher->getAll();
        echo $list;
    }
    function getByID($id){
        $list = $this->publisher->getID($id);
        echo $list;
    }
    function add(){
        if($this->UserRole->checkRole("admin")!=1 && $this->UserRole->checkPermission($_SESSION['username'],"staff.product.add","add")!=1 && $this->UserRole->checkPermission($_SESSION['username'],"staff.product","add")!=1)        
        {
            echo 2;
            return;
        }
        if(!empty($_POST['txtName']) && isset($_POST['txtName'])){

            $name = $_POST['txtName'];
            $detail= $_POST['txtDetail'];

            $array = array('name' => $name, "detail" => $detail);
            if($this->publisher->add($array)==1){
                echo 1;
                return;
            }
        }
        echo 0;

    }

    function update($id){
        if($this->UserRole->checkRole("admin")!=1 && $this->UserRole->checkPermission($_SESSION['username'],"staff.product.update","update")!=1 && $this->UserRole->checkPermission($_SESSION['username'],"staff.product","update")!=1)
        {
            echo 2;
            return;
        }
        if(!empty($_POST['txtName']) && isset($_POST['txtName'])){
            
            $name = $_POST['txtName'];
            $detail= $_POST['txtDetail'];

            $array = array('name' => $name, "detail" => $detail);
            
            if($this->publisher->updateByID($array,$id)==1){
                echo 1;
                return;
            }            
        }
        echo 0;
    }
    function delete($id){
        if($this->UserRole->checkRole("admin")!=1 && $this->UserRole->checkPermission($_SESSION['username'],"staff.product.delete","delete")!=1 && $this->UserRole->checkPermission($_SESSION['username'],"staff.product","delete")!=1)        
        {
            echo 2;
            return;
        }
        if(isset($_POST['checkDelete'])){
            
            if($this->publisher->delete($id)==1){
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