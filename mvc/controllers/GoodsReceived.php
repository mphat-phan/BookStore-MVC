<?php
class GoodsReceived extends Controller{
    
    function __construct(){
        //$this->goodsreceived = $this->model("GoodsReceivedModel");
        //$this->detailgoodsreceived = $this->model("DetailGoodsReceivedModel");
        $this->product = $this->model("ProductModel");
    }

    function index(){
        $this->view("layout",array(
			"Page" => "goodsreceived",
            "Product"=> $this->product->getAll()
            //"Goodsreceived" => $this->goodsreceived->getAll()            
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