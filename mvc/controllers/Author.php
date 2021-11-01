<?php
class Author extends Controller{
    
    function __construct(){
        $this->author = $this->model("AuthorModel");
        
    }

    function index(){
        $this->view("admin/layout",array(
			"Page" => "author",
            "Author" => $this->author->getAll()            
		));        
    }
    function ajax(){
        $this->view("admin/pages/author/authorAjax",array(
            "Author" => $this->author->getAll()
        ));
    }
    function getAll(){
        return $this->author->getAll();
    }
    function add(){
        
        if(isset($_POST['txtName']) && $_POST['txtDetail']){

            $name = $_POST['txtName'];
            $detail= $_POST['txtDetail'];

            $array = array('name' => $name, "detail" => $detail);
            if($this->author->add($array)==1){
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
            
            if($this->author->updateByID($array,$id)==1){
                echo 1;
                return;
            }            
        }
        echo 0;
    }
    function delete($id){
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
}
?>