<?php
class Order extends Controller{
    
    function __construct(){
        $this->order = $this->model("OrderModel");
        
    }

    function index(){
        $this->view("layout",array(
			"Page" => "order",
            "Order" => $this->order->getAll()            
		));        
    }
    function ajax(){
        $this->view("admin/pages/order/orderAjax",array(
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