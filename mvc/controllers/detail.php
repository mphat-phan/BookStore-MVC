<?php
error_reporting(0);
class detail extends Controller{

    function __construct(){
        $this->product = $this->model("ProductModel");
        $this->author = $this->model("AuthorModel");
        $this->sale = $this->model("SaleModel");                 
    }
    function product(){
        $this->view("layoutHome",array(
            "Page" => "product"
        ));

    }
    function author($id){
        $this->view("layoutHome",array(
            "Page" => "author"
        ));
    }
    function sale($id){
        $this->view("layoutHome",array(
            "Page" => "sale"
        ));
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