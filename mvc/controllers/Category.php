<?php
class Category extends Controller{
    
    function __construct(){
        $this->category = $this->model("CategoryModel");
        
    }

    function index(){
        $this->view("layout",array(
			"Page" => "category",
            "Category" => $this->category->getAll()            
		));        
    }
    function ajax(){
        $this->view("admin/pages/category/categoryAjax",array(
            "Author" => $this->author->getAll()
        ));
    }
    function add(){

    }
    function update(){

    }
    function delete(){

    }
    function pages() {
        $this->view("pages/404");
    }
}
?>