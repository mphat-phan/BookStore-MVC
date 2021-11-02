<?php
class Publisher extends Controller{
    
    function __construct(){
        $this->publisher = $this->model("PublisherModel");
        
    }

    function index(){
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
}
?>