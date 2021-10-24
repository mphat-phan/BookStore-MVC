<?php
class Author extends Controller{
    
    function __construct(){
        $this->author = $this->model("AuthorModel");
        $this->view("layout",array(
			"Page" => "author",
            "Author" => $this->author->getAll()
    
		));
    }
    function add(){
        
        
    }
    function update(){

    }
    function delete(){

    }

}
?>