<?php
class Category extends Controller{
    
    function __construct(){
        $this->category = $this->model("CategoryModel");
    }

    function index(){
        $this->view("admin/layout",array(
			"Page" => "category"        
		));        
    }
    function getAll(){

        $list = $this->category->getAll();
        echo $list;
    }
    function getByID($id){
        $list = $this->category->getID($id);
        echo $list;
    }
    function add(){
        
        if(isset($_POST['txtName']) && $_POST['txtDetail']){

            $name = $_POST['txtName'];
            $detail = $_POST['txtDetail'];

            $array = array('name' => $name, "detail" => $detail);
            if($this->category->add($array)==1){
                echo 1;
                return; 
            }
        }
        echo 0;
    }
    function update($id){
        if(isset($_POST['txtName']) && $_POST['txtDetail']){
            $name = $_POST['txtName'];
            $detail = $_POST['txtDetail'];
            $array = array('name' => $name, "detail" => $detail);
            
            if($this->category->updateByID($array,$id)==1){
                echo 1;
                return;
            }
        }
        echo 0;
    }
    function delete($id){
        if(isset($_POST['checkDelete'])){
            
            if($this->category->delete($id)==1){
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