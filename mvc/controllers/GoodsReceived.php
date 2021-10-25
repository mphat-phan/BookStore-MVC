<?php
class GoodsReceived extends Controller{
    
    function __construct(){
        $this->goodsreceived = $this->model("GoodsReceivedModel");
        
    }

    function index(){
        $this->view("layout",array(
			"Page" => "goodsreceived",
            "Goodsreceived" => $this->goodsreceived->getAll()            
		));        
    }
    function ajax(){
        
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