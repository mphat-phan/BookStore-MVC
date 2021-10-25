<?php
class Product extends Controller{
    
    function __construct(){
        $this->product = $this->model("ProductModel");
        
    }

    function index(){
        $this->view("layout",array(
			"Page" => "product",
            "Product" => $this->product->getAll()            
		));        
    }
    function ajax(){
        $this->view("admin/pages/product/productAjax",array(
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