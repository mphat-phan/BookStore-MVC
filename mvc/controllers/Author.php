<?php
class Author extends Controller{
    
    function __construct(){
        $this->author = $this->model("AuthorModel");
        
    }

    function index(){
        $this->view("layout",array(
			"Page" => "author",
            "Author" => $this->author->getAll()            
		));        
    }
    function ajax(){
        $this->view("admin/pages/author/authorAjax",array(
            "Author" => $this->author->getAll()
        ));
    }
    function add(){
        //if(isset($_POST['submit'])){
        if(isset($_POST['txtName']) && $_POST['txtDetail']){

            $name = $_POST['txtName'];
            $detail= $_POST['txtDetail'];

            $array = array('name' => $_POST['txtName'], "detail" => $_POST['txtDetail']);
            if($this->author->add($array)==1){
                $this->view("admin/pages/author/authorAjax",array(
                    "Author" => $this->author->getAll(),
                    "msg" => "Add Successful",
                    "color" => "success"
                ));
                return;
            }
        }
        $this->view("admin/pages/author/authorAjax",array(
            "Author" => $this->author->getAll(),
            "msg" => "Add Failed",
            "color" => "danger"
        ));

    }

    function update($id){
        if(isset($_POST['txtName']) && $_POST['txtDetail']){
            $name = $_POST['txtName'];
            $detail= $_POST['txtDetail'];
            $array = array('name' => $_POST['txtName'], "detail" => $_POST['txtDetail']);
            
            if($this->author->updateByID($array,$id)==1){
                $this->view("admin/pages/author/authorAjax",array(
                    "Author" => $this->author->getAll(),
                    "msg" => "Update Successful",
                    "color" => "success"
                ));
                return;
            }
        }
        $this->view("admin/pages/author/authorAjax",array(
            "Author" => $this->author->getAll(),
            "msg" => "Update Failed",
            "color" => "danger"
        ));
    }
    function delete($id){
        if(isset($_POST['checkDelete'])){
            
            if($this->author->delete($id)==1){
                $this->view("admin/pages/author/authorAjax",array(
                    "Author" => $this->author->getAll(),
                    "msg" => "Delete Successful",
                    "color" => "success"
                ));
                return;
            }
        }
        $this->view("admin/pages/author/authorAjax",array(
            "Author" => $this->author->getAll(),
            "msg" => "Delete Failed",
            "color" => "danger"
        ));
    }
    function pages() {
        $this->view("pages/404");
    }
}
?>