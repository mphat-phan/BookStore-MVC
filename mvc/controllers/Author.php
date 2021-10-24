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
        if(isset($_POST['submit'])){
         
            $name = $_POST['txtName'];
            $detail= $_POST['txtDetail'];

            $array = array('name' => $_POST['txtName'], "detail" => $_POST['txtDetail']);

            return $this->author->add($array);
        }
        
    }
    function update($id){
        
        if(isset($_POST['submit'])){
            $name = $_POST['txtName'];
            $detail= $_POST['txtDetail'];
            $array = array('name' => $_POST['txtName'], "detail" => $_POST['txtDetail']);
            return json_encode($this->author->updateByID($array,$id));
        }

    }
    function delete($id){
        echo $id;
        if(isset($_POST['submit'])){
            return $this->author->delete($id);
        }
    }

}
?>