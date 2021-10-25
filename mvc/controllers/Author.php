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
    function add(){
        //if(isset($_POST['submit'])){
        if(isset($_POST['txtName']) && $_POST['txtDetail']){

            $name = $_POST['txtName'];
            $detail= $_POST['txtDetail'];

            $array = array('name' => $_POST['txtName'], "detail" => $_POST['txtDetail']);

            $this->author->add($array);

            $this->view("admin/pages/author/authorAjax",array(
                "Author" => $this->author->getAll()
            ));
        }
            
        //
        
    }
    function update($id){
        if(isset($_POST['txtName']) && $_POST['txtDetail']){
            $name = $_POST['txtName'];
            $detail= $_POST['txtDetail'];
            $array = array('name' => $_POST['txtName'], "detail" => $_POST['txtDetail']);
            $this->author->updateByID($array,$id);
            $this->view("admin/pages/author/authorAjax",array(
                "Author" => $this->author->getAll()
            ));
        }
    }
    function delete($id){
        if(isset($_POST['checkDelete'])){
            $this->author->delete($id);
            $this->view("admin/pages/author/authorAjax",array(
                "Author" => $this->author->getAll()
            ));
        }
    }
    function pages() {
        $this->view("pages/404");
    }
}
?>
